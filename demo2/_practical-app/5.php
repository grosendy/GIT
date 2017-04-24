<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


  //Step1: Use a pre-built math function here and echo it

echo decbin(45678) . "<br>";
	//Step 2:  Use a pre-built string function here and echo it

echo md5("Mi mama me mima". "<br>");
	//Step 3:  Use a pre-built Array function here and echo it
echo "<br>";

$arreglo = array (50, 20, 35,100, 251, 987);
$valor = 150;
array_push($arreglo, $valor);
print_r($arreglo);
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>