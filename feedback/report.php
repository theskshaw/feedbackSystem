<?php

session_start();
?>
<?php

include_once("connection.php");
include_once('fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(35,10,'Feedbacks',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$subcode=$_SESSION['subcode'];
$teacode=$_SESSION['teacode'];

if(($subcode!="none" and $teacode!="none"))
{
    $sql="SELECT name,teacode,subcode,(type1+type2+type3+type4+type5)/5 as total FROM feed where subcode='$subcode' and teacode='$teacode'";
}
else if($subcode!="none")
{
    $sql="SELECT name,teacode,subcode,(type1+type2+type3+type4+type5)/5 as total FROM feed where subcode='$subcode'";
}
else if($teacode!="none")
{
    $sql="SELECT name,teacode,subcode,(type1+type2+type3+type4+type5)/5 as total FROM feed where teacode='$teacode'";
}
else
{
    $sql="SELECT name,teacode,subcode,(type1+type2+type3+type4+type5)/5 as total FROM feed";
}
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('uname'=>'Username', 'name'=> 'Name', 'teacode'=> 'Teacher Code','subcode'=> 'Subject Code','type1'=> 'Type 1','type2'=> 'Type 2','type3'=> 'Type 3','type4'=> 'Type 4','type5'=> 'Type 5','date'=> 'Date','time'=> 'Time');
 
$result = mysqli_query($connString, $sql) or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM feed");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
/*foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}*/
$pdf->Cell(45,12,'Name',1);
$pdf->Cell(45,12,'Prof Code',1);
$pdf->Cell(45,12,'Sub Code',1);
$pdf->Cell(45,12,'Rating',1);
//$pdf->Cell(38,12,'Username',1);
$pdf->SetFont('');
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(45,12,$column,1);
}
$pdf->Output();
?>





?>