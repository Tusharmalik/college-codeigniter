<div class="container" id="content">
    <h1>AICTE Approval </h1>
  <br>
  
  <?php foreach ($aicte as $aicte): ?>
  <a href="<?php echo base_url();echo $aicte['link'];?>" target="_blank"><h3><?php echo $aicte['text'];?></h3></a>
  <?php endforeach; ?>
    <br>
    <br><br>
</div>