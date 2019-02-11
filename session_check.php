<?php
session_start();
 ?>
 <!DOCTYPE html>
 <p>Session variables are:
 <?php print_r($_SESSION); ?></p>
<a href='session_destroy.php'>Click to destroy the session.</a>
