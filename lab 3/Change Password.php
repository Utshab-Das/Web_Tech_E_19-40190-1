<!DOCTYPE html>
<html >
  <head>
    <title>Change Password Page</title>
  </head>
  <body>
    <?php
   $cpassword=$npassword=$rnpassword="";
   $cpasswordErr=$npasswordErr=$rnpasswordErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpassword"]))
	 {
       $cpasswordErr = "Current Password required";
     }
     else
		 {
      $cpassword = test_input($_POST["cpassword"]);

        if (strcmp($cpassword,"1234"))
	    {
          $cpasswordErr = "Incorrent Password";
        }      
	   }
        if (empty($_POST["npassword"])) 
		{
          $npasswordErr = "New Password required";
        }
        else 
		{
         $npassword = test_input($_POST["npassword"]);

          if (!strcmp($npassword,"5678"))
       	  {
             $npasswordErr = "Current and New Password have to be different";
           }
         }
           if (empty($_POST["rnpassword"]))
		   {
             $rnpasswordErr = "Retype new Password required";
           }
           else 
		   {
            $rnpassword = test_input($_POST["rnpassword"]);

             if (strcmp($npassword,$rnpassword)) 
			 {
                $rnpasswordErr = "Retype password and New Password have to be same";
              }
            }
   }
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
     ?>
	 
    <fieldset style="width: 500px" align="left">
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label>Current Password:</label> 
		  <input type="password" name="cpassword" value="<?php echo $cpassword;?>">        
          <br>
          <label style="color:green">New Password:</label>
          <input type="password" name="npassword" value="<?php echo $npassword;?>">         
          <br>
          <label style="color:Red">Retype New Password:</label>
          <input type="passsword" name="rnpassword" value="<?php echo $rnpassword;?>">        
          <br><hr>
          <input type="submit">
          <br>
      </form>
    </fieldset>
  </body>
</html>