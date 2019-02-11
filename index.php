<?php
echo "Hello World! :-D <br>";
$array4 = array(0);
$variable = "I'm a variable?";
$age = 34;
$string = "My age is $age";
echo $string;
$a = "age";
echo "My age is " . $$a . "<br>";
$b = 'test';
$$b = 'does this work?';
echo $test;
$array = array('name', 'email', 'address');
print_r($array);
echo $array[2];
$array2[1] = 'salad';
$array2[] = 'bowl';
$array2[0] = 'red';
print_r($array2);
// If, else, switch
$number = 3;
$number2 = 2;
$number3 = 3;
if ($number == $number2 || $number == $number3) {
  echo 'true';
} else {
  echo 'false';
}
switch($number) {
  case 1:
    echo 'True';
    break;
  case 2:
    echo 'False';
    break;
  default:
    echo 'No idea';
}

//For and foreach Loops
for ($i = 1; $i <= 10; $i++) {
  echo "$i<br>";
}
$array_me = array('Name' => 'Joe', 'Email' => 'freerangepenguin@hotmail.com', 'Age' => 34);
foreach($array_me as $key => $value) {
  echo "Key: $key: $value<br>";
}
//While Loops
$a = 0;
while ($a < 10) {
  echo $a;
  $a++;
}
// GET Variables
if (isset($_GET['s'])) {
  echo '<p>Your search term is: ' . $_GET['s'];
}
?>
<form method = "get" action = "">
  <label>Enter search terms</label>
  <input type = "search" name = "s" value = "<?php echo $_GET['s']; ?>" >
</form>
<?php
echo "<br>";
// POST Variables
if (isset($_POST['s'])) {
  echo '<p>Your search term is: ' . $_POST['s'];
}
?>

<form method = "post" action = "">
  <label>Enter search terms</label>
  <input type = "search" name = "s" value = "<?php echo $_POST['s']; ?>" >
</form>

<a href = 'send_email.php'>Send email</a></br>
<a href = 'contact_form.php'>Contact form</a></br>
<a href = 'comparison_operators.php'>Comparison operators</a></br>
<a href = 'javascript_test.html'>Javascript test</a></br>
<a href = 'js_nonsense.html'>Javascript nonsense</a></br>
<a href = 'read_file.php'>Read a file</a></br>
<a href = 'sessions.php'>Sessions</a></br>
<a href = 'cookies.php'>Cookies</a></br>

<?php
echo implode(' ,;.. ', array('hello', 'world'));
if ($array4):
 ?>
 <p>Array 4 exists</p>
<?php else:?>
  <p>Array 4 does not exist</p>
<?php endif; ?>
