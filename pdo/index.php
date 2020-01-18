 <?php
 
require 'config.php';

 // $servername = "localhost";
 // $username = "root";
 // $password = " ";

 //establish connection
 function dbInit(){
	
 // if(isset($GLOBALS['db']))return $GLOBALS['db'];
   global $DBVARS;
    $db=new PDO('mysql:host='.$DBVARS['hostname'].';dbname='.$DBVARS['db_name'],$DBVARS['username'],$DBVARS['password']);
    return $db;
  }
  //connect and crete DB_NAME,CRETE,INSERT and Update tabl
   function dbQuery($query){
    $db=dbInit();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $q=$db->query($query);
     return $q;
    }
    
    function dbRow($query) {
		
      $q = dbQuery($query);

      
      return $q;
	  
      }
  try  {
      //$conn =dbInit();
 
	  
    //  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	  $sql = "SELECT id, firstname, lastname FROM MyGuests";
	  
	
      // echo "inserted successfully";
	   /*....How to get data from BD....*/
	   $result = dbRow($sql);
	   $row = $result->fetch();
	   
	   //display on browser
	   echo "<pre>".print_r($row). " </pre>";
       }
   catch(PDOException $e)
     {
       echo "Connection failed: " . $e->getMessage();
     }
	
	  $conn=null;
?> 