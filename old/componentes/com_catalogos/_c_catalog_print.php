<?php require_once('../../init.php');
    // GET HTML
	ob_start();
    include('_c_catalog.php');
    $content = ob_get_clean();
	ob_end_flush();
    // convert in PDF
    /*
	try{
        $html2pdf = new HTML2PDF('P', 'A4', 'es','array(10,10,10,10)');
		$html2pdf->writeHTML($content);
        $html2pdf->Output('Catalogo.pdf');
    }catch(HTML2PDF_exception $e) { echo $e; exit; }
	*/
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('duotics');
$pdf->SetTitle('Catalogo');
$pdf->SetSubject('Catalogo Productos');
$pdf->SetKeywords('comercial, catalogo, productos, bebidas, cervezas, licores');

// set default header data
$pdf->SetHeaderData('logo.jpg', PDF_HEADER_LOGO_WIDTH, "Comercial".' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 15);//PDF_MARGIN_BOTTOM

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
$pdf->writeHTML($content, true, false, true, false, '');
$pdf->Output('catalog.pdf', 'I');
	
?>