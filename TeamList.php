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
            <h1>אודותינו</h1>
           
        </div><!-- // end .wrap -->
    </div><!-- // end #blurb -->    
    <table border="1" style="width: 100%">
                                
      <tr>
      <td>מספר הקבוצה</td>
          <td>שם הקבוצה</td>
           <td>מנטור מוביל</td>
           
           <td>עיר</td>
            <td>פלאפון מנטור</td>
            <td>אימייל מנטור</td>
      </tr>
         
                    <?php

 // Create connection
$conn = new mysqli(localhost, "root", "1234", "fllprojects");
// Check connection
if ($conn->connect_error) {
    echo "die you bustered";
    die("Connection failed: " . $conn->connect_error);
} else{
  
}
 
 

 $sql = "SELECT TeamNumber,MentorID,Name,City FROM teams ORDER BY TeamNumber ASC";
      
      $res = $conn->query($sql);
     
    

   
   while($row = $res->fetch_assoc()) {
    $sql2 = "SELECT FullName,Email,phone FROM mentors where NID ='".$row['MentorID']."'";
     
      $res2 = $conn->query($sql2);
     $row2 = $res2->fetch_assoc();
     echo "<tr>";
    echo "  <td>" . $row['TeamNumber'] . "</td>";
      echo "  <td>" . $row['Name'] . "</td>";
          echo "  <td>" . $row2['FullName'] . "</td>";
              echo "  <td>" . $row['City'] . "</td>";
                  echo "  <td>" . $row2['phone'] . "</td>";
           echo "  <td>" . $row2['Email'] . "</td>";
           
       
    echo "</tr>";
    
       

    }

    $conn->close();


?>
            
    </table>  
     
    
    
     <?php include 'BottomHeader.php'; ?>  

</body>
</html>