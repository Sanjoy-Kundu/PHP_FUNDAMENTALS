<?php



if(isset($_POST["submit"]) == "POST"){
	if(empty($_POST["name"])){
		echo "<span style='color:red'>Name field is required</span><br/>";
	}else{
		echo "Your name: ".$_POST["name"];
	}
	if(empty($_POST["email"])){
		echo "<span style='color:red'>Email Field is Required</span> <br/>";
	}else{
		echo  "Your email ".$_POST["email"];
	}

	if(empty($_POST["address"])){
		echo "<span style='color:red'>Address field is required</span> <br/>";
	}else{
		echo  "Your Address ".$_POST["address"];
	}
	
	if(empty($_POST["date"])){
		echo  "<span style= 'color:red'>Please select Your Date of Birth</span> <br/>";
	}else{
		$inputDate = $_POST["date"];
		$inputDateNumber = (int)$inputDate;
		$todaysDate = date('Y-d-m');
		$todayDateNumber = (int)$todaysDate;
		$perfectAge = $todayDateNumber - $inputDateNumber;
		if($perfectAge < 18){
			echo "You are not Adult";
		}else{
			echo "Your age is $perfectAge";
		}
	}

	if(empty($_POST["gender"])){
		echo "<span style='color:red'>Please select a option</span> <br/>";
	}else{
		echo  "You are ".$_POST["gender"];
	}

	if(empty($_POST["number"])){
		echo  "<span style='color:red'>This field is required</span>";
	}else{
		echo "Your Mobile Number is".$_POST["number"];
	}
}




?>