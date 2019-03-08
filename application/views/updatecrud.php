<table>
<form action="<?=base_url().'index.php/belajar_crud/update'?>" method="POST">
	<tr>
		<td>id</td>
		<td>:</td>
		<td><input type="hidden" name="id" value="<?=$r['id']?>"><?=$r['id']?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?=$r['nama']?>"></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td>:</td>
		<td><input type="text" name="nohp" value="<?=$r['nohp']?>"></td>
	</tr>
	<tr>
		<td>Nama Perusahaan</td>
		<td>:</td>
		<td><input type="text" name="namaperusahaan" value="<?=$r['namaperusahaan']?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?=$r['email']?>"></td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>:</td>
		<td><input type="text" name="kota" value="<?=$r['kota']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>