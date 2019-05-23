<?php
//error_reporting(E_ALL);
//require "MPDF57/mpdf.php";
require_once __DIR__ . '/pdf-test/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/pdf-test/challans']);
//$mpdf=new mPDF('', 'Legal');
$mpdf->AddPage('L');
$mpdf->WriteHTML(myHTML($body));
$mpdf->SetDisplayMode('fullpage');

$mpdf->Output();



function myHTML()
{
	return("
		<html>
    <head>



        <title>TODO supply a title</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
		#wrapper{
			width: 100%;
			height: 100%;
			border: 1px solid black;
		}
		#challanOne{
			width: 33%;
			float: left;
			border: 1px solid black;
		}
		#challanLogo{
			width: 97%;
			margin-left: 110px;
			
			
		}
		#challanNum{
			width: 97%;
			margin: auto;
			border: 1px solid black;
			text-align: center;
		}
		#challanACNum{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanDep{
			width: 97%;
			margin: auto;
			border: 1px solid black;
			margin-top: 20px;
		}
		#challanApId{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanApname{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanApcnic{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanApFN{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanApadd{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanAcam{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanAdep{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanApro{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanAtime{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanAsem{
			width: 97%;
			margin: auto;
			border: 1px solid black;
		}
		#challanAAmt{
			width: 97%;
			margin: auto;
			margin-top: 10px;
			border: 1px solid black;
		}
		#challanStamp{
			width: 97%;
			height: 10%;
			margin: auto;
			border: 1px solid black;
		}
		#challanOSgn{
			width: 97%;
			margin: auto;
			border: 1px solid black;
			margin-top: 20px;
		}
		#challanCash{
			width: 97%;
			margin: auto;
			border: 1px solid black;
			margin-top: 20px;
			text-align: center;
		}
		#space{
			width: 97%;
			margin: auto;
			border: 1px solid black;
			
		}
		#challanCopy{
			width: 97%;
			margin: auto;
			text-align: center;
			margin-top: 20px;
			border: 1px solid black;
		}
		#row{
			
  			display: table;
  			clear: both;
  			padding: 4px%;
  			
		}
		#column1{
			float: left;
 			width: 51%;
  			padding: 2px;
  			height: 30%;
			border: 1px solid black;
		}
		#column2{
			float: left;
 			width: 44%;
  			padding: 2px;
  			height: 30%;
  			margin-left: 3px;
			border: 1px solid black;
			text-align: center;
		}
		#stamp{
			margin-top: 90px;
		}

		

        </style>
    </head>
    <body>
        <div id=\"wrapper\">
			<div id=\"challanOne\">
				<div id=\"challanLogo\"><img src=\"challanlogo.png\" height=\"100\" width=\"100\"></div>
				<div id=\"challanNum\"><b>Challan No:<br>000000000000<b></div>
				<div id=\"challanDep\">For Credit to Collection Account of The Islamia University of Bahawalpur</div>
				<div id=\"challanACNum\"><b>Account No:<br>000000000000<b></div>
				<div id=\"challanApId\"><b>ApplicationId:</b>&nbsp;&nbsp;&nbsp;000000</div>
				<div id=\"challanApname\"><b>Name:</b>&nbsp;&nbsp;&nbsp;<b>----------</b></div>
				<div id=\"challanApcnic\"><b>CNIC:</b>&nbsp;&nbsp;&nbsp;0000-0000000-0</div>
				<div id=\"challanApFN\"><b>Father Name:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanApadd\"><b>Address:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanAcam\"><b>Campus:</b>&nbsp;&nbsp;&nbsp;Baghdad Ul Jadeed</div>
				<div id=\"challanAdep\"><b>Department:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanApro\"><b>Program:</b>&nbsp;&nbsp;&nbsp;BA (Hons) ----------</div>
				<div id=\"challanAtime\"><b>Program Timing:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanAsem\"><b>Semester:</b>&nbsp;&nbsp;&nbsp;----------</div>
				
				<div id=\"row\" class=\"row\">	
  				<div id=\"column1\" class=\"column\" >
  				<div id=\"challanAAmt\"><b>Amount:</b>&nbsp;&nbsp;&nbsp;Rs.700/-</div>
  					<div id=\"challanOSgn\"><b>Sign. Officer:</b> </div>
  					<div id=\"space\">&nbsp;</div>
  					<div id=\"challanCash\"><b>Cash Only:</b> </div>
  					<div id=\"space\">&nbsp;</div>
  					<div id=\"challanCopy\"><b>IUB Copy</b></div>
  					</div>
  						<div id=\"column2\" class=\"column\" >
  							<div id=\"stamp\">STAMP</div>
  						</div>
  					</div>
  					
				</div>

			<div id=\"challanOne\">
				<div id=\"challanLogo\"><img src=\"challanlogo.png\" height=\"100\" width=\"100\"></div>
				<div id=\"challanNum\"><b>Challan No:<br>000000000000<b></div>
				<div id=\"challanDep\">For Credit to Collection Account of The Islamia University of Bahawalpur</div>
				<div id=\"challanACNum\"><b>Account No:<br>000000000000<b></div>
				<div id=\"challanApId\"><b>ApplicationId:</b>&nbsp;&nbsp;&nbsp;000000</div>
				<div id=\"challanApname\"><b>Name:</b>&nbsp;&nbsp;&nbsp;<b>----------</b></div>
				<div id=\"challanApcnic\"><b>CNIC:</b>&nbsp;&nbsp;&nbsp;0000-0000000-0</div>
				<div id=\"challanApFN\"><b>Father Name:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanApadd\"><b>Address:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanAcam\"><b>Campus:</b>&nbsp;&nbsp;&nbsp;Baghdad Ul Jadeed</div>
				<div id=\"challanAdep\"><b>Department:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanApro\"><b>Program:</b>&nbsp;&nbsp;&nbsp;BA (Hons) ----------</div>
				<div id=\"challanAtime\"><b>Program Timing:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanAsem\"><b>Semester:</b>&nbsp;&nbsp;&nbsp;----------</div>
				
				<div id=\"row\" class=\"row\">	
  				<div id=\"column1\" class=\"column\" >
  				<div id=\"challanAAmt\"><b>Amount:</b>&nbsp;&nbsp;&nbsp;Rs.700/-</div>
  					<div id=\"challanOSgn\"><b>Sign. Officer:</b> </div>
  					<div id=\"space\">&nbsp;</div>
  					<div id=\"challanCash\"><b>Cash Only:</b> </div>
  					<div id=\"space\">&nbsp;</div>
  					<div id=\"challanCopy\"><b>IUB Copy</b></div>
  					</div>
  						<div id=\"column2\" class=\"column\" >
  							<div id=\"stamp\">STAMP</div>
  						</div>
  					</div>
  					
				</div>

			<div id=\"challanOne\">
				<div id=\"challanLogo\"><img src=\"challanlogo.png\" height=\"100\" width=\"100\"></div>
				<div id=\"challanNum\"><b>Challan No:<br>000000000000<b></div>
				<div id=\"challanDep\">For Credit to Collection Account of The Islamia University of Bahawalpur</div>
				<div id=\"challanACNum\"><b>Account No:<br>000000000000<b></div>
				<div id=\"challanApId\"><b>ApplicationId:</b>&nbsp;&nbsp;&nbsp;000000</div>
				<div id=\"challanApname\"><b>Name:</b>&nbsp;&nbsp;&nbsp;<b>----------</b></div>
				<div id=\"challanApcnic\"><b>CNIC:</b>&nbsp;&nbsp;&nbsp;0000-0000000-0</div>
				<div id=\"challanApFN\"><b>Father Name:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanApadd\"><b>Address:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanAcam\"><b>Campus:</b>&nbsp;&nbsp;&nbsp;Baghdad Ul Jadeed</div>
				<div id=\"challanAdep\"><b>Department:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanApro\"><b>Program:</b>&nbsp;&nbsp;&nbsp;BA (Hons) ----------</div>
				<div id=\"challanAtime\"><b>Program Timing:</b>&nbsp;&nbsp;&nbsp;----------</div>
				<div id=\"challanAsem\"><b>Semester:</b>&nbsp;&nbsp;&nbsp;----------</div>
				
				<div id=\"row\" class=\"row\">	
  				<div id=\"column1\" class=\"column\" >
  				<div id=\"challanAAmt\"><b>Amount:</b>&nbsp;&nbsp;&nbsp;Rs.700/-</div>
  					<div id=\"challanOSgn\"><b>Sign. Officer:</b> </div>
  					<div id=\"space\">&nbsp;</div>
  					<div id=\"challanCash\"><b>Cash Only:</b> </div>
  					<div id=\"space\">&nbsp;</div>
  					<div id=\"challanCopy\"><b>IUB Copy</b></div>
  					</div>
  						<div id=\"column2\" class=\"column\" >
  							<div id=\"stamp\">STAMP</div>
  						</div>
  					</div>
  					
				</div>

				


			</div>
		</div>
    </body>
</html>	
	");	
}

?>
