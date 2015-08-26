//project samples - 4 most viewed

  
    <div id="portfolio-samples">
         
        <div class="wrap clearfix">
          
           <?php
               
  while($row = $res->fetch_assoc() and $counter <4) {
   if($counter == 0)
     echo '<div class="portfolio-item fl col-1">';
     else{
       echo '<div class="portfolio-item fl  push-2 col-1">';
   }
       echo  ' <a href="Project-single.php?PID='.$row['PID'].'"><img src="projectImg/'.$row['Picture'].'" alt="thumb" /></a>';
      echo  '<div class="info">'.$row['Title'].' By Team '.$row['TeamID'].'</div>';
       echo  '</div>';
       
       $counter++;
    }


           ?>
        </div><!-- // end .wrap -->
    </div><!-- // end #portfolio-samples -->    
    <?php    $conn->close(); ?>


-------------------------------------------------------------------------------------------------