<?php include 'header.php'; 

/* list of data */


function createHeader(){
	$articledata = [
	'imgheader'  => 'https://ckj-main-ai.azureedge.net/media/Default/Cekaja/bfi-finance/banner-bfi-uber-milyaran-2017.jpg',	
	'title'		 => 'BFI Dana Tunai Cepat Jaminan BPKB Mobil, BPKB Motor dan Sertifikat Rumah',
	'preambule'  => 'Ajukan pinjaman dana tunai segala kebutuhan BFI Finance secara online melalui CekAja.com untuk mendapatkan suku bunga spesial mulai 0.78% flat per bulan & cashback hingga Rp 1 Juta.',
	];

	?>
		
			<img class="responsive" src=<?php echo $articledata['imgheader']; ?> alt="TEST" />
			<h1><?php echo $articledata['title'];?></h1>
			<p><?php echo $articledata['preambule']; ?></p>			
		 
	<?php 
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-8">	
			<?php createHeader(); ?>
		</div>
		<div class="col-md-4">
			for here
		</div>
	</div>	
	<div class="row">
		<div class="col-md-8">
		
		
	</div>
</div>





<?php include 'footer.php'; ?>