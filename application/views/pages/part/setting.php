<?php echo form_open('set_password/'.$user);?>
<div class="form-horizontal">
  <?php include_once("alert.php"); ?>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Ubah Password :</label>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Password Sekarang</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="currentPass" placeholder="Password saat ini" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Password Baru</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="newPass" placeholder="Password Baru" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Konfirmasi Password Baru</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="conPass" placeholder="Konfirmasi Password Baru" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
<?php echo form_close()?>
