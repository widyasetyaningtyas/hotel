<!DOCTYPE html>
<html>
<head>
	<title>INVOICE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body onload="javascript:window.print()">
	<div class="container">
		<div class="invoice" style="margin-top: 25px; font-family: candara;">
			<div class="head">
				<div class="row">
					<div class="col-6 col-xl-6" style="font-family: courier,arial,helvetica;">
						<h1>INVOICE</h1>
					</div>
					<div class="col-6 col-xl-6" style="text-align: right;">
						<img src="assets/images/logo-azana1.png" style="width: 200px; height: auto;">
					</div>
				</div>
			</div>
			<hr>
			<div class="body" style="margin-top: 30px;">
				<div class="row">
					<div class="col-5 col-xl-5">
						<p>Jl. Kelet Ploso KM 36, Kelet, Keling, Karang Anyar, Kelet, Keling, Kabupaten Jepara, Jawa Tengah 59454</p>
					</div>
					<div class="col-1 col-xl-1"></div>
					<div class="col-3 col-xl-3">
						<h4 style="font-weight: bold;">Check-in</h4>
						<p><?php echo $data->tgl_cekin;?></p>
					</div>
					<div class="col-3 col-xl-3">
						<h4 style="font-weight: bold;">Check-out</h4>
						<p><?php echo $data->tgl_cekout;?></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="body1">
				<h2 style="font-weight: bold;">Detail Pesanan</h2>
			</div>
			<div class="body2">
				<div class="row">
					<div class="col-4 col-xl-4">
						<p>Nama Pemesan</p>
						<p>Nama Tamu</p>
						<p>Tipe Kamar</p>
						<p>Jumlah Kamar</p>
						<p>Total Harga</p>
					</div>
					<div class="col-8 col-xl-8">
						<p>: <?php echo $data->nama_pemesan;?></p>
						<p>: <?php echo $data->nama_tamu;?></p>
						<p>: <?php echo $data->type_kamar;?></p>
						<p>: <?php echo $data->jumlah_kamar;?></p>
						<p style="font-weight: bold; font-size: 30px;">: Rp. <?php echo number_format($data->total_harga);?></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="body3">
				<div class="row">
					<div class="col-4 col-xl-4">
						<b>Customer Service Telp</b>
						<p>(425) 555-1212</p>
					</div>
					<div class="col-4 col-xl-4">
						<b>Customer Service Chating</b>
						<p>0812-2813-5732</p>
					</div>
					<div class="col-4 col-xl-4">
						<b>Customer Service Email</b>
						<p>theazanahotel@gmail.com</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="body4">
				<h2>Catatan Penting!</h2>
				<p>* Biaya orang tambahan mungin berlaku dan berbeda-beda tergantung kebijakan hotel. Deposit tunai yang dikeluarkan oleh anda diperlukan pada saat check-in untuk biaya tal terduga. Permintaan khusus tersedia pada saat check-in ddan mungkin dikenakan biaya ttambahan. Permintaan khusus tidak dapat dijamin.</p>
			</div>
			{{date('l, d F Y')}}
		</div>
	</div>
</body>
</html>