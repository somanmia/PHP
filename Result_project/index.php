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
                            <li><a href="service.php">Services<i class="fa fa-envelope"></i></a></li>
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
  <section class="about-us">
      <div class="container">
          <h1>About Us</h1>
      </div>
  </section>  
   <!---Subscribe Section-->
   <section id="subscribe-section">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <img src="dist/images/banner/Messi.jpg">
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Autem, praesentium. Voluptatum quidem nam eum quo ipsa atque temporibus, molestias natus
                    inventore omnis nisi ipsum debitis? Voluptatum libero eaque aspernatur reprehenderit.</p>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos deleniti sint fugiat, itaque corporis repudiandae odit excepturi aliquam ipsum, necessitatibus incidunt dicta eveniet ullam voluptates explicabo quisquam numquam praesentium ad.</p>
           </div>
           </div>
       </div>

   </section> 
   <!--Result Show Section-->
   <section id="result-show">
       <div class="container">
           <h1 class="text-danger text-center">Get The Result</h1>
           <form method="get" action="">
               <div class="form-group">
                   <input required class="form-control" required type="text" placeholder="Enter Your Roll. Get the Result........." name="result_search">

               </div>
               <div class="form-group">
                <div class="form-check">
                  <input required class="form-check-input" type="checkbox" id="gridCheck" name="search_ck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <input class="btn btn-primary" type="submit" value="Get the Result" name="result">
           </form>


<div>
    
</div>
       </div>
   </section>
  <!--Table section--->
  <section id="table-section">
       <div class="container">
         <?php
         $tname="";
         $tjava="";
         $tpython="";
        
         $tmath="";
         $troll="";
         $gfail="";
         require_once('connect.php');
           if(isset($_REQUEST['result_search'])){
            $rolls=$_REQUEST['result_search'];

               
              $showquery= "SELECT * FROM `cse` WHERE Roll='$rolls'";
              $runquery=mysqli_query($connect,$showquery);
              if($runquery==true){
                while($mydata=mysqli_fetch_array($runquery)){
                    $tname=$mydata['Name'];
                    $troll=$mydata['Roll'];
                    $gjava=$mydata['java'];
                    $tjava= java($gjava);
                    $gpython=$mydata['python'];
                    $tpython= python($gpython);
                    $gbangla=$mydata['bangla'];
                    $tbangla= bangla($gbangla);
                    $gmath=$mydata['math'];
                    $tmath=  math($gmath);
                    //Fail calcaulation---
                 $gparesult=gpacal($gjava,$gpython,$gbangla,$gmath);
                    ?>


                    <!---Table data insert---------->
                    <table>
            <tr>
                <th  colspan="3" style="text-align:center">
                   <h1>Computer Science and Engineering</h1>
                  
                   <h3>Name:<?php echo $tname;?></h3> 
                   <h2>Roll:<?php echo $troll;?></h2>
                </th>
                
            </tr>
            <tr>
                <th>Bangla</th>
                <td><?php echo $tbangla ;?></td>
                <td rowspan="4" style="text-align:center;"><?php echo $gparesult;?></td>
            </tr>
            <tr>
                <th>Java</th>
                <td><?php echo $tjava;?></td>
                
            </tr>
            <tr>
                <th>Python</th>
                <td><?php echo $tpython ;?></td>
                
            </tr>
            <tr>
                <th>Mathmatices</th>
                <td><?php echo $tmath;?></td>
                
            </tr>
        </table>
              <?php }
              }else{
                
              }
           }
         ?>
     </div>
</section>
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="dist/lib/bootstrap/js/popper.min.js"></script>
    <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
function java($x){
        if($x<33){
            return  "F";
        }else if($x>=33 && $x<=39){
            return "D";
        }else if($x>=40 && $x<=49){
            return "C";
        }else if($x>=50 && $x<=59){
            return "B";
        }else if($x>=60 && $x<=69){
            return "A-";
        }else if($x>=70 && $x<=79)
        {
            return "A";
        }else{
            return "A+";
        }
}

// Python----
function python($x){
    if($x<33){
        return "F";
    }else if($x>=33 && $x<=39){
        return "D";
    }else if($x>=40 && $x<=49){
        return "C";
    }else if($x>=50 && $x<=59){
        return "B";
    }else if($x>=60 && $x<=69){
        return "A-";
    }else if($x>=70 && $x<=79)
    {
        return "A";
    }else{
        return "A+";
    }
}
// bangla-----
function bangla($x){
    if($x<33){
        return "F";
    }else if($x>=33 && $x<=39){
        return "D";
    }else if($x>=40 && $x<=49){
        return "C";
    }else if($x>=50 && $x<=59){
        return "B";
    }else if($x>=60 && $x<=69){
        return "A-";
    }else if($x>=70 && $x<=79)
    {
        return "A";
    }else{
        return "A+";
    }
}
// Math-------
function math($x){
    if($x<33){
        return "F";
    }else if($x>=33 && $x<=39){
        return "D";
    }else if($x>=40 && $x<=49){
        return "C";
    }else if($x>=50 && $x<=59){
        return "B";
    }else if($x>=60 && $x<=69){
        return "A-";
    }else if($x>=70 && $x<=79)
    {
        return "A";
    }else{
        return "A+";
    }
}


// Fail Calcaulation function

function gpacal($x,$y,$z,$p){
  $sum=0;
    
      if($x>=33 && $y>=33 && $z>=33 && $p>=33){     
             
        
    if(($x>=33 && $x<=39) || ($y>=33 && $y<=39) || ($z>=33 && $z<=39) || ($p>=33 && $p<=39)){
          $sum+=1.0;
    } if(($x>=40 && $x<=49) || ($y>=40 && $y<=49) || ($z>=40 && $z<=49) || ($p>=40 && $p<=49)){
        $sum+=2.0;
    }if(($x>=50 && $x<=59) || ($y>=50 && $y<=59) || ($z>=50 && $z<=59) || ($p>=50 && $p<=59)){
        $sum+=3.0;
    }if(($x>=60 && $x<=69) || ($y>=60 && $y<=69) || ($z>=60 && $z<=69) || ($p>=60 && $p<=69)){
        $sum+=3.50;
    }if(($x>=70 && $x<=79) || ($y>=70 && $y<=79) || ($z>=70 && $z<=79) || ($p>=70 && $p<=79))
    {
        $sum+=4.0;

    }if(($x>=80 && $x<=100) || ($y>=80 && $y<=100) || ($z>=80 && $z<=100) || ($p>=80 && $p<=100)){
        $sum+=5.0;
    }
   
    $totalgpa=$sum/4;
    return $totalgpa;
      }else{
        return "Fail!!";

}

      
}

?>