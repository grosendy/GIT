<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

//  Step1: Define a function and make it return a calculation of 2 numbers

function function1(){
	echo 1 + 20;
}
function1();

// Step 2: Make a function that passes parameters and call it using parameter values	
function function2($number1, $number2){
	$sum = $number1 + $number2;
	return $sum;
}
function1();
echo "<br>";
echo (function2(10,10));

?>

</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>