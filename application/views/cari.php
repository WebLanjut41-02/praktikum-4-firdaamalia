
<h1>Data Perusahaan</h1>

<div class="container">
<table class="table table-dark">
	<thead>
	<tr>
		<th>no|</th>
		<th>Id|</th>
		<th>Nama|</th>
		<th>No Hp|</th>
		<th>Nama Perusahaan|</th>
		<th>Email|</th>
		<th>Kota|</th>
	</tr>
	</thead>

	<?php
	$no=1;
	foreach($result as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r->id ?></td>
		<td><?php echo $r->nama ?></td>
		<td><?php echo $r->nohp ?></td>
		<td><?php echo $r->namaperusahaan ?></td>
		<td><?php echo $r->email ?></td>
		<td><?php echo $r->kota ?></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>