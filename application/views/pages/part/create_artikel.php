
<script src="<?php echo base_url('/asset/artikel/assets/jquery/jquery-2.2.3.min.js');?>"></script>
<script src="<?php echo base_url('/asset/artikel/assets/ckeditor/ckeditor.js');?>"></script>
<script>

// CKEDITOR.plugins.registered['save'] =
// {
//     init : function( editor )
//     {
//         var command = editor.addCommand( 'save', {
//             modes : { wysiwyg:1, source:1 },
//             exec : function( editor ) {
//                 if(My.Own.CheckDirty())
//                     My.Own.Save();
//                 else
//                     alert("No changes.");
//             }
//         });
//         editor.ui.addButton( 'Save',{label : '',command : 'save'});
//     }
// }

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
  <?php echo form_open_multipart('save_post/'.$user);?>
  <!--<form action="" method="post" enctype="multipart/form-data">-->
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/>
    <div style="margin-top:7px"class="form-group">
      <label>Kategori</label>
      <select class="form-control" name="kategori">
        <option value="Bisnis">Bisnis</option>
        <option value="Gaya Hidup">Gaya Hidup</option>
        <option value="Olahraga">Olahraga</option>
        <option value="Politik">Politik</option>
        <option value="Teknologi">Teknologi</option>
        <option value="Kesehatan">Kesehatan</option>
      </select>
    </div>
    <textarea id="ckeditor" name="berita" class="ckeditor form-control" required></textarea><br>
    <label>Tag</label>
    <input type="text" name="tag" class="form-control" placeholder="Tag, Label, Keyword" required/><br>
    <label>Foto Artikel</label>
    <input type="file" name="userfile" required ><br>
    <button class="btn btn-primary" type="submit" name="sbm" value="post">Post Berita</button>
    <button class="btn btn-warning" type="submit" name="sbm" value="draf">Draf</button>
  <!--</form>-->
  <?php echo form_close()?>
</div>
