<!DOCTYPE html>
<html>
<head>
	<title>Aldi - View</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 14px;
		}
		#canvas{
			width: 960px;
			margin: 0 auto; /*membuat ke tengah*/
			border: 1px solid silver;
			box-shadow: 0px 4px 8px 0px rgba(000,000,000,0.2), 0px 6px 20px 0px rgba(0,0,0,0.19);
		}
		#isi{
			min-height: 400px;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div id="canvas">
		<div id="isi">
			<table width="100%" border="1px" style="border-collapse:collapse;">
				<tr style="background-color: yellow">
					<th>Nama Event</th>
					<th>Lokasi</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Selesai</th>
					<th>Jam</th>
					<th>Jumlah Stand</th>
					<th>Termurah</th>
					<th>Termahal</th>
				</tr>
				<?php
				$inputan_pencarian = @$_POST['inputan_pencarian'];
				$cari_barang = @$_POST['cari_barang'];
				if($cari_barang){
					if($inputan_pencarian!=""){
						$sql = mysqli_query($db, "select * from tb_alat_musik where nama_barang like '%$inputan_pencarian%' or merk like '%$inputan_pencarian%'") or die ($db->error);
					}
					else{
						$sql = mysqli_query($db, "select * from tb_alat_musik") or die ($db->error);	
					}
				}
				else{
					$sql = mysqli_query($db, "select * from tb_alat_musik") or die ($db->error);	
				}

				// $cek = mysqli_fetch_array($sql, MYSQLI_ASSOC);
				// if($cek<1){
				
				// }
				//else{
					while($data = mysqli_fetch_array($sql, MYSQLI_ASSOC)){//pengulangan untuk menampilkan semua data
				?>
						<tr>
							<td align="center"><?php echo $data['kode_barang']; ?></td>
							<td align="center"><?php echo $data['nama_barang']; ?></td>
							<td align="center"><?php echo $data['merk']; ?></td>
							<td align="center"><?php echo $data['warna']; ?></td>
							<td align="center"><?php echo $data['harga']; ?></td>
							<td align="center"><img src="img_alat_musik/<?php echo $data['gambar']; ?>" width="120px" /></td>
							<td align="center">
								<a href="?page=alat_musik&action=edit&kdbarang=<?php echo $data['kode_barang']; ?>"><button>Edit</button></a> 
								<a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="?page=alat_musik&action=hapus&kdbarang=<?php echo $data['kode_barang']; ?>"><button>Hapus</button></a>
								<br><br>
								<!-- <?php //echo '<a href="download.php?file='.urlencode('img_alat_musik/'.$data['gambar']).'">'?><button>Download Gambar</button></a> -->
								<a href="download.php?id=<?php echo $data['kode_barang']?>">
									<button>Download Gambar</button></a>
							</td>
						</tr>
				<?php
					}
				//}
				?>	
			</table>
		</div>
	</div>

</body>
</html>