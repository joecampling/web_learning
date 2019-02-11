<?php
session_start();
 ?>
 <!DOCTYPE html>
 <p>Session variables to start</p>
 <?php print_r($_SESSION);
 $_SESSION['name'] = 'Joe';
 $_SESSION['status'] = 'is a penguin';
 ?>
<p>Session variables set.</p><a href = 'session_check.php'>Click here to check.</a>
<?php print_r($_SESSION); ?>
