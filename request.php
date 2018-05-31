<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "isc.bev@gmail.com";
  $email = $_REQUEST['email'];
  $gamename = $_REQUEST['gamename'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$gamename", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for requesting a game!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">

  Email: <input name="email" type="text" />

  Game Name: <input name="gamename" type="text" />

  URL/Description:

  <textarea name="comment" rows="15" cols="40"></textarea>

  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>
