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
            <h1>הרשמה</h1>
           
        </div><!-- // end .wrap -->
    </div><!-- // end #blurb -->    

    <div class="wrap">                                
        <div class="content clearfix">
            <div class="col-3 fl">
                 
                                <?php
function checkFIOS(){
    return TRUE;
}

if(isset($_POST['signup'])){
    if($_POST['password'] != $_POST['repassword']){
        echo "<span style='color : red'>אימות סיסמא נכשל</span>";
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fullname = $_POST['fullName'];

$conn = new mysqli(localhost, "root", "1234", "fllprojects");
// Check connection
if ($conn->connect_error) {
    echo "die you bustered";
    die("Connection failed: " . $conn->connect_error);
} else if(!checkFIOS()){
  echo "failed to FIOS";
}else{
  $sql = "INSERT INTO mentors (username, password, email, phone, fullName)
VALUES ('". $username . "', '". $password . "', '". $email . "', '". $phone . "', '". $fullname . "')";

if ($conn->query($sql) === TRUE) {
    echo "ההרשמה בוצעה בהצלחה!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
    }
}
?>


                <form action="Signup.php" method="post">
                   שם משתמש: <input type="text" name="username" /><br /><br />
                   סיסמא: <input type="password" name="password" /><br /><br />
                    אימות סיסמא: <input type="password" name="repassword" /><br /><br />
                    אימייל: <input type="text" name="email" /><br /><br />
                    שם מלא: <input type="text" name="fullName" /><br /><br />
                    טלפון: <input type="text" name="phone" /><br /><br />

                    <br />
                    בהרשמה לאתר אני מאשר שקראתי את <a href="TOC.php">התקנון</a> ומסכים לתוכנו.
                    <br />
                    <br />

                  <input type="submit" name="signup" value="הרשמה">

                
                
                
                </form>


         </div><!-- // end .col-2 .fl -->
         
        </div><!-- // end .content -->        
        
    </div><!-- // end .wrap -->
    
     <?php include 'BottomHeader.php'; ?>  

</body>
</html>