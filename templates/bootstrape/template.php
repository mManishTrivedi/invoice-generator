<?php



 //file_exists('css/bootstrap.min.css') OR Die('efsfffefewf');
 
	$current_dir = dirname(__FILE__).'/';
	
 	// get stylesheet content
 	$stylesheet = file_get_contents($current_dir. 'css/bootstrap.min.css');
 	
 	//todo:: Define php variable if you have
 	
	############# Get html Start
 	
 	ob_start();
 	
 	require $current_dir.'index.php';
 	
 	$html = ob_get_contents();
 	
 	ob_get_clean();
 	
 	############# Get html End
 	
//  echo $html;
 	
 	$mpdf=new mPDF();
 	
 	$mpdf->WriteHTML($stylesheet, 1);
 	$mpdf->WriteHTML($html, 2);

 	$mpdf->Output();
