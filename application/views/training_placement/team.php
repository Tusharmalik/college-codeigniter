<div class="container" id="content">
  <br>
<table class="table table-striped" align="center" bgcolor="#FFFFCC">
  <tr>
    <td colspan="3" align="center" bgcolor="#99CC00" style="font-family:'Lucida Calligraphy'; font-size:14px; font-weight:bold">Placement Team</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <?php foreach ($team as $team_val):?>
  <?if ($team_val['finishing_school_team'] == 1):?>
  <tr>
    <td width="35%" align="center"><img src="<?php echo base_url();echo $team_val['image'];?>" height="200" width="200"></td>
    <td width="6%">&nbsp;</td>
    <td width="59%"><div> <strong><?php echo $team_val['name'];?></strong> <br>
      <br>
      <div>Designation: <?php echo $team_val['designation'];?></div>
      <div>Qualification: <?php echo $team_val['qualification'];?></div>
      <div>Total Exp: <?php echo $team_val['exp'];?></div>
      <div>Contact No: <?php echo $team_val['contact'];?></div>
      <div>Email Id: <a href="mailto:<?php echo $team_val['email'];?>" target="_blank"><?php echo $team_val['email'];?></a>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php endif;?>
<?php endforeach;?>
  
  
   <tr>
     <td colspan="3" align="center" bgcolor="#99CC00" style="font-family:'Lucida Calligraphy'; font-size:14px; font-weight:bold">Finishing School Team</td>
     </tr>

   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <?php foreach ($team as $team_finish):?>
  <?if ($team_finish['finishing_school_team'] == 0): ?>
  <tr>
    <td align="center"><img src="<?php echo base_url();echo $team_finish['image'];?>" height="200" width="200"></td>
    <td>&nbsp;</td>
    <td><div> <strong><?php echo $team_finish['name'];?></strong><br>
        <br>
        <div>
          <div>Designation:<?php echo $team_finish['designation'];?></div>
          <div>Qualification:<?php echo $team_finish['qualification'];?></div>
          <div>Total Exp: <?php echo $team_finish['exp'];?></div>
          <div>Email Id: <a href="mailto:<?php echo $team_finish['email'];?>" target="_blank"><?php echo $team_finish['email'];?></a></div>
        </div>
    </div></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php else:?>
<?php endif;?>
<?php endforeach;?>

  
</table>


</div>