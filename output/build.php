<?php 
$users = (object) [
  [ 'name' => 'Hasan' ],
  [ 'name' => 'Kazi' ],
]; 
$x = true;
?>

<?php foreach($users as $user) { ?>
  Welcome admin, <?php echo $user->name; ?>
<?php } ?>

<?php for($i = 0; $i <= 10; $i++) { ?>
  <?php echo $i; ?> <hr/>
<?php } ?>

<?php if(! $x) { ?>
  <div>
    No title found!
  </div>
<?php } ?>
<?php elseif($x == 'Hasan') { ?>
  <div>
    Oh, Hasan!
  </div>
<?php } ?>