<?PHP
	include "../config.php";
	require('../PDF/fpdf.php');

		$sql = "SELECT * FROM EMPLOYE";
		$db = config::getConnexion();
		$liste=$db->query($sql);


		$pdf = new FPDF('L','mm','A3');

		$pdf->AddPage();

		$pdf->AliasNbPages();
		$pdf->SetFont('Arial','B',12);

		$pdf->Cell(20,12,'ID',1);
		$pdf->Cell(40,12,"Nom",1);
		$pdf->Cell(40,12,'Prenom',1);
		$pdf->Cell(20,12,'Sexe',1);
		$pdf->Cell(80,12,'Email',1);
		$pdf->Cell(40,12,'Type',1);
		$pdf->Cell(40,12,'Telephone',1);
		$pdf->Cell(40,12,'Date_n',1);
		$pdf->Cell(40,12,'Date_h',1);

		$__ = false;

		foreach($liste as $row) 
		{
			$_ = 0;
			$pdf->Ln();
			foreach($row as $column)
			{
				if($_ == 0 or $_ == 3)
				{
					$___ = 20;
				}
				else if($_ == 4)
				{
					$___ = 80;
				}
				else
				{
					$___ = 40;
				}
				if($__)
				{
					$pdf->Cell($___,12,$column,1);
					$__ = false;
					$_++;
				}
				else
				{
					$__ = true;
				}
			}
		}
		$pdf->Output();

?>