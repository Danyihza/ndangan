<?php 

include('konek.php');
require ('fpdf/fpdf.php');
// require ('prosesregis.php');


    // if ($koneksi) {
    //     # code...
    //     //print 'Berhasil';
    // } else{
    //     //print 'gagal';
    // }
    
    
    
    
    class PDF extends FPDF
        {

// Page header
function Header()
{
    // Logo
    // $this->Image('img/s.jpg',0,0,29.7);
    // Arial bold 15
    $this->SetFont('Arial','B',34);
    // Move to the right
    // $this->Cell();
    // Title

    

    // $this->Cell(0,16,' ' . $field_value,0,0,'C');
    // Line break
    //$this->Ln(20);
}

// Page footer
// function Footer()
// {
//     // Position at 1.5 cm from bottom
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Page number
//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
// }
}

if (isset ($_POST["download"])) {
    # code...
    $no_hp=$_POST['no_hp'];
    //print $no_hp;
    $sql="SELECT nama FROM core WHERE no_hp = '$no_hp'";
    $result=mysqli_query($koneksi, $sql);
    $resultarr = mysqli_fetch_assoc($result);
    $field_value=$resultarr['nama']; 
    //echo $field_value;
       if (!$field_value) {
           # code...      
           header('Location: index.php?data_kosong');
       }
}

$pdf = new PDF('L','cm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('img/s.jpeg',0,0,29.7,21.0,'JPEG');
$pdf->SetFont('Times','B',30);
$pdf->Cell(8,16.5,'  ' . $field_value,0,0,'L');
$pdf->Output('I','E-Certificate TRY OUT SBMPTN 2020 by HIMASAKRA.pdf');


?>