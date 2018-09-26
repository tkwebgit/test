
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.

try
{     //creating connection with a database
     $link = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
     //Sets an attribute on the database handle.Error reporting and Throw exceptions.
     $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}
try {
    $sql = "INSERT INTO members ('username', 'password')
    VALUES ('tomk, '1234')";
    // use exec() because no results are returned
    $link->exec($sql);
    echo "New record created successfully";

}
     
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$link = null;










// username and password sent from form 




/* if (isset($_POST["myusername"]) && !empty($_POST["myusername"])) {
    echo "Welcome";    
}else{  
    echo "username wrong";
}

if (isset($_POST["mypassword"]) && !empty($_POST["mypassword"])) {
    echo "Welcome";    
}else{  
    echo "password wrong";
}



// To protect MySQL 



$relult=mysql_query("SELECT * FROM members ");
$result=mysql_num_rows($result);

// Mysql_num_row is counting table row Return the number of rows in a result set:

$count=mysql_num_rows($result);


// If result matched $username and $mypassword, table row must be 1 row

if($count==1){

// Register $username, $password and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>

