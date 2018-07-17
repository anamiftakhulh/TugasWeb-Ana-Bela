<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
	table{
		border-collapse: collapse;
		width: 78%;
		margin: 0 auto;
	}
	table th{
		border:1px solid #000;
		padding:3px;
		font-weight: bold;
		text-align: top;
	}
	table td{
		border:1px solid #000;
		padding: 3px;
		vertical-align: top;
	}

	</style>
</head>
<body>
<table style="border:0px solid #000 padding:3px;
		font-weight: bold;
		text-align: top;">
<tr style="border:0px">
<td width="10%" style="border:0px"></td>
    <td align="right" style="border:0px" width="10%"><img src="<?php echo base_url();?>images/polinema.jpg" alt="..." width="100%" height="120"></td>
    <td align="center" style="border:0px" width="50%"><font size="5">DEPARTEMEN PENDIDIKAN NASIONAL<br>
                 POLITEKNIK NEGERI MALANG<br>
    <font size="4"><i>Jalan Soekarno-Hatta no.9 PO.Box 04 Malang - 65141<br>
    <font size="4"><i>Telepon (0341) 404424 - 404425 Fax. (0341) 404420</font>
    </td>
    <td width="25%" style="border:0px"></td>
    </tr>
    </table>
    <hr size="5" color="black">
</center>
<br>
<br>
<br>	
<center><a><font size="5"> Tabel Team</font></a>
<br>
<br>
</center>
<table>
	<tr>
		<th>Nama</th>
		<th>Pekerjaan</th>
		<th>Nip</th>
		<th>Tanggal</th>
		<th>Alamat</th>
		<th>Foto</th>
	</tr>
	<?php $no=0; foreach($pekerja as $key)
	{
		$no++;
		?>
	<tr>
		<td><?php echo $key->Nama ?></td>
		<td><?php echo $key->Jpekerjaan ?></td>
		<td><?php echo $key->Nip ?></td>
		<td><?php echo $key->Tanggal ?></td>
		<td><?php echo $key->Alamat ?></td>
		<td><img src=<?=base_url("assets/uploads")."/".$key->foto?>></td>		
	</tr>
	<?php }?>
</table>
<br>
<br>
<br>
<p style="text-align: center"><a> <a href="<?php echo base_url()?>index.php/cetak/cetakpdf"><font size="5">Cetak PDF</font></a></p>
</body>
</html>