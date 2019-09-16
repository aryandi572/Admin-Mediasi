<?php
	if($msg == "success"){ ?>
    <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong>Update Sukses!</strong> Password berhasil diperbarui.
    </div>
	<?php }else if($msg == "dismatch"){ ?>
    <div class="alert alert-danger alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong>Update Gagal!</strong> Periksa password baru dan konfirmasi password baru anda.
    </div>
	<?php }else if($msg == "failure"){ ?>
    <div class="alert alert-danger alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong>Update Gagal!</strong> Password lama tidak ada dalam database.
    </div>
	<?php }else{ ?>

  <?php }
?>
