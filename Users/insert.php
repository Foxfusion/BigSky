<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);
ini_set("display_errors", 1);
//include("file_with_errors.php");

/*

# should display the filename and never ever get here :)



 
ini_set('dispay_errors', TRUE);
/*
#debug sttuff - saves re-typing 
defined('jj'); 
NULL : define('jj'. '<br />');

defined('js'); 
? NULL : define('jj'. '&nbsp;&nbsp;');

//echo  __FILE__; 
//die;

# should display the filename and never ever get here :)


?>
<?php
    
/*
//error_reporting(-1); 
ini_set('dispay_errors', TRUE);

#debug sttuff - saves re-typing 
//defined('jj'); ? NULL : define('jj'. '<br />');
//defined('js'); ? NULL : define('jj'. '&nbsp;&nbsp;');
////error_reporting(-1); 
ini_set('dispay_errors', TRUE);


#debug sttuff - saves re-typing 
//defined('jj'); ? NULL : define('jj'. '<br />');
///defined('js'); ? NULL : define('jj'. '&nbsp;&nbsp;');

//echo jj, __LINE__, js, js, __FILE__; die;
*/

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "B00l3an88#";
$database = "FoxBase_One";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);

if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$username = $_REQUEST['username'];
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
   
   // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO  user_one(username, name, password) VALUES ('$username',
            '$name','$password')";
         
        if(mysqli_query($conn, $sql))

{
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

?>