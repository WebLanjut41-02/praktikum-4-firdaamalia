
<div class="row mt-3">
<div class="col-md-5">
   <form action="<?php echo base_url()?>index.php/Belajar_crud/search" method="post">
   	<center>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari id Perusahaan" name="keyword">
      <div class="input-group-append">
       <button class="btn btn-primary" type="submit">Cari</button>
       </center>
 </div>
 </div>
   </form>
  </div>
 </div>


<center><h1>Data Perusahaan</h1></center>

<div class="container">
<table class="table table-dark">
	<thead>
	<tr>
		<th>no</th>
		<th>Id</th>
		<th>Nama</th>
		<th>No Hp</th>
		<th>Nama Perusahaan</th>
		<th>Email</th>
		<th>Kota</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<?php
	$no=1;


	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r['id'] ?></td>
		<td><?php echo $r['nama'] ?></td>
		<td><?php echo $r['nohp'] ?></td>
		<td><?php echo $r['namaperusahaan'] ?></td>
		<td><?php echo $r['email'] ?></td>
		<td><?php echo $r['kota'] ?></td>
		<td><a href="<?=base_url().'index.php/belajar_crud/delete/'.$r['id']?>">Hapus</a> ||
		<a href="<?=base_url().'index.php/belajar_crud/update/'.$r['id']?>">Edit</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>