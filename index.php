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







?>


	</main>
	<footer class="container">
			<p class="footer-title container">PHP FUNDAMENTAL</p>

	</footer>

</body>
</html>