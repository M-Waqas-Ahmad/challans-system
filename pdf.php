<?php 

require_once __DIR__ . '/pdf-test/vendor/autoload.php';

$mpdf= new Mpdf\Mpdf();

$mpdf->WriteHTML("");
$mpdf->output();


function myHTML()
{
	return("

		<html>
<head>
	<title>PDF Form</title>


</head>
<body>

		<div class=\"container mt-5\">


			<form  class=\"offset-md-3 col-lg-6\">
				

				<h1>Create your own PDF</h1>
				<p>Fill Out</p>

				<div class=\"row\">

				<div class=\"col-lg-6\"> <input type=\"text\" name=\"mame\" placeholder=\"First Name\" class=\"form-control\" required> </div>

				

				<button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">Create PDF</button>


			</form>
			


		</div>


</body>
</html>





		");	
}



 ?>