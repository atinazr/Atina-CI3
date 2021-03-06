<?php $this->load->view('header') ?>
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>ATINA ZAIMA</h1>
        <p class="lead">1641720208</p>
      </div>
      <div class="row">
        <div class="col-6">
          <h4>Biodata menggunakan Query dengan Array</h4>
          <table class="table">
            <?php foreach ($biodata_query_array as $key => $value): ?>
              <tr>
                  <td><?php echo $value["id"]; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value["nama"]; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value["nim"]; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value["alamat"]; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          </div>
          <div class="col-6">
          <h4>Biodata menggunakan Query dengan Object</h4>
          <table class="table">
            <?php foreach ($biodata_query_object as $key => $value): ?>
              <tr>
                  <td><?php echo $value->id; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value->nama; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value->nim; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value->alamat; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          </div>
          <div class="col-6">
          <h4>Biodata menggunakan Builder dengan Array</h4>
          <table class="table">
            <?php foreach ($biodata_builder_array as $key => $value): ?>
              <tr>
                  <td><?php echo $value["id"]; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value["nama"]; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value["nim"]; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value["alamat"]; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          </div>
          <div class="col-6">
          <h4>Biodata menggunakan Builder dengan Object</h4>
          <table class="table">
            <?php foreach ($biodata_query_object as $key => $value): ?>
              <tr>
                  <td><?php echo $value->id; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value->nama; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value->nim; ?></td>
              </tr>
              <tr>
                  <td><?php echo $value->alamat; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </main>
    <?php $this->load->view('footer') ?>