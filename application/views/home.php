<?php 
$this->load->view('header') ?>
<div class="jumbotron">
	<center>
		<h1>Hi, It's me - Atina </h1>
			<h5>Quotes of the day</h5>
		<h4>"There is only one happiness in this life, to love and be loved"</h4>
		
	</center>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
    <h2>Biodata Saya dari Array</h2>
    <table class = "table table-hover">
      <tbody>
        <?php foreach ($biodata_array as $key) {?>
        <tr>
          <td><?php echo $key['nama'] ?></td>
        </tr>
        <tr>
          <td><?php echo $key['nim'] ?></td>
        </tr>
        <tr>
          <td><?php echo $key['alamat'] ?></td>
        </tr>
        <?php }?></tbody>
    </table>
  </div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
    <h2>Biodata Saya dari Query Object</h2>
    <table class = "table table-hover">
      <tbody>
        <?php foreach ($biodata_object as $key) {?>
        <tr>
          <td><?php echo $key->nama ?></td>
        </tr>
        <tr>
          <td><?php echo $key->nim ?></td>
        </tr>
        <tr>
          <td><?php echo $key->alamat ?></td>
        </tr>
        <?php }?></tbody>
    </table>
  </div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
    <h2>Biodata Saya Builder dari Array</h2>
    <table class = "table table-hover">
      <tbody>
        <?php foreach ($biodata_builder_array as $key) {?>
        <tr>
          <td><?php echo $key['nama'] ?></td>
        </tr>
        <tr>
          <td><?php echo $key['nim'] ?></td>
        </tr>
        <tr>
          <td><?php echo $key['alamat'] ?></td>
        </tr>
        <?php }?></tbody>
    </table>
  </div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="table-responsive">
    <h2>Biodata Saya dari Query Builder Object</h2>
    <table class = "table table-hover">
      <tbody>
        <?php foreach ($biodata_builder_object as $key) {?>
        <tr>
          <td><?php echo $key->nama ?></td>
        </tr>
        <tr>
          <td><?php echo $key->nim ?></td>
        </tr>
        <tr>
          <td><?php echo $key->alamat ?></td>
        </tr>
        <?php }?></tbody>
    </table>
  </div>
</div>
<?php $this->load->view('footer') ?>