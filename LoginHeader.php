<?php
session_start();
if(isset($_POST['logout'])){
   session_unset(); 
   // setcookie("NID", "", time() - 3600);
  echo "התנתקת בהצלחה";
  header("Refresh:0");
}

?>  

   <div id="header">
        <div class="wrap clearfix">
            <div id="header-logo" class="fl">
                <h1>Israeli <span>FLL projects</span></h1>
            </div><!-- // end #header-logo -->
            <div id="nav" class="fr">
                <ul>
                    <li class="active"><a href="index.php">עמוד בית</a></li>
                    <li><a href="about.php">אודותינו</a></li>
                    <li><a href="projects.php">לצפייה פרוייקטים</a></li>
                    <li><a href="TeamList.php">לרשימת הקבוצות</a></li>
                    <?php 
                        if (isset($_SESSION['NID'])){ // loged in
                        if($_SESSION['NID']== "admin"){
                           
                   echo "<li><a href='projects.php'>ניהול אתר</a></li>";
                    

                        }else{
                       
                            echo "<li><a href='newProject.php'>העלה פרוייקט חדש</a></li>";
                      echo "<li><a href='projects.php'>הפרוייקטים שלי</a></li>";
                   
                        }
                        }
                    ?>
                    <li><a href="contact.php">צור קשר</a></li>
                </ul>
                <br />
                                 <?php
    
 
 
$username = $_POST["username"];
$password = $_POST["password"];   
if(isset($_POST['login']) and $username != NULL and $password !=null){

 // Create connection
$conn = new mysqli(localhost, "root", "1234", "fllprojects");
// Check connection
if ($conn->connect_error) {
    echo "die you bustered";
    die("Connection failed: " . $conn->connect_error);
} else{
  
}
 
 

 $sql = "SELECT NID,FullName FROM mentors WHERE Username ='".$username."' AND password='".$password."'";
      
      $res = $conn->query($sql);
     
        if($res->num_rows > 0 ) {
           echo "התחברת בהצלחה!";
        


    //username and password exist
        
         $row = $res->fetch_assoc();
        

         $_SESSION['NID'] = $row['NID'];
          $_SESSION['FullName'] = $row['FullName'];
  
header("Refresh:0");
} else if($username =="admin" && $password == "admin"){
    
     $_SESSION['NID'] = "admin";
     $_SESSION['FullName'] = "מנהל אתר";
    header("Refresh:0");
} else{
            echo "שם משתמש וסיסמא שגויים"; 

         
   
        }
$conn->close();





}

     if (isset($_SESSION['NID'])){ // loged in
         
         echo "<form method='post' action='index.php' >";
         echo "שלום, " . $_SESSION['FullName']; 
         echo "  <input type='submit' name='logout' value='התנתק' />";
         echo "</form>";
}else{
        
      ?>
               
        <form method="post" action="index.php">
     
       שם משתמש: <input type="text" name="username" />          
     סיסמא:     <input type="password" name="password" /> 
            
            <input type="submit" name="login" /> 
             אין לך חשבון?
            <a href="Signup.php">להרשמה לאתר!</a>
</form>
        
      <?php } ?>
            </div><!-- // end #nav -->


        </div><!-- // end .wrap -->


    </div><!-- // end #header -->

        <hr />
  
        
        
