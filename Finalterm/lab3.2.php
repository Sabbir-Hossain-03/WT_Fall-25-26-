<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
<body>
<?php
$name= "";
$nameerr= "";
$email= "";
$emailerr= "";
$dob= "";
$doberr= "";
$gender= "";
$gendererr= "";
$degree= "";
$bloodgroup= "";
if (empty ($_POST["name"]))
{
$nameerr="Name is req"; // value empty
}
else {
$name= test_input($_POST["name"]); //clean out input
if (!preg_match("/^[a-zA-Z ]*$/",$name))  // only letter and middle space
{
    $nameerr ="Only letters and white space allowed";
}
elseif (str_word_count($name)<2) {
            $nameerr = "At least 2 words required";
}
}

    $email=trim($_POST["email"]);
    if(empty($email)) {
        $emailerr="Email cannot be empty";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerr="Invalid email address";
    }

function test_input($data)
{
$data = trim($data); // trim amr previous data remove kore dai
return $data;
}
?>

<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>"><br><br>
Email: <input type="text" name="email" value="<?php echo $email;?>">
<?php echo $emailerr; ?><br><br>
DOB: <input type="date" name="dob" value="<?php echo $dob;?>"><br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other<br><br>

  Degree :
  <input type="checkbox" name="degree" value="SSC">SSC
  <input type="checkbox" name="degree" value="HSC">HSC
    <input type="checkbox" name="degree" value="BSc">BSc
      <input type="checkbox" name="degree" value="MSc">MSc<br><br>

      Blood Group:
      <select name="bloodgroup">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
</select><br><br>

<input type="submit" name="submit" value="Submit"><br><br>

<?php echo $nameerr; ?>


<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerr) && empty($emailerr) && empty($doberr) && empty($gendererr))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
echo "Email: ".$email. "<br>";
echo "DOB: ".$dob. "<br>";
echo "Gender: ".$gender. "<br>";
echo "Degree: ".$degree. "<br>";
echo "Blood Group: ".$bloodgroup. "<br>";
}
?>
</body>
</html>
