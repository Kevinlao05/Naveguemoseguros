<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'Mi_Licencia'
) or die(mysqli_error($mysqli));

?> 