<?php 
/* 
| Developed by: Tauseef Ahmad
| Last Upate: 27-08-2020 03:45 PM
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 */ 
 
 
 
// Connect with the database 
$conn = mysqli_connect('localhost','root','','jazzcash_payment'); 
 
// Display error if failed to connect 
if ($conn->connect_errno) { 
    echo "Connection to database is failed: ".$conn->connect_error;
    exit();
}