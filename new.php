<?php
//error_reporting(E_ALL);
//require "MPDF57/mpdf.php";
require_once __DIR__ . '/pdf-test/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/pdf-test/challans']);
//$mpdf=new mPDF('', 'Legal');
$mpdf->AddPage('L');
$mpdf->WriteHTML(myHTML());
$mpdf->SetDisplayMode('fullpage');

$mpdf->Output();



function myHTML()
{
	return("

		<html>
<head>
	<title>PDF Form</title>


</head>
<body>

		<div class="container mt-5">


			<form action="makepdf.php" method="post" class="offset-md-3 col-lg-6">
				

				<h1>Create your own PDF</h1>
				<p>Fill Out</p>

				<div class="row">

				<div class="col-lg-6"> <input type="text" name="Name" placeholder="First Name" class="form-control" required> </div>

				<div class="col-lg-6"> <input type="text" name="FName" placeholder="Father Name" class="form-control" required> </div> 

				</div>


				<div class="mb-2"> <input type="email" name="email" placeholder="Email" class="form-control" required> </div>

				<div class="mb-2"> <input type="tel" name="phone" placeholder="phone" class="form-control" required> </div>

				<div class="mb-2"> <textarea name="message" placeholder="your message" class="form-control" required></textarea> </div>

				<button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>


			</form>
			


		</div>


</body>
</html>




			");	
}

?>