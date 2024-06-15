<?php
$server_name = "localhost";
$user_name ="root";
$password = "jamryan09";
$db_name = "resume";
// ito ay para makagawa ng connection
$conn = new mysqli ($server_name, $user_name, $password, $db_name);
//ito naman ay para i check kung ung connection ay gumagana
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// ito ay para makuha ung value sa input at pag insert ng value sa database
if (isset($_POST['save']))
{
 $f = $_POST['fname'];
 $l = $_POST['lname'];
 $m = $_POST['mname'];
 $b = $_POST['bday'];
 $el = $_POST['elem'];
 $sec = $_POST['second'];
 $t = $_POST['ter'];
 $s = $_POST['Sskill'];
 $h = $_POST['Hskill'];
    
    
   
    $sql_query = "INSERT INTO personal ( fName, lName, mName, Bday, elementary, highschool, tertiary, softskill, hardskill )
     VALUES ('$f', '$l', '$m', '$b', '$el', '$sec', '$t', '$s', '$h')";
     
 if (mysqli_query($conn, $sql_query))
   echo "submitted";
    else {echo "bawi na lng next life HAHAHAHA!:" . $sql . "" .mysqli_error($conn);}
    mysqli_close($conn);

}
 
?>