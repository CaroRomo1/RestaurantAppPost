<?php

function connectionToDataBase(){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "restaurant_app_database";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error){
		return null;
	}
	else{
		return $conn;
	}
}

function attemptLogin($userName, $userPassword, $typeUser){

	$conn = connectionToDataBase();

	if ($conn != null){
		if ($typeUser == "consumer") {
			$sql = "SELECT username, passwrd FROM user_information WHERE username = '$userName' AND passwrd = '$userPassword'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$conn -> close();
				return array("status" => "SUCCESS");
			}
			else {
				$conn -> close();
				return array("status" => "WRONG CREDENTIALS!");
			}
		}
		else {
			$sql = "SELECT rUsername, passwrd FROM restaurant_information WHERE rUsername = '$userName' AND passwrd = '$userPassword'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0)
			{
				$conn -> close();
				return array("status" => "SUCCESS");
			}
			else{
				$conn -> close();
				return array("status" => "WRONG CREDENTIALS!");
			}
		}
	}
	else{
		$conn -> close();
		return array("status" => "CONNECTION WITH DB WENT WRONG");
	}
}

function attemptValidateUser($username, $typeUser){

	$conn = connectionToDataBase();

	if ($conn != null){
		if ($typeUser == "consumer") {
			$sql = "SELECT username FROM user_information WHERE username = '$username'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$conn -> close();
				return array("status" => "USERNAME ALREADY IN USE");
			}
			else{
				$conn -> close();
				return array("status" => "SUCCESS");
			}
		}
		else {
			$sql = "SELECT rUsername FROM restaurant_information WHERE rUsername = '$username'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$conn -> close();
				return array("status" => "USERNAME ALREADY IN USE");
			}
			else{
				$conn -> close();
				return array("status" => "SUCCESS");
			}
		}
	}
	else{
		$conn -> close();
		return array("status" => "CONNECTION WITH DB WENT WRONG");
	}

}

function attemptRegisterConsumer($userName, $userPassword, $userFirstName, $userLastName, $userEmail, $userCountry, $userGender, $userBDay, $userBMonth, $userBYear){

	$conn = connectionToDataBase();

	if ($conn != null){
		$last_id = $conn->insert_id;
		$sql = "INSERT INTO user_information (idUser, fName, lName, username, passwrd, email, country, gender, birthDay, birthMonth, birthYear) VALUES ('$last_id', '$userFirstName', '$userLastName', '$userName', '$userPassword', '$userEmail', '$userCountry', '$userGender', '$userBDay','$userBMonth', '$userBYear')";

		$result = $conn->query($sql);

		if ($result) {
			$conn -> close();
			return array("status" => "SUCCESS");
		}
		else{
			$conn -> close();
			return array("status" => "ERROR");
		}
	}
	else{
		$conn -> close();
		return array("status" => "CONNECTION WITH DB WENT WRONG");
	}

}

function attemptRegisterRestaurant($userName, $RestaurantName, $newUsernameRestaurant, $email, $restaurantAddress, $RestaurantPassword, $restaurantPhone, $restaurantWebpage, $openHour, $openMin, $closeHour, $closeMin, $securityKey, $maxCapacity){

	$conn = connectionToDataBase();

	if ($conn != null){
		$last_id = $conn->insert_id;
		$sql = "INSERT INTO restaurant_information (idRestaurant, rName, rUsername, passwrd, address, phone, email, webpage, openHour, openMin, closeHour, closeMin, securityKey, maxCapacity) VALUES ('$last_id', '$RestaurantName', '$newUsernameRestaurant', '$RestaurantPassword', '$restaurantAddress', '$restaurantPhone', '$email', '$restaurantWebpage', '$openHour', '$openMin', '$closeHour', '$closeMin', '$securityKey', '$maxCapacity')";

		$result = $conn->query($sql);

		if ($result) {
			$conn -> close();
			return array("status" => "SUCCESS");
		}
		else{
			$conn -> close();
			return array("status" => "ERROR");
		}
	}
	else{
		$conn -> close();
		return array("status" => "CONNECTION WITH DB WENT WRONG");
	}

}

function attemptGetRestaurants(){
	$conn = connectionToDataBase();

	if ($conn != null){

		$sql = "SELECT rName, address, webpage, maxCapacity, AVG(rating) AS rating FROM restaurant_information, restaurant_reviews WHERE restaurant_reviews.rUsername = restaurant_information.rUsername GROUP BY rName, address, webpage, maxCapacity";
		$result = $conn->query($sql);

		# The current user exists
		if ($result->num_rows > 0)
		{
			$commentsBox = array();
			while($row = $result->fetch_assoc()) {
				$response = array('rName' => $row['rName'], 'address' => $row['address'], 'webpage' => $row['webpage'], 'maxCapacity' => $row['maxCapacity'], 'rating' => $row['rating']);  
				array_push($commentsBox, $response);
			}
			$conn -> close();
			return array("status" => "SUCCESS", "arrayRestaurants" => $commentsBox);
		}
		else
		{
			# The user doesn't exists in the Database
			$conn->close();
			return array("status" => "The user doesn't exists in the Database");
		}
		
	}
	else{
		$conn -> close();
		return array("status" => "CONNECTION WITH DB WENT WRONG");
	}
}

function attemptGetPromotions(){
	$conn = connectionToDataBase();

	if ($conn != null){

		$sql = "SELECT rName, name, descriptions, imageURL FROM restaurant_information, promotions WHERE restaurant_information.rUsername = promotions.rUsername";
		$result = $conn->query($sql);
		$commentsBox = array();
		while($row = $result->fetch_assoc()) {
			$response = array('rName' => $row['rName'], 'name' => $row['name'], 'descriptions' => $row['descriptions'], 'imageURL' => $row['imageURL']);  
			array_push($commentsBox, $response);
		}
		$conn -> close();
		return array("status" => "SUCCESS", "arrayPromotions" => $commentsBox);
	}
	else{
		$conn -> close();
		return array("status" => $result);
	}
}

function attemptGetCustomersReviews(){
	$conn = connectionToDataBase();

	if ($conn != null){

		$sql = "SELECT username, reviewText, rating FROM restaurant_information, restaurant_reviews WHERE restaurant_information.rUsername = restaurant_reviews.rUsername";
		$result = $conn->query($sql);
		$commentsBox = array();
		while($row = $result->fetch_assoc()) {
			$response = array('username' => $row['username'], 'reviewText' => $row['reviewText'], 'rating' => $row['rating']);  
			array_push($commentsBox, $response);
		}
		$conn -> close();
		return array("status" => "SUCCESS", "arrayCustomersReviews" => $commentsBox);
	}
	else{
		$conn -> close();
		return array("status" => $result);
	}

}

function attemptGetRestaurantsReviews(){
	$conn = connectionToDataBase();

	if ($conn != null){

		$sql = "SELECT rName, username, reviewText, rating FROM restaurant_information, restaurant_reviews WHERE restaurant_information.rUsername = restaurant_reviews.rUsername";
		$result = $conn->query($sql);
		$commentsBox = array();
		while($row = $result->fetch_assoc()) {
			$response = array('rName' => $row['rName'],'username' => $row['username'], 'reviewText' => $row['reviewText'], 'rating' => $row['rating']);  
			array_push($commentsBox, $response);
		}
		$conn -> close();
		return array("status" => "SUCCESS", "arrayRestaurantsReviews" => $commentsBox);
	}
	else{
		$conn -> close();
		return array("status" => $result);
	}

}

function attemptAddReviews($username, $review, $rating, $name){
	$conn = connectionToDataBase();

	if ($conn != null){

		$last_id = $conn->insert_id;

		$sql = "INSERT INTO restaurant_reviews (idReview, rUsername, username, reviewText, rating) VALUES ('$last_id', '$name', '$username', '$review', '$rating')";	

		$result = $conn->query($sql);

		if ($result) {
			$conn -> close();
			return array("status" => "SUCCESS");
		}
		else{
			$conn -> close();
			return array("status" => "ERROR");
		}
	}
	else{
		$conn -> close();
		return array("status" => "CONNECTION WITH DB WENT WRONG");
	}
}



?>