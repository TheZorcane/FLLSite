<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//HE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="he" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Project Description" />
    <meta name="keywords" content="Project Keywords" />
    <title>Random Folio</title>	
    <link href="css/style.css" rel="stylesheet" type="text/css" />			
    <!--[if IE]><link href="css/style-ie.css" rel="stylesheet" type="text/css" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>

<body>
    
 <?php include 'LoginHeader.php'; 

  // Create connection
$conn = new mysqli(localhost, "root", "1234", "fllprojects");
// Check connection
if ($conn->connect_error) {
    echo "die you bustered";
    die("Connection failed: " . $conn->connect_error);
} else{
  
}
 

 $sql = "SELECT * FROM projects WHERE PID ='".$_GET[PID]."'";
      
      $res = $conn->query($sql);
     
        if($res->num_rows > 0 ) {
             $row = $res->fetch_assoc();
           $TeamID = $row['TeamID'];
           $Picture= $row['Picture'];
           $Title = $row['Title'];
           $SecondTitle = $row['SecondTitle'];
          $ShortSolution = $row['ShortSolution'];
           $LongDescription = $row['LongDescription'];
          $Year = $row['Year'];
          $newViews = $row['Views']+1;
          
         $sql2 = "UPDATE projects SET Views='".$newViews."' WHERE PID ='".$_GET[PID]."'";
             $res2 = $conn->query($sql2);
     
        
         echo $TeamID;
         echo "<br />";
          echo $Picture;
           echo "<br />";
           echo $Title;
            echo "<br />";
            echo $SecondTitle;
             echo "<br />";
             echo $ShortSolution;
              echo "<br />";
              echo $LongDescription;
               echo "<br />";
               echo $Year;
                echo "<br />";
           
        
        }
       
        
$conn->close();


 
 
 ?>

    <?php include 'BottomHeader.php'; ?>  

</body>
</html>