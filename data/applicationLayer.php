<?php

header('Content-type: application/json');
require_once __DIR__ . '/dataLayer.php';

$action = $_POST["action"];

switch($action){
	case "LOGIN" : loginFunction();
		break;
	case "REGISTERCONSUMER" : registerConsumerFunction();
		break;
	case "REGISTERRESTAURANT" : registerRestaurantFunction();
		break;
	case "ACTIVESESSION" : activeSessionFunction();
		break;
	case "ENDSESSION" : endSessionFunction();
		break;
	case "LOADRESTAURANTS" : loadRestaurantsFunction();
		break;
	case "LOADPROMOTIONS" : loadPromotionsFunction();
		break;
	case "LOADPROMOTIONSMANAGER" : loadPromotionsManagerFunction();
		break;
	case "GETCUSTOMERSREVIEWS" : getCustomersReviewsFunctions();
		break;
	case "GETRESTAURANTSREVIEWS" : getRestaurantsReviews();
		break;
	case "INSRTUSERREVIEW" : insertUserReviewFunction();
		break;
	case "ADDPROMOTIONSMANAGER" : addPromotionsManagerFunction();
		break;
	case "DELETEPROMOTIONSMANAGER" : deletePromotionsManagerFunction();
		break;
}

function loginFunction(){

	$userName = $_POST['username'];
	$userPassword = $_POST['userPassword'];
	$typeUser = $_POST['typeUser'];

	$result = attemptLogin($userName, $userPassword, $typeUser);

	if ($result["status"] == "SUCCESS"){
		$remember = $_POST["remember"];

		if($remember == "true"){
			setcookie("user", "$userName", time() + (86400 * 30), "/", "", 0);
		}

		session_start();
		$_SESSION['user'] = $userName;
		$_SESSION['loginTime'] = time();
		$_SESSION['typeUser'] = $typeUser;

		echo json_encode(array("message" => $typeUser));
	}	
	else{
		header('HTTP/1.1 500' . $result["status"]);
		die($result["status"]);
	}	
}

function registerConsumerFunction(){

	$userName = $_POST['username'];
	$typeUser = $_POST['typeUser'];

	$result = attemptValidateUser($userName, $typeUser);

	if ($result["status"] == "SUCCESS"){

		session_start();
		$_SESSION['user'] = $userName;
		$_SESSION['loginTime'] = time();
		$_SESSION['typeUser'] = $typeUser;

		$userPassword = $_POST['userPassword1'];
		$userFirstName = $_POST['userFirstName'];
		$userLastName = $_POST['userLastName'];
		$userEmail = $_POST['userEmail'];
		$userCountry= $_POST['userCountry'];
		$userGender= $_POST['userGender'];
		$userBDay = $_POST['day'];
		$userBMonth = $_POST['month'];
		$userBYear = $_POST['year'];

		$completeResult = attemptRegisterConsumer($userName, $userPassword, $userFirstName, $userLastName, $userEmail, $userCountry, $userGender, $userBDay, $userBMonth, $userBYear);

		if ($completeResult["status"] == "SUCCESS"){
			echo json_encode(array("message" => "New record created successfully!")); 

		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($completeResult["status"]);
		}
	}
	else{
		header('HTTP/1.1 500' . $result["status"]);
		die($result["status"]);
	}
}

function registerRestaurantFunction(){

	$userName = $_POST['newUsernameRestaurant'];
	$typeUser = $_POST['typeUser'];

	$result = attemptValidateUser($userName, $typeUser);

	if ($result["status"] == "SUCCESS"){

		session_start();
		$_SESSION['user'] = $userName;
		$_SESSION['loginTime'] = time();
		$_SESSION['typeUser'] = $typeUser;

		$RestaurantName = $_POST["RestaurantName"];
		$newUsernameRestaurant = $_POST["newUsernameRestaurant"];
		$email = $_POST["RestaurantEmail"];
		$restaurantAddress = $_POST["restaurantAddress"];
		$RestaurantPassword = $_POST["RestaurantPassword1"];
		$restaurantPhone = $_POST["restaurantPhone"];
		$restaurantWebpage = $_POST["restaurantWebpage"];
		$openHour = $_POST["openHour"];
		$openMin = $_POST["openMin"];
		$closeHour  = $_POST["closeHour"];
		$closeMin = $_POST["closeMin"];
		$securityKey = $_POST["securityKey"];
		$maxCapacity = $_POST["maxCapacity"];

		$completeResult = attemptRegisterRestaurant($userName, $RestaurantName, $newUsernameRestaurant, $email, $restaurantAddress, $RestaurantPassword, $restaurantPhone, $restaurantWebpage, $openHour, $openMin, $closeHour, $closeMin, $securityKey, $maxCapacity);

		if ($completeResult["status"] == "SUCCESS"){
			echo json_encode(array("message" => "New record created successfully!")); 

		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($completeResult["status"]);
		}
	}
	else{
		header('HTTP/1.1 500' . $result["status"]);
		die($result["status"]);
	}
}

function activeSessionFunction(){

	session_start();

	if(isset($_SESSION['user']) && $_SESSION['typeUser'] == "consumer"  && time() - $_SESSION['loginTime'] < 1800){ 
		echo json_encode(array("message" => "consumer"));
	}
	elseif(isset($_SESSION['user']) && $_SESSION['typeUser'] == "manager" && time() - $_SESSION['loginTime'] < 1800){ 
		echo json_encode(array("message" => "manager"));
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}
}

function endSessionFunction(){

	session_start();
	
	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 
		session_unset();
		session_destroy();
		echo json_encode(array("message" => "End Session"));
	}
	else {
		header('HTTP/1.1 410 Something went wrong');
		die("Something went wrong");
	}

}

function loadRestaurantsFunction(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$result = attemptGetRestaurants();

		if ($result["status"] == "SUCCESS"){
			echo json_encode($result["arrayRestaurants"]);
		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}

}

function loadPromotionsFunction(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$result = attemptGetPromotions();

		if ($result["status"] == "SUCCESS"){
			echo json_encode($result["arrayPromotions"]);
		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}
}

function loadPromotionsManagerFunction(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$username = $_SESSION['user'];
		$result = attemptGetPromotionsManager($username);

		if ($result["status"] == "SUCCESS"){
			echo json_encode($result["arrayPromotions"]);
		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}
}

function getCustomersReviewsFunctions(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$result = attemptGetCustomersReviews();

		if ($result["status"] == "SUCCESS"){
			echo json_encode($result["arrayCustomersReviews"]);
		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}
}

function getRestaurantsReviews(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$result = attemptGetRestaurantsReviews();

		if ($result["status"] == "SUCCESS"){
			echo json_encode($result["arrayRestaurantsReviews"]);
		}
		else {
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}

}

function insertUserReviewFunction(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$username = $_SESSION['user'];
		$review = $_POST['review'];
		$rating = $_POST['rating'];
		$name = $_POST['restaurantName'];

		$result = attemptAddReviews($username, $review, $rating, $name);

		if ($result["status"] == "SUCCESS"){
			echo json_encode(array("review" => $review, "username" => $username, "name" => $name,"rating" => $rating, "message" => "Comment added succesfully!"));
		}	
		else{
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}

}

function addPromotionsManagerFunction(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$username = $_SESSION['user'];
		$name = $_POST["name"];
		$description = $_POST["description"];
		$initDay = $_POST["initDay"];
		$initMonth = $_POST["initMonth"];
		$initYear = $_POST["initYear"];
		$expireDay = $_POST["expireDay"];
		$expireMonth = $_POST["expireMonth"];
		$expireYear = $_POST["expireYear"];
		$imageURL = $_POST["imageURL"];

		$result = attemptAddPromotion($username, $name, $description, $initDay, $initMonth, $initYear, $expireDay, $expireMonth, $expireYear, $imageURL);

		if ($result["status"] == "SUCCESS"){
			echo json_encode(array( "message" => "Promotion added succesfully!"));
		}	
		else{
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}

}

function deletePromotionsManagerFunction(){
	session_start();

	if(isset($_SESSION['user']) && time() - $_SESSION['loginTime'] < 1800){ 

		$username = $_SESSION['user'];
		$id = $_POST["id"];

		$result = attemptDeletePromotion($username, $id);

		if ($result["status"] == "SUCCESS"){
			echo json_encode(array( "message" => "Promotion deleted succesfully!"));
		}	
		else{
			header('HTTP/1.1 500' . $result["status"]);
			die($result["status"]);
		}
	}
	else {
		header('HTTP/1.1 410 Session has expired');
		die("Session has expired");
	}

}




?>