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
            <h1>רישום פרוייקט חדש</h1>
           
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
   
    
        $title = $_POST['Title'];
          $SecondTitle = $_POST['SecondTitle'];
            $Shortsolution = $_POST['Shortsolution'];
              $LongDescription = $_POST['LongDescription'];
                $year = $_POST['year'];


                $target_dir = "projectImg/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


       

}
?>


                <form action="newProject.php" method="post"  enctype="multipart/form-data">
                   שם הפרוייקט: <input type="text" name="Title" /><br /><br />
                   כותרת משנית (שאלת החקר): <input type="text" name="SecondTitle" /><br /><br />
                    פיתרון בקצרה: <input type="text" name="Shortsolution" /><br /><br />
                    הסבר: <textarea name="LongDescription" rows="10" cols="30"></textarea><br /><br />
                    שנת הפרוייקט: 
                    <input list="year" name="year">
<datalist id="year">
  <option value="2015">
  <option value="2014">
  <option value="2013">
  <option value="2012">
  <option value="2011">
</datalist>         <br /><br />
            
                    תמונה:<input type="file" name="picture" id="picture"/>
                    <br /><br />
                   

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