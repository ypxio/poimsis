<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="reset.css"/>
	<link rel="stylesheet" type="text/css" href="fort/font-awesome.css"/>
	<link rel="stylesheet/less" type="text/css" href="style.less"/>
	<script src="less.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

<div id="container">

<div id="header">
	<div id="global">
		<img src="logo.png"/>
		<div class="name">
			Dinas Pendapatan Daerah
			<br>
			Riau - Rokan Hilir
		</div>
			<!-- <ul id="topuser" class="right">
				<li><a href=""><i class="icon-user"></i>Admin (192.168.1.1)</a></li>
				<li><a href=""><i class="icon-off"></i>Logout</a></li>
			</ul> -->
			<ul id="topmenu" class="right">
				<li><a href=""><i class="icon-file"></i>File</a></li>
				<li><a href=""><i class="icon-eye-open"></i>Lihat</a></li>
				<li><a href=""><i class="icon-hdd"></i>Referensi</a></li>
				<li><a href=""><i class="icon-cogs"></i>Kelola Informasi</a></li>
				<li><a id="user" class=""><i class="icon-user"></i>Admin <i class="icon-caret-down"></i></a></li>
				<!-- <li><a href="">File</a></li> -->


			</ul>

			<div id="popup" style="display:none">
				<img src=""/>
				<ul>
					<li><a href="" class="head">Admin</a></li>
					<li><a href=""><i class="icon-user"></i>Edit Profil</a></li>
					<li><a href=""><i class="icon-wrench"></i>Pengaturan</a></li>
					<li><a href=""><i class="icon-off"></i>Logout</a></li>
				</ul>
			</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			$("li a#user").click(function(){
				$('#popup').toggle();
				$(this).toggleClass("active_popup");

			});
			
		});
	</script>

	<div id="logo">
		<!-- <h3 class="name"> -->
		<h3>Sistem Informasi Manajemen Objek Pajak</h3>
		
	</div>

	<ul id="bottom">
		<li><a href="" class="active"><i class="icon-home"></i> Dashboard</a></li>
		<li><a href=""><i class="icon-book"></i> Pendataan</a></li>
		<li><a href=""><i class="icon-pencil"></i> Penilaian</a></li>
		<li><a href=""><i class="icon-legal"></i> Penetapan</a></li>
		<li><a href=""><i class="icon-wrench"></i> Penagihan</a></li>
		<li><a href=""><i class="icon-shopping-cart"></i> Pembayaran</a></li>
		<li><a href=""><i class="icon-heart"></i> Pelayanan</a></li>
	</ul>
	<div class="clear"></div>
	<!-- </h3> -->
</div> <!-- div#header -->

<div id="content">
	<div id="sidebar">
		<ul>
			<li><a href="" class="active first"><i class="icon-folder-close"></i> Parameter Keluaran<span class="triangle"></span></a></li>
			<li><a href=""><i class="icon-folder-close"></i> Input Permohonan</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Cetak Tanda Terima</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Administrasi OP Baru dan Mutasi</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Cetak File Keluaran</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Penyerahan Berkas Pelayanan Selesai Ke WP</a></li>

			<li><a href="" class="head">Pengurangan</a></li>
			<li><a href="" class="first"><i class="icon-folder-close"></i> Input Data Pengurangan PBB</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Cetak SK Pengurangan PBB</a></li>

			<li><a href="" class="head">Keberatan</a></li>
			<li><a href="" class="first"><i class="icon-folder-close"></i> Input Surat Keputusan Atas Keberatan PBB</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Mencetak SK Keberatan PBB</a></li>

			<li><a href="" class="head">Pembetulan SPPT/SKP</a></li>
			<li><a href="" class="first"><i class="icon-folder-close"></i> Input SK Tunggal</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Proses SK Tunggal</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Input SK Kolektif</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Proses SK Kolektif</a></li>

			<li><a href="" class="head">Pembatalan SPPT/SKP</a></li>
			<li><a href="" class="first"><i class="icon-folder-close"></i> Input SK Tunggal</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Proses SK Tunggal</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Input SK Kolektif</a></li>
			<li><a href=""><i class="icon-folder-close"></i> Proses SK Kolektif</a></li>
			<!-- <li><a href=""><i class="icon-folder-close"></i> Sub Menu 4</a></li> -->

		</ul>
	</div> <!-- div#sidebar -->

	<div id="mainbar">
		<div id="inner">
			<h3>Parameter Keluaran</h3>

			<span class="notif success"><i class="icon-ok"></i> Data Telah ditambahkan</span>
			<span class="notif failure"><i class="icon-remove"></i> Data Gagal ditambahkan</span>
			<span class="notif info"><i class="icon-info-sign"></i> Informasi Lorem Ipsum Dolor Sit Amet</span>

			<h4>Sub Title</h4>
			
			<div class="well">

				<button class="neutral"><i class="icon-plus"></i> Neutral Button</button>
				<button class="negative"><i class="icon-plus"></i> Negative Button</button>

				<span class="right">
				<button class="positive"><i class="icon-plus"></i> Positive Button</button>
				<button class="default"><i class="icon-plus"></i> Default Button</button>
				</span>
			
			</div>
			
			<div class="well">
				<h3>Form Penambahan Barang</h3>
				<form>
					<table>
						<tr>
							<td class="field_name">
							<label>Field Name</label>
							</td>
							<td class="input">
							<input class="medium"/>
							<span class="help">Bantuan untuk form</span>
							</td>
						</tr>
						<tr>
							<td class="field_name">
							<label>Dropdown Name</label>
							</td>
							<td class="input">
							<select>
								<option>Select</option>
								<option></option>
								<option></option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="field_name">
							<label>Field Name</label>
							</td>
							<td class="input">
							<input class="medium"/>
							</td>
						</tr>

					</table>

				<button class="positive"><i class="icon-plus"></i> Positive Button</button>
				<button class="default"><i class="icon-plus"></i> Default Button</button>

				</form>
			</div>

			<div class="well well-tab">
				<div class="tab">
					<a class="first" href="">Tab Title</a>
					<a class="active" href="">Tab Title</a>
					<a href="">Tab Title</a>
					<a href="">Tab Title</a>
				</div>
				<h3>Judul</h3>
				<table class="data">

				<thead>
				<tr>
					<th>Tahun</th>
					<th>No. Surat Keputusan</th>
					<th>Tanggal SK</th>
					<th>Minimal (Ribuan)</th>
					<th>Aksi</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td class="acenter">2012</td>
						<td class="acenter">111222/WPJ.01/KP.0103/2013</td>
						<td class="acenter">05-JAN-13</td>
						<td class="acenter">10.000</td>
						<td class="acenter">
							<a href="">
							<img src="Pencil.png" width=15/>
							</a>
							<a href="">
							<img src="Delete.png" width=15/>
							</a>
						</td>
					</tr>
					<tr>
						<td class="acenter">2012</td>
						<td class="acenter">111222/WPJ.01/KP.0103/2013</td>
						<td class="acenter">05-JAN-13</td>
						<td class="acenter">10.000</td>
						<td class="acenter">
							<a href="">
							<img src="Pencil.png" width=15/>
							</a>
							<a href="">
							<img src="Delete.png" width=15/>
							</a>
						</td>
					</tr>
					<tr>
						<td class="acenter">2012</td>
						<td class="acenter">111222/WPJ.01/KP.0103/2013</td>
						<td class="acenter">05-JAN-13</td>
						<td class="acenter">10.000</td>
						<td class="acenter">
							<a href="">
							<img src="Pencil.png" width=15/>
							</a>
							<a href="">
							<img src="Delete.png" width=15/>
							</a>
						</td>
					</tr>

				</tbody>

			</table>
				<!-- <div class="head">Form Penambahan Barang</div> -->
			</div>

			<table class="data">

				<thead>
				<tr>
					<th>Tahun</th>
					<th>No. Surat Keputusan</th>
					<th>Tanggal SK</th>
					<th>Minimal (Ribuan)</th>
					<th>Aksi</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td class="acenter">2012</td>
						<td class="acenter">111222/WPJ.01/KP.0103/2013</td>
						<td class="acenter">05-JAN-13</td>
						<td class="acenter">10.000</td>
						<td class="acenter">
							<a href="">
							<img src="Pencil.png" width=15/>
							</a>
							<a href="">
							<img src="Delete.png" width=15/>
							</a>
						</td>
					</tr>
					<tr>
						<td class="acenter">2012</td>
						<td class="acenter">111222/WPJ.01/KP.0103/2013</td>
						<td class="acenter">05-JAN-13</td>
						<td class="acenter">10.000</td>
						<td class="acenter">
							<a href="">
							<img src="Pencil.png" width=15/>
							</a>
							<a href="">
							<img src="Delete.png" width=15/>
							</a>
						</td>
					</tr>
					<tr>
						<td class="acenter">2012</td>
						<td class="acenter">111222/WPJ.01/KP.0103/2013</td>
						<td class="acenter">05-JAN-13</td>
						<td class="acenter">10.000</td>
						<td class="acenter">
							<a href="">
							<img src="Pencil.png" width=15/>
							</a>
							<a href="">
							<img src="Delete.png" width=15/>
							</a>
						</td>
					</tr>

				</tbody>

			</table>

			<div class="well">
			<div class="total_data left">
				Total 1000 data
			</div>
			<div class="pagination right">
				<button class="small neutral">< prev</button>
				<button class="small neutral">2</button>
				<button class="small default">3</button>
				<button class="small neutral">4</button>
				<button class="small neutral">...</button>
				<button class="small neutral">next ></button>
			</div>
			<div class="clear"></div>
			</div>
			
		</div>
	</div> <!-- div#content -->
	<div class="clear"></div>
</div><!-- div#main -->


<div id="footer">
<!-- asdas -->
<span>Copyright &copy; 2013. <b>Cendana Teknika Utama</b></span>
</div> <!-- div#footer -->

</div> <!-- div#container -->

</body>
</html>