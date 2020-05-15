<?php 
    
           
           include "connection.php";
         
           $nk=0;
           $nt=0;
           $nka=0;

           $nh=0;

           $nc=0;








          
                   $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'kerala' ");
                   while($row = mysqli_fetch_array($result)){
                       $nk=$nk+1;

                   }
                   


               
                   $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'tamilnadu' ");
                   while($row = mysqli_fetch_array($result)){
                       $nt=$nt+1;

                   }
               
                   $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'Karnataka' ");
                   while($row = mysqli_fetch_array($result)){
                       $nka=$nka+1;

                   }
                   

                
                   $result = mysqli_query($con,"SELECT * FROM clglist WHERE state = 'hyderabad' ");
                   while($row = mysqli_fetch_array($result)){
                       $nh=$nh+1;

                   }
      
                   $result = mysqli_query($con,"SELECT * FROM clglist  ");
                   while($row = mysqli_fetch_array($result)){
                       $nc=$nc+1;

                   }
                
            

    

?>