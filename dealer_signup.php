<?php
$con=@mysql_connect("localhost", "root", "") or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db("softwareeng",$con) or die("Failed to connect to MySQL: " . mysql_error());  
$cursor = mysql_query("INSERT INTO dealer(name, address, email, password, phno) values('$_POST[name]', '$_POST[address]', '$_POST[email]', '$_POST[paswd]', '$_POST[phno]')");

if ($cursor) {
    echo "New record created successfully";
    header("refresh:2;url=dealer_signin.html");
} else {
    echo "Error: " . "<br>" . mysql_error();
echo '<form action="home.html" method="post">';

}
?> 