<html>
<head>
<style>
.error {color: #ff6347;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dateErr = $degreeErr=$bloodErr= "";
$name = $email = $gender = $date= $degree= $blood= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      //$nameErr = "Only letters and white space allowed";
      $nameErr = "Must be contain a-z, A-Z,period, dash only";
      $name="";
    }
    else if(str_word_count($name)<3){
      $nameErr = "Must be Contains at least two words";
      $name="";
    }
    else if (!(($name[0] >= 'a' && $name[0] <= 'z') || ($name[0] >= 'A' && $name[0] <= 'Z'))){
        $nameErr = "Must be Contains at least two words";
        $name="";
      }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
    
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["date"])) {
    $dateErr = "date is required";
  } else {
    $email = test_input($_POST["date"]);    
  }


  if(isset($_POST["submit"])) 
    {
        // Check if any option is selected
        if(!isset($_POST["blood"])) 
        {
            $bloodErr="select an option";
        }            
    } 


    // if(isset($_POST['submit'])){

    //     if (count($degree) < 2){
    //         $degreeErr="Select at least 2";
    //     }
    //     else{
    //         $degree = test_input($_POST["degree"]);
    //     }
        
    // }

    if(!isset($_POST["degree"]))
	{
		$degreeErr="Must be selected";		
	}
	else if (sizeof($_POST["degree"])<2)
	{
		$degreeErr="At least two must be selected";
	}


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  <fieldset>
  <legend>Name</legend>
  <br>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
  <hr>
  <br><br>
  </fieldset>
  <br><br>
  
  <fieldset>
  <legend>Email</legend>
  <br><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br>
  <hr>
  <br><br>
  </fieldset>
   <br><br>

  <fieldset>
  <legend>Gender</legend>
  <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br>
  <hr>
  <br><br>
  </fieldset>
  <br><br>
  <fieldset>
  <legend>Date Of Birth</legend>
  <br>
  <input type="date" name="date" value="<?php echo $date;?>">
  <span class="error">* <?php echo $dateErr;?></span>
  <br>
  <hr>
  <br><br>
  </fieldset>
  <br><br>
  <fieldset>
  <legend>Degree</legend>
  <br>


  Test area  

  <br> 

  <input type="checkbox" name="degree[]"<?php echo $degree;?>"> SSC 
  <input type="checkbox" name="degree[]"<?php echo $degree;?>"> HSC 
  <input type="checkbox" name="degree[]"<?php echo $degree;?>"> BSc 
  <input type="checkbox" name="degree[]"<?php echo $degree;?>"> MSc 
  <span class="error">* <?php echo $degreeErr;?></span>
  <br>
  <hr>
  <br><br>
  </fieldset>
  <br><br>
  <fieldset>
  <legend>Blood Group</legend>
  <br>
  <select name = 'blood[]' multiple size = 4>
  <!-- <select name="blood" id="blood"> -->
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="O">O</option>
  <option value="O-">O-</option>
  </select>
  <span class="error">* <?php echo $bloodErr;?></span>
  <br>
  <hr>
  <br><br>
  </fieldset>
  <br> <br>


  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $date;
echo "<br>";
echo $degree;
echo "<br>";
echo $blood;
?>

</body>
</html>