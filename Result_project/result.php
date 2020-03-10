
<?php
 if(!isset($_COOKIE["userlogin"])){
     header('location:index.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="dist/lib/bootstrap/css/flexboxgrid.min.css">
     <link rel="stylesheet" href="dist/lib/bootstrap/css/font-awesome.min.css">
     <link rel="stylesheet" href="dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
<?php
require_once('connect.php');
   $name="";
   $roll="";
   $java="";
   $python="";
   $math="";
   $bangla="";
   

   $nname="";
   $nroll="";
   $njava="";
   $npython="";
   $nmath="";
   $nagree_check="";
   $nbangla="";
   $datasaved="";
   if(isset($_REQUEST['submit'])){
       $name=$_REQUEST['name'];
       $roll=$_REQUEST['roll'];
       $java=$_REQUEST['java'];
       $python=$_REQUEST['python'];
       $math=$_REQUEST['math'];
       $bangla=$_REQUEST['bangla'];
       

       $ck=0;
       if($name==""){
           $ck++;
           $nname="<span class='text-danger'>Required</span>";
       }if(!isset($_REQUEST['agree_check'])){
        $ck++;
        $nagree_check="<span class='text-danger'>Required</span>";
       }
       if($roll==""){
           $ck++;
           $nroll="<span class='text-danger'>Required</span>";
       }
       
       if($java==""){
           $ck++;
           $njava="<span class='text-danger'>Required</span>";
       }if(0>$java || $java>100){
           $ck++;
           $njava="<span class='text-danger'>Please,Enter Valid Number</span>";
       }
       
       if($python==""){
           $ck++;
           $npython="<span class='text-danger'>Required</span>";
       }if(0>$python || $python>100){
           $ck++;
           $npython="<span class='text-danger'>Please,Enter Valid Number</span>";
       }
       
       if($math==""){
           $ck++;
          $nmath= "<span class='text-danger'>Required</span>";
       }if(0>$math || $math>100){
           $ck++;
           $nmath="<span class='text-danger'>Please,Enter Valid Number</span>";
       }
       
       if($bangla==""){
             $ck++;
             $nbangla= "<span class='text-danger'>Required</span>";
       }if(0>$bangla || $bangla>100){
        $ck++;
        $nbangla="<span class='text-danger'>Please,Enter Valid Number</span>";
    }
       
       if($ck==0){
             
             $query="INSERT INTO `cse`(`Name`, `Roll`, `java`, `python`, `bangla`, `math`, `agree_ck`) VALUES ('$name','$roll','$java','$python','$bangla','$math','I Agree')";
             $runquery=mysqli_query($connect,$query);
             if($runquery==true){
                 $datasaved="Dava Saved!";
                 $name="";
                 $roll="";
                 $java="";
                 $python="";
                 $bangla="";
                 $math="";

             }else{
                 $nroll="<span class='text-danger'>Roll already taken!!!</span>";
                 
             }
           
       }else{
           $datasaved="Not Saved";
       }
   }
 
 ?>

    <section class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="logo-section">
                    <img src="dist/images/logo/logo.png">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" id="nav-section">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home <i class="fa fa-user"></i></a></li>
                            <li><a href="service.php">Services <i class="fa fa-envelope"></i></a></li>
                            <li><a href="private.php">Private <i class="fa fa-key"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--showcase-->
    <div id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="dist/images/banner/3.jpg">
            </div>
            <div class="carousel-item ">
                <img src="dist/images/banner/1.jpg">
            </div>
            <div class="carousel-item ">
                <img src="dist/images/banner/2.jpg">
            </div>
            <div class="carousel-item ">
                <img src="dist/images/banner/4.jpg">
            </div>
        </div>

    </div>
  <section class="result-title mt-5">
      <div class="container">
          <h4 class="text-primary text-center">Please Insert data Maximum 100  Minimum 0</h4>
      </div>
  </section>  
  <!--- Resultset data insert-------------------->
  <section id="datainsert-section">
    <div class="container">
    <form method="post" action="">
    <div class="row">
      
            <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <label for="n">Name</label>
                <input class="form-control" type="text" placeholder="Name" value="<?php echo $name; ?>" name="name" id="n">
                <label><?php print $nname;?></label>
            </div>
    
    
        <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <label for="r">Roll</label>
            <input class="form-control" type="text" placeholder="roll" value="<?php echo $roll; ?>" name="roll" id="r">
            <label><?php echo "$nroll;"?></label>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <label for="j">Java</label>
            <input class="form-control" type="text" placeholder="Java" value="<?php echo $java; ?>" name="java" id="j">
            <label><?php echo "$njava;"?></label>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <label for="py">Python</label>
            <input class="form-control" type="text" placeholder="Python" value="<?php echo $python; ?>" name="python" id="py">
            <label><?php echo "$npython;"?></label>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <label for="m">Math</label>
            <input class="form-control" type="text" placeholder="Math" value="<?php echo $math; ?>" name="math" id="m">
            <label><?php echo "$nmath"; ?></label>
        </div>
        <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <label for="ban">Bangla</label>
            <input class="form-control" type="text" placeholder="Bangla" value="<?php echo $bangla; ?>" name="bangla" id="ban">
            <label><?php echo "$nbangla;"?></label>
        </div>
        <div class="form-check col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-0">
            <input  class="form-check-input" type="checkbox" name="agree_check"> I agree terms & condition
            <span class="text-danger"> <?php  print $nagree_check; ?></span>
        </div>
        <div class="form-group">
             <input class="btn btn-primary" type="submit" value="Submit" name="submit"> <span class="text-success"><?php print $datasaved;?></spna>
            
        </div>
    </div>
   </form>
    </div>
  </section>
  
  <!---Table Data Show----------->
  <section id="data_show_table">
    <div class="container">
        <table>
           <tr>
              <th>Name</th>
              <th>Roll</th>
              <th>Java</th>
              <th>Python</th>
              <th>Bangla</th>
              <th>Math</th>
           </tr>
           <!---Php Database Cononect---->
  <?php
     require_once('connect.php');
     $query="SELECT * FROM `cse`;";
     $runquery=mysqli_query($connect,$query);
     if($runquery==true){
        while($mydata=mysqli_fetch_array($runquery)){
              echo '<tr>
                       <td>'.$mydata['Name'].'</td>
                       <td>'.$mydata['Roll'].'</td>
                       <td>'.$mydata['java'].'</td>
                       <td>'.$mydata['python'].'</td>
                       <td>'.$mydata['bangla'].'</td>
                       <td>'.$mydata['math'].'</td>
                   </tr>';
         }
     }
  ?>
           
        </table>
    </div>
  </section>
   
    

 
  
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="dist/lib/bootstrap/js/popper.min.js"></script>
    <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
