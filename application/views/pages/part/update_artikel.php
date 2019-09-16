
<script src="<?php echo base_url('/asset/artikel/assets/jquery/jquery-2.2.3.min.js');?>"></script>
<script src="<?php echo base_url('/asset/artikel/assets/ckeditor/ckeditor.js');?>"></script>

<script type="text/javascript">
//   $(function () {
//     CKEDITOR.replace('ckeditor');
//   });
function removeCheck() { window.onbeforeunload = null; }
				$(document).ready(function() {
				    $(':input').one('change', function() {
						window.onbeforeunload = function() {
				            return 'Leaving this page will cause edits to be lost. Press the submit button on the page if you wish to save your data.';
				        }
				    });
				    $('input[type=submit]').click(function() { removeCheck() });
				});
window.onload = function()
	{
		CKEDITOR.replace( 'ckeditor' );
	};
</script>
<div class="box box-primary artikel_post">

  <h2>Buat Artikel</h2><hr/>
  <?php echo form_open_multipart("update_post/".$dataedit->PENULIS."/".$dataedit->ID_ARTIKEL."/".$dataedit->POSTING);?>
  <form action="" method="post" enctype="multipart/form-data">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" placeholder="Judul berita" value="<?php echo set_value('JUDUL_ARTIKEL', $dataedit->JUDUL_ARTIKEL); ?>" required/>
    <div style="margin-top:7px"class="form-group">
      <label>Kategori</label>
      <?php
        echo "<select  class='form-control' name='kategori'>
          <option value='Bisnis'".($dataedit->KATEGORI == 'Bisnis' ? ' selected' : '' )." >Bisnis</option>
          <option value='Gaya Hidup'".($dataedit->KATEGORI == 'Gaya Hidup' ? ' selected' : '' ).">Gaya Hidup</option>
          <option value='Olahraga'".($dataedit->KATEGORI == 'Olahraga' ? ' selected' : '' ).">Olahraga</option>
          <option value='Politik'".($dataedit->KATEGORI == 'Politik' ? ' selected' : '' ).">Politik</option>
          <option value='Teknologi'".($dataedit->KATEGORI == 'Teknologi' ? ' selected' : '' ).">Teknologi</option>
          <option value='Kesehatan'".($dataedit->KATEGORI == 'Kesehatan' ? ' selected' : '' ).">Kesehatan</option>
      </select>"; ?>
    </div>
    <textarea id="ckeditor" name="berita" class="ckeditor form-control" required><?php echo set_value('ISI_ARTIKEL', $dataedit->ISI_ARTIKEL); ?></textarea><br/>
    <label>Tag</label>
    <input type="text" name="tag" class="form-control" placeholder="Tag, Label, Keyword" value="<?php echo set_value('LABEL', $dataedit->LABEL); ?>" required/><br>
    <label>Foto Artikel</label>
    <input type="file" name="userfile" value="s" required><br>
    <button class="btn btn-primary" type="submit" name="sbm" value="post">Post Berita</button>
    <button class="btn btn-warning" type="submit" name="sbm" value="draf">Draf</button>
  </form>
  <?php echo form_close()?>
</div>
