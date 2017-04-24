<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  





	

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP */

if (1>10) {
	
}elseif (1 >10) {
	
}else {

	echo "I love php <br>";
}

// Step 2: Make a forloop  that displays 10 numbers

for ($i=0; $i <= 10 ; $i++) { 
	echo $i . "<br>";
}



// Step 3 : Make a switch Statement that test againts one condition with 5 cases

switch (10) {
	case '1':
		
		break;
	
	case '2':
		
		break;
	
	case '3':
		
		break;
	
	case '10':
		echo "It is ten";
		break;
	
	default:
		echo "test";
		break;
}


	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>