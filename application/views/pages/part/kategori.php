<?php
  //foreach($datakategori as $data){
  for ($i=0; $i < count($datakategori); $i++) {
    echo "
    <div class='info-box bg-aqua'>
      <span class='info-box-icon'><i class='fa fa-bookmark-o'></i></span>
      <div class='info-box-content'>
        <span class='info-box-text'>Kategori Artikel ".$datakategori[$i]->KATEGORI."</span>
        <span class='info-box-number'>".$jmlkategori[$i]."</span>
        <div class='progress'>
          <div class='progress-bar' style='width: 70%'></div>
        </div>
        <span class='progress-description'>
          Jumlah Artikel Saat Ini
        </span>
      </div>
    </div>
    ";
  }
?>
