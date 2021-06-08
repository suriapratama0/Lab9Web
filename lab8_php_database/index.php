<?php include("koneksi.php"); 

$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 

?> 
<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="UTF-8">     
	<link href="style.css" rel="stylesheet" type="text/css" />     
	<title>Data Barang</title> 
	<style>
		.link {
			display: inline-block;
			margin: 20px 0px;
		}
		a {
			margin: 0px 15px;
		}
		.container{
			margin:  100px 0px;
		}
		div a{
			color: black;
		}
	</style>
</head> 
<body>   
<?php require('header.php'); ?>  
	<div class="container">          
		<a class="link" href="tambah.php"> Tambah Barang</a>        
		<div class="main">             
			<table border="1" cellpadding="4" cellspacing="0">             
				<tr>                 
					<th>Gambar</th>                 
					<th>Nama Barang</th>                 
					<th>Katagori</th>                 
					<th>Harga Beli</th>                 
					<th>Harga Jual</th>                 
					<th>Stok</th>                 
					<th>Aksi</th>           
				</tr>             
				<?php if($result): ?>             
					<?php while($row = mysqli_fetch_array($result)): ?>             
						<tr>                 
							<td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td>       
							<td><?= $row['nama'];?></td>                 
							<td><?= $row['kategori'];?></td>                 
							<td><?= $row['harga_beli'];?></td>                 
							<td><?= $row['harga_jual'];?></td>                 
							<td><?= $row['stok'];?></td>                 
							<td><a href="ubah.php?halaman=ubahproduk&id=<?php echo $row['id_barang']
							; ?>"> Ubah</a>
							<a href="hapus.php?halaman=hapusproduk&id=<?php echo $row['id_barang']
							; ?>" >Hapus</a></td>
						</tr>         
					<?php endwhile; else: ?>             
					<tr>                 
						<td colspan="7">Belum ada data</td>             
					</tr>             
				<?php endif; ?>             
			</table>         
		</div>     
	</div>
<?php require('footer.php'); ?>
</body> 
</html> 
