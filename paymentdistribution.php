

<?php
    

  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>







<html>


<head>
    
  
<link rel="stylesheet" href="style.css">  
    </head>









<body> 
    
    
    
<center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
 
  <h1>Emergency Fund Balance:<?php  if(!empty($_POST['totalamount']))
                             
                             
                             
                             
                             {  echo '$'.$_POST['totalamount']; 
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          }?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </h1> <br>
  <input type="text" name='totalamount' value="" placeholder="Enter your amount here"><br><br>
  <input type="submit" value="Submit">

     
<div>
   Walmart :<br>
  <input type="text" name="lastname" value="" placeholder="Enter your amount here"><br><br>
  <input type="submit" value="Submit">
</div>
      <div>
    Mobil Gas Station <br>
  <input type="text" name="lastname" value="" placeholder="Enter your amount here"><br><br>
  <input type="submit" value="Submit">
    
   </div> 
<div>
 Home Depot :<br>
  <input type="text" name="lastname" value="" placeholder="Enter your amount here"><br><br>
  <input type="submit" value="Submit">
</div>
     
    </form>
    
    </center>
    
    
    
    
    
    
</body>















</html>