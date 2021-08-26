<?php
require 'dbcon.php';
// include library
include('TCPDF/tcpdf.php'); 

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'gililogo.jpg';
        $this->Image($image_file, 20, 10, 52, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->Ln(5);
        $this->SetFont('helvetica', 'B', 10);
        // Title
        $this->Cell(180, 10, 'FORM 2023', 0, 1, 'R');
        $this->Cell(196, 10, 'GLACIER INTEGRATED LOGISTICS INC.', 0, 1, 'C');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(185, 2, 'Suite 705 Royal Plaza Twin Towers.', 0, 1, 'C');
        $this->Cell(182, 2, '648 Remedios St., Malate, Manila', 0, 1, 'C');
        $this->SetFont('helvetica', 'B', 14);
        $this->Ln(10);
        $this->Cell(170, 5, 'ACCOUNTABILITY FORM', 0, 1, 'C');
    }
//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-75);
        // Set font
        $this->SetFont('helvetica', 'B', 10);
        $this->setCellPaddings(1, 1, 1, 1);
        $this->Cell(18, 5, 'ISSUER:', 1, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->SetFont('helvetica', '', 10);
        $this->Cell(72, 5, '(NameoftheIssuer)', 1, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->SetFont('helvetica', 'B', 10);
        // Page number
        $this->Cell(0, 5, 'ACCEPTANCE AND AGREEMENT', 1, 1, 'C', 0, '', 0, false, 'T', 'M');
        
        $this->SetFont('helvetica', '', 10);
        $this->setCellPaddings(1, 1, 1, 1);
        $this->MultiCell(90, 30, 'That the above Asset/s or Properties is issued in good condition and accepted by employee', 1, 'L', 0, 0, '','', true);
        $this->MultiCell(90, 30, 'This constitute responsibility and I understand that the above asset(s) &/or property(ies) is under my care. In case of repair, damage, and/or loss while in possession, I shall be liable for the immediate restoration &/or replacement cost.', 1, 'L', 0, 1, '','', true);
        
        $this->setCellPaddings(1, 1, 1, 1);
        $this->SetFont('helvetica', 'B', 10);
        $this->Cell(90, 0, 'PREPARE AND PROVIDED BY:', 1, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->Cell(90, 0, 'RECEIVED BY:', 1, 1, 'C', 0, '', 0, false, 'T', 'M');
        
        $this->SetFont('helvetica', '', 5);
        $this->Cell(90, 15, 'FULLNAMEOFISSUER', 1, false, 'C', 0, '', 0, false, 'T', 'M', 'B');
        $this->Cell(90, 15, '', 1, 1, 'C', 0, '', 0, false, 'T', 'M');
        
        $this->SetFont('helvetica', 'B', 10);
        $this->setCellPaddings(1, 1, 1, 1);
        $this->Cell(90, 0, 'SIGNATURE OVER PRINTED NAME', 1, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->Cell(90, 0, 'SIGNATURE OVER PRINTED NAME', 1, false, 'C', 0, '', 0, false, 'T', 'M');

        $this->SetY(-10);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(90, 2, 'Accountability Form', 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(0, 2, 'SWC Form D.N:', 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);



// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

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
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

//add content
$pdf->Ln(35);
$pdf->setCellPaddings(1, 1, 1, 1);
$pdf->SetFont('helvetica', 'B', 8);
$pdf->Cell(20, 0, 'ISSUED TO:', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->SetFont('helvetica', '', 8);
$pdf->Cell(50, 0, '', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->SetFont('helvetica', 'B', 8);
$pdf->Cell(20, 0, 'SHEET NO.', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->SetFont('helvetica', '', 8);
$pdf->Cell(40, 0, '', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->SetFont('helvetica', 'B', 8);
$pdf->Cell(20, 0, 'POSITION', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->SetFont('helvetica', '', 8);
$pdf->Cell(30, 0, '', 1, 1, 'C', 0, '', 0, false, 'T', 'M');

$pdf->SetFont('helvetica', 'B', 8);
$pdf->Cell(30, 0, 'ASSET TAG', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->Cell(35, 0, 'IMAGE', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->Cell(65, 0, 'DESCRIPTION.', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->Cell(15, 0, 'QTY', 1, 0, 'C', 0, '', 0, false, 'T', 'M');
$pdf->Cell(35, 0, 'CONDITION', 1, 1, 'C', 0, '', 0, false, 'T', 'M');

$pdf->Ln(1);
$pdf->Cell(30, 0, $_GET['data'], 0, 0, 'C');
$pdf->Cell(30, 0, '$', 0, 0, 'C');
$pdf->Cell(30, 0, '$', 0, 0, 'C');
$pdf->Cell(30, 0, '$', 0, 0, 'C');
$pdf->Cell(30, 0, '$', 0, 0, 'C');

   
//$html = '<table border="1" style="text-align:center; ">
//            <tr>
//                <td style="width: 80px;"><b>ISSUED TO:</b></td>
//                <td style="width: 150px;"></td>
//                <td style="width: 80px;"><b>SHEET NO.</b></td>
//                <td style="width: 135px;"></td>
//                <td style="width: 80px;"><b>POSITION</b></td>
//                <td></td>
//            </tr>
//            <tr>
//                <td style="width: 130px;"><b>ASSET TAG</b></td>
//                <td style="width: 100px;"><b>IMAGE</b></td>
//                <td style="width: 250px;" colspan="2"><b>DESCRIPTION</b></td>
//                <td style="width: 50px;"><b>QTY</b></td>
//                <td style="width: 100px;"><b>CONDITION</b></td>
//            </tr>
//            <tr>
//                <td style="width: 130px;"></td>
//                <td style="width: 100px;"></td>
//                <td style="width: 250px;" colspan="2"></td>
//                <td style="width: 50px;"></td>
//                <td style="width: 100px;"></td>
//            </tr>
//        </table>';



//Close and output PDF document
$pdf->Output('sample.pdf');

?>
