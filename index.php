<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP FUNDAMENTAL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header class="container">
		<h2 class="header-title">PHP FUNDAMENTAL</h2>
	</header>



	<main class="container">
	<div class="left-right-title">
	<h1>Class One</h1>
	<h2>Notes By SANJOY</h2>
	</div>
	<hr>
	<!-------- php code started------ class one ----->
	<?php
		//step one
		$run_Output = "Hello PHP with String";
		echo "<h4 class='class-demo'>Class One Part One</h4>";
		echo $run_Output;
	?>

	<!------ php code started ------- code two -------->
	<?php
		echo "<h4 class='class-demo'>Declear PHP Variable</h4>";
		//declear variable with addition , string , multiplication, subtruction and so on



		/*=============================
		concatination adding string + number
		=================================*/
		$firstName = "Tom";
		$lastName = "Haks";
		$age = 30;
		$address = "USA";

		$aboutTom = "Hello, My name is ".$firstName." ".$lastName.". i am ".$age." years old."." And im from ".$address.".";
		echo $aboutTom ."<br/>";




		/*======================================================
		adding = addition , subtruction, multiplication, division , modulus  using declearing variable
		=======================================================*/
		$a = 20;
		$b = 11;
		$additon = $a + $b;
		$subtruction = $a - $b;
		$multiplication = $a * 10;
		$division = $a / $b;
		$modulus = $a % $b;

		echo "Total additon is 20 +11 = ".$additon."<br/> Total subtruction is ".$subtruction.'<br/> Total multiplication is '.$multiplication.'<br/> Total division is '.$division.'<br/> Total Modulis is '.$modulus;





		/*==================================
		my info using php
		 ===================================*/
		echo "<h2 class='class-demo'>Adding variable using String</h2>";
		$name = "Sanjoy Kundu";
		$myAge = 21;
		$from ="Madaripur";
		$aim = "Full Stack Web Developer";

		$sanjoysInfo = "<h3>Hello, My name is ".$name.". Im form ".$from.". Im ".$myAge." years old. I want to be a ".$aim.".</h3>";
		echo $sanjoysInfo;
	?>





<!------------- php assignment Operator ----------------->
<hr  class="gap-top">
				<?php
	echo "<h1 class='class-demo'>PHP Assignment Operator</h1>";
			echo "<div>
			<h2>Assignment Operator</h2>
			<table>
				
					<tr>
						<td>Name</td>
						<td>Symbol</td>
						<td>Example</td>
					</tr>
				
				<tbody>
					<tr>
							<td>Addition<td>
							<td>+=<td>
							<td>x += y (x = x+y)<td>
					</tr>
					<tr>
							<td>Addition<td>
							<td>-=<td>
							<td>x -= y (x = x-y)<td>
					</tr>
					<tr>
							<td>Multiplication<td>
							<td>*=<td>
							<td>x -= y (x = x*y)<td>
					</tr>
					<tr>
							<td>Division<td>
							<td>/=<td>
							<td>x /= y (x = x/y)<td>
					</tr>
					<tr>
							<td>Modulus<td>
							<td>%=<td>
							<td>x %= y (x = x%y)<td>
					</tr>
				</tbody>
			</table>
		</div>";
		echo "	<hr class='gap-top'>";

		echo "<h1>Assignment Operator Example</h1>";

		/*===========================
		Assignment Operator Example
		============================*/
		echo "
				<div class= 'assignment-operator'>
				additionIncrease = 20; <br/>
				subtructionIncrease = 40; <br/>
				modulusIncrease = 60; <br/>
				divisionIncrease = 80; <br/>
				multiplicationIncrease = 100; <br/>
				</div>
				";


				$additionIncrease = 20; 
				$subtructionIncrease = 40;
				$multiplicationIncrease = 100;
				$divisionIncrease = 80;
				$modulusIncrease = 60;


		echo "
				<div class = 'assignment-operator'>
				<p>
				additionIncrease += 100;<br/>
				subtructionIncrease -= 10;<br/>
				multiplicationIncrease *= 10; <br/>
				divisionIncrease /= 10; <br/>
				modulusIncrease %= 10; <br/>
				</p>
				</div>
						";

		echo "<h3>Final Output</h3>";
		$additionIncrease += 100;
		echo "Total Addition increasing is additionIncrease = (additinIncrease + 100) = (20 +100) = echo is ".$additionIncrease."<br/>";


		$subtructionIncrease -= 10;
		echo "Total Subtruction increasing is subtructionIncrease = (subtructionIncrease - 10) = (40 -10) = echo is  ".$subtructionIncrease."<br/>";


		$multiplicationIncrease *= 10;
		echo "Total multiplication increasing is multiplication = (multiplication * 10) = (100 * 10) = echo is ".$multiplicationIncrease."<br/>";


		$divisionIncrease /= 10;
		echo "Toal division Increasing is divisionIncrease = (divisonIncrease / 10) = (80 / 10) = echo is ".$divisionIncrease."<br/>";


		$modulusIncrease %= 10;
		echo "Total modulus increasing is modulusIncrease = (modulusIncrease % 10) = (60 % 10) = echo is ".$modulusIncrease."<br/>";







		/*========================================
		Concatination Operator 
		========================================*/
		echo "	<hr class='gap-top'>";
		echo "<h1>Concatination Operator (dot .)</h1>";

		echo "
				<div class = 'concate-operator'>
						OwnerName = SM. Kamrul Hassan;<br/>
						OwnerProfession = Teacher; <br/>
						CollegeName = DK Public School and College;<br/>
						Department = English;<br/>
				<div> <br/>
				";



		$OwnerName = "SM. Kamrul Hassan";
		$OwnerProfession = "Teacher";
		$CollegeName = "DK Public School and College";
		$Department = "English";
		
		$ownerInfo = "Hello,  Im ".$OwnerName.". Im a ".$OwnerProfession.". My College name is ".$CollegeName.". My Department is ".$Department.".";
	echo "<h3>Final Output</h3>";
	echo $ownerInfo;



	 



	/* ==========================================
	ELSE IF ELSEIF STATEMENT 
	============================================*/
	echo "<hr class='gap-top'>";
	echo "<h1>Else if ifElse Statement</h1>";


	echo "
			<div class = 'else-if-statement'>
			
			location = Madaripur;<br/>
			age = 27; <br/>

			if(location == Madaripur){ <br/>
			if(age == 22 || age == 27){ <br/>
			echo You can go to Field; <br/>
			}<br/>
				else{ <br/>
					echo Dont Move.;<br/>
				}<br/>
			}	<br/>
				else{ <br/>
						echo You locaion is not Madaripur; <br/>
					}<br/>
			<div>
			";

			echo "<br/> <br/>";


			echo "<h3>Final Output</h3>";
	$location = "Madaripur";
	$age = 27;
	if($location == "Madaripur"){
		if($age == 22 || $age == 27){
			echo "You can go to Field";
		}
		else{
			echo "Dont Move.";
		}
	}
	else{
		echo "<h2>Output is You locaion is not Madaripur</h2>";
	}
	echo "<br/>";






	/*================================================
	USING NESTED ELSE IF EXAM RESULT 
	================================================*/
	echo "	<hr class='gap-top'>";

	echo "<h1>Else if ifesle statement for exam result</h1>";

	echo "
		<div class='exam-result-sheet'>
					yourMarks = 32;<br/> <br/>

					if(yourMarks >= 80 && yourMarks <= 100){ <br/>
						echo You get A+. Your Result is yourMarks; <br/>
					}<br/>
					elseif(yourMarks >= 70 && yourMarks <= 79){<br/>
						echo You got A. Your Result is yourMarks;<br/>
					}<br/>
					elseif(yourMarks >= 60 && yourMarks <= 69){<br/>
						echo You got A -. Your Reult is yourMarks; <br/>
					}<br/>
					elseif(yourMarks >= 50 && yourMarks <= 59){ <br/>
						echo You got B. Your Result is yourMarks; <br/>
					}<br/>
					elseif(yourMarks >= 40 && yourMarks <= 49){ <br/>
						echo You got C. Your Result is yourMarks; <br/>
					}<br/>
					elseif(yourMarks >= 33 && yourMarks <= 39){<br/>
						echo You got D. Your Result is yourMarks; <br/>
					}<br/>
					else{<br/>
						echo You  got F. Your Result is yourMarks; <br/>
					}<br/>

		</div>
	";
	echo "<br/><br/>";
	echo "<h3>Final Output</h3>";

	$yourMarks = 32;

	if($yourMarks >= 80 && $yourMarks <= 100){
		echo "You get A+. Your Result is ".$yourMarks;
	}
	elseif($yourMarks >= 70 && $yourMarks <= 79){
		echo "You got A. Your Result is ".$yourMarks;
	}
	elseif($yourMarks >= 60 && $yourMarks <= 69){
		echo "You got A -. Your Reult is ".$yourMarks;
	}
	elseif($yourMarks >= 50 && $yourMarks <= 59){
		echo "You got B. Your Result is ".$yourMarks;
	}
	elseif($yourMarks >= 40 && $yourMarks <= 49){
		echo "You got C. Your Result is ".$yourMarks;
	}
	elseif($yourMarks >= 33 && $yourMarks <= 39){
		echo "You got D. Your Result is ".$yourMarks;
	}
	else{
		echo "You  got F. Your Result is ".$yourMarks;
	}






	/* =================================================================
	FINDING EVEN AND ODD NUMBER
	=====================================================================*/
	echo "	<hr class='gap-top'>";

	echo "<h1>Finding even(2n) and Odd(2n+1) Number</h1>";

	echo "
			<div class = 'even-odd'> 
			anyNumber = 29; <br/>
			if(anyNumber %2 == 0){<br/>
				echo anyNumber.even number;<br/>
			}<br/>
			else{ <br/>
				echo anyNumber.odd number;<br/>
			}<br/>
			</div>
			";
			echo "<br/>";

			echo "<h3>Final Output</h3>";
			$anyNumber = 29;
			if($anyNumber %2 == 0){
				echo $anyNumber."even number";
			}
			else{
				echo $anyNumber."odd number";
			}
echo "<br/>";



	
/* ==============================
FINDING VOWEL AND CONSONANT 
===================================*/
	echo "	<hr class='gap-top'>";

	echo "<h1>Finding Vowel and Consonant</h1>";

	echo "<div>
			letter = A;<br/>
			if(strToLower(letter) == a || strToLower(letter) == e|| strToLower(letter) == i || strToLower(letter) == o || strToLower(letter) == u ){<br/>
				echo letter. is Vowel;<br/>
			}else{<br/>
				echo letter. is Consonant;<br/>
			};<br/>
			</div>";

			echo "<br/>";

			echo "<h3>Final Ouput</h3>";
			$letter = "X";
			if(strToLower($letter) == "a" || strToLower($letter) == "e"|| strToLower($letter) == "i" || strToLower($letter) == "o" || strToLower($letter) == "u" ){
				echo $letter." is Vowel";
			}else{
				echo $letter." is Consonant";
			};

			echo "<br/>";



/* ==================================
FINDING EVEN AND ODD NUMBER BETWEEN 1 to 20
===========================================*/
	echo "	<hr class='gap-top'>";
	echo "<h1>FINDING EVEN AND ODD NUMBER BETWEEN 1 to 20</h1>";

	echo '
		<div class= "1-20-even-odd">
		$numbers = 20;<br/>
		for($num = 1; $num <= $numbers; $num++){<br/>
			if($num % 2 == 0){<br/>
				echo $num."is even <br/>";<br/>
			}else{<br/>
				echo $num."is odd <br/>";<br/>
			}
		}<br/>
		</div>
	';
	echo "<br/>";


	$numbers = 20;
	for($num = 1; $num <= $numbers; $num++){
		if($num % 2 == 0){
			echo $num."is even <br/>";
		}else{
			echo $num."is odd <br/>";
		}
	}




	/* ==================================
FINDING EVEN AND ODD NUMBER BETWEEN 1 to 20
===========================================*/
echo "	<hr class='gap-top'>";
echo "<h1>String Function strlen, str_word_count,  strrev, str_replace explore</h1>";
echo "<br/> <br/>";


echo "<h3>StrLen (total string length)</h3>";
$countryName = "My country name is Bangladesh.";
$totalLength = strlen($countryName);
echo "Country Name ".$countryName."<br/>";
echo "Total country length is ".$totalLength."<br/> <br/> <br/>";



/* ========================================================
String uppercase to lowercase and lowercase to uppercase
===========================================================*/
echo "<h3>String Uppercase to Lowercase</h3>";

$demo1 = "Hello Buddy, Im form UK";
$demo1LowerCase = strToLower($demo1);
echo $demo1."<br/>";
echo $demo1LowerCase."<br/> <br/> <br/>";




echo "<h3>String Lowercase to Uppercase</h3>";
$demo2 = "I want to be a PHP Developer.";
$demo2ToUpperCase = strtoupper($demo2);
echo $demo2."<br/>"; 
echo $demo2ToUpperCase."<br/><br/> <br/>";

 


/*==================================
String word count
=========================================*/
echo "<h3>String total word Count</h3>";
$demo3 = "Tree plantation means growing more trees. Trees are helpful to us in many ways";
$demo3TotalWord = str_word_count($demo3);
echo $demo3."<br/>";
echo "Total word is ".$demo3TotalWord."<br/> <br/>";




/*==================================
sting reverse 
=======================================*/
echo "<h3>String reverse</h3>";
$demo4 = "Hello PHP";
$demo4Reverse = strrev($demo4);
echo "General Way ".$demo4."<br/>";
echo "Reverse Way ".$demo4Reverse."<br/> <br/><br/>";



/* ===========================================================
Str_replace 
SYNTAX = str_replace("find", "replace", variable name)
=============================================================*/

echo "<h3>String replace</h3>";
$massege1 = "Hello Dude. The world is nice";
$replaceMassege = str_replace("world", "earth", $massege1);
echo $massege1."<br/>";
echo $replaceMassege."<br/>";









	/* ==================================
PHP ARRAY
===========================================*/
echo "	<hr class='gap-top'>";
echo "<h1>PHP ARRAY</h1>";
echo "<br/> <br/>";

echo '<div>
<h3>$colors = array("red", "green", "blue", "purple");</h3>
$firstIndexOutput = $colors[0];<br/>
$secondIndexOutput = $colors[1];<br/>
$thirdIndexOutput = $colors[2];<br/>

</div> <br/> <br/>';


//declear an array
echo "<p>Finding array using index number. index number start form 0</p><br/>";
echo "<h3>Final Output <br/>";
$colors = array("red", "green", "blue", "purple");
$firstIndexOutput = $colors[0];
$secondIndexOutput = $colors[1];
$thirdIndexOutput = $colors[2];
echo "First index is ".$firstIndexOutput."<br/>";
echo "Second index is ".$secondIndexOutput."<br/>";
echo "First index is ".$thirdIndexOutput."<br/> <br/> <br/>";



/* ============================== 
Array output using  foreach loop
=================================*/

echo '
	<h2>Array output using  foreach loop</h2> <br/>
<div>
$peoples = ["Jony", "Roni", "Simul", "Akash", "Batash", "Banti vai"];<br/>
$peoplesLength = count($peoples);<br/>
foreach($peoples as $people){ <br/>
	echo $people;<br/>
}
		</div> <br/>';

echo "<h3>Final Output<h3>";
$peoples = ["Jony", "Roni", "Simul", "Akash", "Batash", "Banti vai"];
$peoplesLength = count($peoples);
foreach($peoples as $people){
	echo $people."<br/>";
};
echo "<br/><br/>";



/*=====================================
Array output using for loop
==================================*/
echo '
	<h2>Array output using  for loop</h2> <br/>
		<div>
			$fruits = ["Mango", "Jackfruits", "Blackbary", "Gragon"];<br/>
			$totalFruits = count($fruits);<br/>
			for($i = 0; $i < $totalFruits; $i++){ <br/>
				echo $fruits[$i]."<br/>";
			}
		</div> 
	<br/>';

echo "<h3>Final Output<h3>";
$fruits = ["Mango", "Jackfruits", "Blackbary", "Gragon"];
$totalFruits = count($fruits);
for($i = 0; $i < $totalFruits; $i++){
	echo $fruits[$i]."<br/>";
}








	/* ==================================
PHP Associative ARRAY(key value pair)
===========================================*/
echo "	<hr class='gap-top'>";
echo "<h1>PHP Associative ARRAY(key value pair)</h1>";
echo "<br/> <br/>";

echo ' 
	<div> 
	<h2>Associative array syntax: </h2>
	$country = array(Banglasesh => 1971, India => 1047, Japan = 1932);<br/>
	<br/>

	$country[Bangladesh] = 1971;<br/>
	$country[India] = 1971;<br/>
	$country[Japan] = 1932;<br/>
	</div><br/>
';

$ages = array("Romin" => 70, "Khokon"  => 60, "Jibon" => 50);
echo  "Im Romin".$ages['Romin']."Years old";

/* 
===================================================================================
Multidimentional Array
===============================================================================
*/
echo "	<hr class='gap-top'>";
echo "<h1>PHP Multidimentional Array</h1>";
echo "<br/> <br/>";


echo '
			<div>
			$routine = array(
				"ONE" => array("mango", "jackfruits", "banana",array(12, 100, 21)),<br/>
				"TWO" => array("Dhka", array("Madaripur", "JamalPur", "Barisal"), "Khulna", 7902),<br/>
				"CARS" => array("Hanif", "Sakura", "Ena", "London Express", array("Volvo", "SCANIA", "HINO", "HUNDAI"))<br/>
		);<br/><br/>
		
		echo $routine["ONE"][3][1]."; <br/>"
		echo $routine["ONE"][1].";<br/>"
		echo $routine["CARS"][3].; "<br/>"
		echo $routine ["CARS"][4][0].; "<br/>"
			</div>
';

$routine = array(
		"ONE" => array("mango", "jackfruits", "banana",array(12, 100, 21)),
		"TWO" => array("Dhka", array("Madaripur", "JamalPur", "Barisal"), "Khulna", 7902),
		"CARS" => array("Hanif", "Sakura", "Ena", "London Express", array("Volvo", "SCANIA", "HINO", "HUNDAI"))
);


echo "Total output is ".$routine["ONE"][3][1]."<br/>"; //100
echo "Total output is ".$routine["ONE"][1]."<br/>";//jackfruits
echo "Total output is ".$routine["CARS"][3]."<br/>"; //london Express
echo "Total output is ".$routine ["CARS"][4][0]."<br/>"; //volvo

echo "<br/> <br/>";
echo "<br/> <br/>";

echo '
	<div>
	$diet = array(<br/>
		"day_one" => array("apple", "banana", "ginger"),<br/>
		"day_two" => array("kiwi", "salt", "egg", <br/>
													array("salt" => "0.5%", "kiwi" => "1.2%", <br/>"egg" => "1%"), array(10, 11, 12,13)),<br/>
	);<br/>
	echo $diet["day_two"][2]; <br/>
	echo $diet["day_two"][3]["salt"];<br/>
	echo $diet["day_two"][4][0];<br/>
	</div>

';




$diet = array(
	"day_one" => array("apple", "banana", "ginger"),
	"day_two" => array("kiwi", "salt", "egg", 
												array("salt" => '0.5%', "kiwi" => "1.2%", "egg" => "1%"), array(10, 11, 12,13)),
);
echo $diet["day_two"][2]; //egg
echo $diet["day_two"][3]["salt"]; // 0.5%
echo $diet["day_two"][4][0]; //10





/* 
====================================================================================
PHP FUNCTION
=================================================================================
*/
echo "	<hr class='gap-top'>";
echo "<h1>PHP FUNCTION</h1>";
echo "<br/> <br/>";

echo "<h2>Simple Function</h2>";
echo '
	<div>
			function greetings(){ <br/>
				echo "My name is Sanjoy"; <br/>
			}<br/>
			greetings(); <br/>
	</div>
';

echo "<br/>";
echo "<h2>Function with passing argument</h2>";
echo '<div>
		function fullName($firstName, $lastName){ <br/>
			$finalName = "My name is ".$firstName." ".$lastName; <br/>
				echo $finalName;<br/>
		}<br/>
	</div>';

	echo "<br>";
	echo "<h2>Function with by default parameter</h2>";
	echo '
		<div>
		function fruits($fruits = "Mango"){ <br/>
			echo "My favourite food is $fruits"; <br/>
		}<br/>
		
		</div>
	';

/* =========== simple function =============*/
function greetings(){
	echo "My name is Sanjoy.";
}


/*================ function pass argument ===========*/
function fullName($firstName, $lastName){
	$finalName = "My name is ".$firstName." ".$lastName;
	echo $finalName;
};
echo "<br/>";


/* ============  create a function using default parameter========*/
function fruits($fruits = "Mango"){
	echo "My favourite food is $fruits";
}


/*========== function Output =========*/

echo "<br/>";
/*================simple function output ========= */
echo "<h3>Final Output single function</h3>";
greetings();
echo "<br/>";
/* ============== function output using parameter =========*/
echo "<h3>Final Output passing function argument</h3>";
fullName("Sanjoy", "Sanjoy");
echo "<br/>";

/* ============  create a function using default parameter========*/
echo "<h3>Final Output using by default parameter</h3>";
fruits("Apple");
echo "<br/>";
fruits();
?>









<?php
/* 
====================================================================================
PHP SUPER GLOBALS
=================================================================================
*/
echo "	<hr class='gap-top'>";
echo "<h1>PHP SUPERGLOBALS</h1>";
echo "<br/> <br/>";


echo '
<h2>Most Super Globals Are:</h2>
<ol>
<li><h3>$_GLOBALS</h3></li>
<li><h3>$_SERVER</h3></li>
<li><h3>$_REQUEST</h3></li>
<li><h3>$_POST</h3></li>
<li><h3>$_GET</h3></li>
<br/>
<br/>
<li><h3>$_FILE</h3></li>
<li><h3>$_ENV</h3></li>
<li><h3>$_COOKIE</h3></li>
<li><h3>$SESSION</h3></li>
</ol>


<br/>
<br/> <br/>
<h2>$GLOBALS VARIABLE</h2>
<br/>
$m = 10; <br/>
$n = 20;<br/>

function sum(){ <br/>
	$GLOBALS["z"] = $GLOBALS["m"] + $GLOBALS["n"]; <br/>
}<br/>
sum(); <br/>
echo $z; <br/>

';

$m =10;
$n = 20;

function sum(){
	$GLOBALS["z"]  = $GLOBALS["m"] + $GLOBALS["n"];
}
sum();
echo "<h3>FInal Output </h3>";
echo $z;
echo "<br/> <br/> <br/>" ;


echo "<h1>_SERVER(SUPER GLOBALS VARIABLE)</h1>";
echo '
	<h2>_SERVER</h2>
	<ol>
		<li>$_SERVER["PHP_SELF]</li>
		<p>output php index file</p>
		<li>$_SERVER["SERVER_NAME]</li>
		<p>Output server Name</p>
		<li>$_SERVER["HTTP_USER_AGENT]</li>
		<p>own server name such as google chrome</p>
		<li>$_SERVER["SERVER_ADDR"]<li>
		<p>server localhost id</p>
	</ol>
';
echo "<br/> <br/> <br/>" ;


echo "<h1>SUPERGLOBAL VARIABLE GET AND POST</h1>";
echo "<br/>
<h3> form submit GET data url pass </h3>
<p>GET দিয়ে সাধারনত ডাটা  url  দেখা  যায়। আমরা  form  যখন submit করবো তখন তার মেথড  যদি post  লিখি এবং ডাটা যদি সাবমিট করি তখন ডাটা যাবে url এ</p>

<p>POST দিয়ে ডাটা একটা  ফইল  থেকে অন্য ফাইলে নেওয়ার জন্য POST মেথড ব্যবহার করা হয়।</p>

";

echo "<br/><br/>";
echo '
<p>Now if we are working this form atfirst we can send all input field information form <span style="color:red">index.php</span> to <span style="color:red">index2.php</span></p>

<p>Now we can set the form action index2.php for send all information send this file and set method name is qualto POST.</p>
 <br/><br/>
<div>
form action="index2.php" method="post" <br/>
table <br/>
	tr <br/>
		tdName: /td <br/>
		tdinput type="text" name="name" id="" placeholder="Enter Your Name"/td <br/>
	/tr <br/>
	tr <br/>
		tdEmail: /td <br/>
		tdinput type="email" name="email" id="" placeholder="Enter Your Email"/td <br/>
	/tr <br/>
	tr <br/>
		tdAddress:  <br/>/td <br/>
		tdinput type="text" name="address" id="" placeholder="Enter Your Address"/td <br/>
	/tr <br/>
	tr <br/>
		tdPhone: /td <br/>
		tdinput type="number" name="number" id="" placeholder="Enter Your Number"/td> <br/>
	/tr <br/>
	tr <br/>
		td/td <br/>
		tdinput type="submit" value="Submit"/td> <br/>
	/tr <br/>
/table <br/>
/form <br/>
</div>
===========================================
';

echo "	<hr class='gap-top'>";
echo "<h1>PHP FORM DATE FIND</h1>";
echo "<br/> <br/>";
?>

<form action="index2.php" method="POST">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" id="" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="email" name="email" id="" placeholder="Enter Your Email"></td>
		</tr>
		<tr>
			<td>Address: </td>
			<td><input type="text" name="address" id="" placeholder="Enter Your Address"></td>
		</tr>
		<tr>
			<td>Date Of Birth: </td>
			<td><input type="date" name="date" id=""    ></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td>
				<input type="radio" name="gender" id="" value="Male">Male
				<input type="radio" name="gender" id="" value="Female">Female
		</td>
		</tr>
		<tr>
			<td>Phone: </td>
			<td><input type="number" name="number" id="" placeholder="Enter Your Number"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>
</form>

<?php
echo '
<h3>Validation INFO<h3><br/>
if(isset($_POST["submit"]) == "POST"){<br/>
	if(empty($_POST["name"])){<br/>
		echo "<span style=color:red">Name field is required</span>";<br/>
	}else{ <br/>
		echo $_POST["name"]; <br/>
	}<br/> <br/>
	if(empty($_POST["email"])){<br/>
		echo "<span style=color:red">Email Field is Required</span>";<br/>
	}else{<br/>
		echo  $_POST["email"];<br/>
	}<br/> <br/>

	if(empty($_POST["address"])){ <br/>
		echo "<span style=color:red">Address field is required</span>";<br/>
	}else{<br/>
		echo  $_POST["address"];<br/>
	}<br/><br/>
	
	if(empty($_POST["date"])){<br/>
		echo  "<span style= color:red">Please select Your Date of Birth</span>"<br/>
	}else{<br/>
		echo $_POST["date"];<br/>
	}<br/><br/>

	if(empty($_POST["gender"])){<br/>
		echo "<span style=color:red">Please select a option</span>";<br/>
	}else{<br/>
		echo  $_POST["gender"];<br/>
	}<br/><br/>

	if(empty($_POST["number"])){<br/>
		echo  "<span style=color:red">This field is required</span>";<br/>
	}else{<br/>
		echo $_POST["number"];<br/>
		}<br/>
	}<br/>
';



echo "	<hr class='gap-top'>";
echo "<h1>PHP SIMPLE MATH</h1>";
echo "<br/> <br/>";


echo '
if(empty($_POST["number_one"])){ <br/>
	echo "This Filed is required"; <br/>
}else{ <br/>
	if(empty($_POST["number_two"])){ <br/>
		echo "This field is required"; <br/>
	}else{ <br/>
		if($_POST["action_btn"] == "add"){ <br/>
			$result = $_POST["number_one"] + $_POST["number_two"]; <br/>
			echo "Total Addition is ".$result; <br/>
		} else if($_POST["action_btn"] == "sub"){ <br/>
			$result = $_POST["number_one"] - $_POST["number_two"]; <br/>
			echo "Total subtruction is ".$result; <br/>
		}else if($_POST["action_btn"] == "multi"){ <br/>
			$result = $_POST["number_one"]  * $_POST["number_two"]; <br/>
			echo "Total multiplication is".$result; <br/>
		}else if($_POST["action_btn"] == "div"){ <br/>
			$result = $_POST["number_one"] / $_POST["number_two"]; <br/>
			echo "Total division is ".$result; <br/>
		} <br/>
	} <br/> <br/>
	';
?>

<form action="index2.php" method="POST">
		<table>
			<tr>
				<td>Number 1: </td>
				<td><input type="number" name="number_one" id="" placeholder="Enter Your Number "></td>
			</tr>
			<tr>
				<td>Number 2: </td>
				<td><input type="number" name="number_two" id="" placeholder="Enter Your Number "></td>
			</tr>
			<tr>
				<td></td>
				<td>
						<input type="submit" value="add" name="action_btn">
						<input type="submit" value="sub" name="action_btn">
						<input type="submit" value="multi" name="action_btn">
						<input type="submit" value="div" name="action_btn">
						<input type="submit" value="clear" name="action_btn">
				</td>
			</tr>
		</table>
	</form>


	<?php 
	echo "	<hr class='gap-top'>";
	echo "<h1>PHP SESSION WITH FROM & MATH CALCULATOR</h1>";
	echo "<h2>SESSION IS A SUPERGLOBAL VARIABLE {'$-SESSION[any_name] = #result'}</h2>";
	echo "<br/> <br/>";

	echo " 
	<h3>SESSION হচ্ছে আমরা মুলত একটা পেইজে (index.php)একটা ফরম তেরি করবো তার ভ্যালিডেশন আমরা অন্য একটা পেইজে(value.php) করতাম এবং যেই পেইজে ভ্যালিডেশন করতাম সেই পেইজে আউটপুট দেখাইতাম। <br/> <br/>
	 তবে আমরা এখন  (index.php) এ একটা ফরম তেরি করবো এবং তার ভ্যালিডেশন করবো (value.php)। এখন (value.php) এ ভ্যালিডেশন করবো ঠিক আছে  কিন্তু আমরা তার আউটপুট দেখাবো (index.php) মানে যেখানে ফরম তৈরি করবো সেখানে। <span style='color:red'>এজন্য আমদেরSESSION ব্যবহার করতে হবে।</span></h3>
	"
	
	
	?>


	</main>
	<footer class="container">
			<p class="footer-title container">PHP FUNDAMENTAL</p>

	</footer>

</body>
</html>