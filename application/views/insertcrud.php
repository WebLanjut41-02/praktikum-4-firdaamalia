


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registrasi</title>
  </head>
  <body>
<center>
<h1>Form Registrasi E-Recruitment<br>(Perusahaan)</h1></center>

<form action="<?=base_url().'index.php/belajar_crud/insert';?>" method="POST">
<div class="container">
<div class="row mt-3">
	<div class="col-md-12">
	<div class="form-group">
	    <label for="nama">Id</label>
	    <input type="text" name="id" class="form-control" id="nama" placeholder="Masukan id">
	</div>

	<div class="form-group">
	    <label for="nama">Nama</label>
	    <input type="text" name="nama" class="form-control" id="nama" placeholder=" Masukan nama ">
	</div>

	<div class="form-group">
	    <label for="nama">No Hp</label>
	    <input type="text"  name="nohp" class="form-control" id="nama" placeholder="Masukan No Hp ">
	</div>

	<div class="form-group">
	    <label for="nama">Nama Perusahaan</label>
	    <input type="text"  name="namaperusahaan" class="form-control" id="nama" placeholder="Masukan Nama Perusahaan">
	</div>

	<div class="form-group">
	    <label for="nama">Email</label>
	    <input type="email"  name="email" class="form-control" id="nama" placeholder="Masukan Email">
	</div>

	<div class="form-group">
	    <label for="nama">Kota</label>
	    <input type="text"  name="kota" class="form-control" id="nama" placeholder="Masukan Kota">
	</div>
	  <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
</div>
</div>
</div>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>