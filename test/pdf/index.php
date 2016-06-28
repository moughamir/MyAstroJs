<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	include('../../include/Lib_handler.php');

	$products = array('Consultation de voyance - 56mn','une bougie ésothérique noire', 'une bougie ésothérique bleue');
	$prices   = array(650,300,260);

	Class Facture extends Fpdf\Fpdf{
		private $totalAmount;
		private $products;
		private $prices;
		private $totalTTC;
		private $totalHT;
		const TVA_CONSULTATION = 9.17;
		const TVA_OBJET		   = 20;

		public function SetProducts($products){
			$this->products = $products;
			return $this;
		}

		public function SetPrices($prices){
			$this->prices = $prices;
			return $this;
		}

		public function GetTotal(){
			foreach($this->prices as $price){
				$this->totalTTC += $price;
			}
			$this->totalHT = $this->totalTTC - $this->totalTTC * self::TVA_CONSULTATION / 100;
			$this->totalTTC = number_format($this->totalTTC,2,',',' ');
			$this->totalHT = number_format($this->totalHT,2,',', ' ');
		}


		public function create(){
			$this->AddPage();
			$this->SetFont('Arial','B',16);
			$this->Cell(105,10,'KG COM',0);
			$this->SetFont('Arial','B',18);
			$this->SetTextColor(183,199,247);
			$this->Cell(75,10,'FACTURE',0,1,'R');
			$this->SetFont('Arial','',12);
			$this->SetTextColor(0,0,0);
			$this->Cell(105,5,'RCS : Lyon B 538 563 917',0);
			$this->Cell(75,5,'Numero 00000045',0,1,'R');
			$this->Cell(105,5,'Siret : 53856391700011',0,1);
			$this->Cell(105,5,'4 quai Joseph Gilet',0);
			$this->SetFont('Arial','B',12);
			$this->Cell(75,5,'Date : '.date('d/m/Y'),0,1,'R');
			$this->SetFont('Arial','',12);
			$this->Cell(105,5,'69004 LYON',0,1);
			$this->Cell(105,5,'Tel : 04 82 53 71 59',0,1);
			$this->SetY(85);
			$this->SetFillColor(183,199,247);
			$this->Cell(150,7,'DESCRIPTION',1,0,'C',1);
			$this->Cell(45,7,'MONTANT',1,1,'C',1);
			// We keep the Y data, to know were we have to start both products and prices tables.
			$yBefore = $this->GetY();
			// Here we print products
			$startYProduct = $yBefore;
			foreach($this->products as $product){
				$startYProduct += 7;
				$this->Cell(150,7,utf8_decode($product),'LB',0);
				$this->SetXY(10,$startYProduct);
				
			}
			$this->SetXY(160,$yBefore);
			// Here we print prices
			$startPrices = $yBefore;
			foreach($this->prices as $price){
				$startPrices += 7;
				$this->Cell(45,7,number_format($price,2,',', ' '),'LBR',0,'C');
				$this->SetXY(160,$startPrices);
			}
			$this->SetX(115);
			$this->Cell(45,7,'TOTAL TTC',1,0,'C',1);
			$this->GetTotal();
			$this->Cell(45,7,$this->totalTTC,1,2,'C');
			$this->SetX(115);
			$this->Cell(45,7,'TOTAL HT',1,0,'C',1);
			$this->Cell(45,7,$this->totalHT,1,2,'C');
			$this->SetX(115);
			$this->SetY($this->getY() + 10 );
			$this->Cell(160,10,'Pour toute question concernant cette facture, veuillez contacter KGCOM au 04.82.53.71.59',0,1);
			$this->SetY($this->getY() + 15 );
			$this->SetFont('Arial','B',12);
			$this->Cell(190,10,'Merci de votre confiance !',0,0,'C');
			$this->Output();
		}
	}

	$pdf = new Facture();
	$pdf->SetProducts($products)
		->SetPrices($prices)
		->create();
	/*echo '<pre>';
	var_dump($fpdf);
	echo '</pre>';*/
?>
