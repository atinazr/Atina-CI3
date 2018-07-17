<?php echo form_open('user/update/'.$this->uri->segment(3)); ?>
<main role="main" class="container">
   <div class="form-group">
       <label>Nama Lengkap</label>
       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $user[0]->nama ?>">
   </div>

   <div class="form-group">
       <label>Kodepos</label>
       <input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?php echo $user[0]->kodepos ?>">
   </div>

   <div class="form-group">
       <label>Email</label>
       <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user[0]->email ?>">
   </div>

   <div class="form-group">
       <label>Username</label>
       <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user[0]->username ?>">
   </div>

   <div class="form-group">
       <label>Password</label>
       <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $user[0]->password ?>">
   </div>
   <div class="form-group">
       <label>Konfirmasi Password</label>
       <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" value="<?php echo $user[0]->password ?>">
   </div>
   <button type="submit" class="btn btn-primary btn-block">Ubah</button>
   </main>
<?php echo form_close(); ?>