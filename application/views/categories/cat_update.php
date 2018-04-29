<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Atina Zaima R.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
   <nav class="navbar navbar-expand-md navbar-light bg-light mb-4">
      <a class="navbar-brand" href="#">ATINA ZA'</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Category")?>">Category</a>
          </li>
         
			 <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog")?>">Blog</a></li>
        </ul>
      </div>
    </nav>
   <main role="main" class="container">
    <?php echo validation_errors() ?>
     <?php echo form_open( 'category/update/'.$cat_update['cat_id'], array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<div class="form-group">
   	<label for="cat_name">Nama Kategori</label>
   	<input type="text" class="form-control" name="cat_name" value="<?php echo $cat_update['cat_name'] ?>" required>
   	<div class="invalid-feedback">Isi judul dulu gan</div>
	</div>

	<div class="form-group">
   	<label for="text">Deskripsi</label>
   	<input type="text" class="form-control" name="cat_description" value="<?php echo $cat_update['cat_description'] ?>" required>
   	<div class="invalid-feedback">Isi deskripsinya dulu gan</div>
	</div>
	<button id="submitBtn" type="submit" class="btn btn-success">Ubah</button>
    </main>											
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>