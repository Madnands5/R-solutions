
<?php
var_dump($_REQUEST);
$to = $_REQUEST['email']', rbussinessolutions@gmail.com'; // note the comma
// Subject
$subject = $_REQUEST['subject'];
// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <h1>'.$subject .'</h1>
  <br>Your request for :
  '
  .$_REQUEST["message"]."
  <br>
  is under process.<br>
  Our executives will contact your soon..<br>
  for any other queries please <br>
  watsapp:7447525123<br>
</body>
</html>";
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
/*
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
*/
// Mail it
if(mail($to, $subject, $message, implode("\r\n", $headers))){
    /*require 'dbdata.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if(!$conn) 
    {
        return(" Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
    $return="";
    if (mysqli_query($conn, $sql))
    {
        $return.=$sql." !!success";
    }
    else
    {
        $return.=$sql." !!Failure";
    }
    mysqli_close($conn);
    $return.=" !!Error:".mysqli_error($conn);*/
}
else{
    $return.= "  Mail failed!!";
}
return $return;
?>
