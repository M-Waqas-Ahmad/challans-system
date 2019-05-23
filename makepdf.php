<?php
//error_reporting(E_ALL);
//require "MPDF57/mpdf.php";
require_once __DIR__ . '/pdf-test/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/pdf-test/challans']);
//$mpdf=new mPDF('', 'Legal');


$mpdf = new Mpdf\Mpdf();

$data = '';

$name = POST['name'];
$fname = POST['fname'];
$email = POST['email'];
$phone = POST['phone'];
$mesage = POST['message'];





$data .= '<h1> Your Deatils </h1>';

$data .='<strong>First Name</strong> '. $name .' <br />';
$data .='<strong>Father Name</strong> '. $fname .' <br />';
$data .='<strong>Email</strong> '. $email .' <br />';
$data .='<strong>Contact No.</strong> '. $phone .' <br />';
$data .='<strongYour Message</strong> '. $message .' <br />';

$mpdf->WriteHTML($data);
$mpdf->SetDisplayMode('fullpage');

$mpdf->Output('myfile.pdf', 'D')


?>