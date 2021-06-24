<!DOCTYPE html>
<html>
<head>
<title>log in page</title>
</head>
<body>
<style>
.error {color: #FF0000;}
</style>
<?php
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["username"])) 
  {
    $usernameErr = "Name is required";
  } 
  else 
  {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z0-9-'_.-]*$/",$username) || str_word_count($username)<2 )
    {
      $usernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $username="";
    }
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) <= 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (@, #, $,%)";
      $password ="";
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post">
 <fieldset style="width: 500px">
  <legend>LOGIN</legend>

  <label for="user_name">User name :</label>
  <input type="text" id="username" name="username">
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="rememberme" name="rememberme">
  <label for="rememberme">Remember Me</label><br><br>

  <input type="submit" value="Submit">
  <a href="">Forgot Password?</a>
 </fieldset>
</form>
</body>
</html>