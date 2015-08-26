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
    
   <?php include 'LoginHeader.php'; ?>


    <div id="blurb">
        <div class="wrap">
            <h1>Portfolio.</h1>
            <p>Quisque aliquet volutpat mauris, vel eleifend tellus condimentum bibendum.
            Donec pharetra orci eget nisl dictum a pretium erat consectetur.</p>
        </div><!-- // end .wrap -->
    </div><!-- // end #blurb -->
    
    <div id="portfolio-samples">
        <div class="wrap clearfix">

            <?php

 // Create connection
$conn = new mysqli(localhost, "root", "1234", "fllprojects");
// Check connection
if ($conn->connect_error) {
    echo "die you bustered";
    die("Connection failed: " . $conn->connect_error);
} else{
  
}
 
 

 $sql = "SELECT PID,TeamID,Picture,Title FROM projects ORDER BY PID ASC";
      
      $res = $conn->query($sql);
     
      $counter = 0;

   
   while($row = $res->fetch_assoc()) {
   
       echo '<div class="portfolio-item fl  push-2 col-1">';
       echo  ' <a href="Project-single.php?PID='.$row['PID'].'"><img src="projectImg/'.$row['Picture'].'" alt="thumb" /></a>';
      echo  '<div class="info">'.$row['Title'].' By Team '.$row['TeamID'].'</div>';
       echo  '</div>';
       

    }

    $conn->close();


?>
            
              
               
         <?php include 'BottomHeader.php'; ?>  
        
   

</body>
</html>