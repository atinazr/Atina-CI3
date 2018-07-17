<?php $this->load->view('header') ?>
   <main role="main" class="container">
	<a href="<?php echo base_url("index.php/User/register") ?>" class="btn btn-primary mb-3">Tambah</a>
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>User ID</th>
			<th>Nama</th>
			<th>Kodepos</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Register Date</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php foreach ($user->result() as $key => $value): ?>
				<tr>
					<td><?php echo $key+1 ?></td>
					<td><?php echo $value->user_id ?></td>
					<td><?php echo $value->nama ?></td>
					<td><?php echo $value->kodepos ?></td>
					<td><?php echo $value->email ?></td>
					<td><?php echo $value->username ?></td>
					<td><?php echo $value->password ?></td>
					<td><?php echo $value->register_date ?></td>
					<td><a href="<?php echo base_url('index.php/user/edit/'.$value->user_id) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('index.php/user/delete/'.$value->user_id) ?>" class="btn btn-sm btn-danger">Hapus</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</main>											
</body>
    <?php $this->load->view('footer') ?>