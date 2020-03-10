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
           if(isset($_REQUEST['private_email'])&& isset($_REQUEST['private_pass'])){
               $email=$_REQUEST['private_email'];
               $pass=$_REQUEST['private_pass'];
               if(($email=="somanmia.cse@gmail.com") && ($pass=="12345678@")){
                    $encriptemail=md5(sha1($email));
                    setcookie("userlogin",$encriptemail,time()+(86400*3));
                    header('location:result.php');
               }else{
                   header('location:private.php?msq=Acess is Denied!!!');
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
<div class="private-title">
    <div class="container">
       
    </div>
</div>
<section class="private-dec">
    <div class="container">
        <div class="primary-dec">
            <h1><span class="primary">Who</span> we Are?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                 nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
        <div class="secondary-dec">
            <h1><span class="primary">What</span> we Do?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                 nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
    </div>
</section>
<!--Pivate profile----->
<section class="profile-section">
    <div class="contaier">
        <div class="profile">
            <img src="dist/images/logo/profile.png" alt="Profile">
            <form method="post" action="">
                <div class="form-group">
                      <label for="email">Email:</label><i class="fa fa-envelope"></i>
                      
                      <input class="form-control" required type="email" name="private_email" id="email">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label><i class="fa fa-key"></i>
                    <input class="form-control" required type="password" name="private_pass" id="for">
              </div>
              <input class="btn btn-primary" type="submit" value="Access">
               <h4 style="color:red;margin-top:15px">
                <?php
                  if(isset($_REQUEST['msq'])){
                      echo 'Access is Denied!!!';
                  }

               ?>
               </h4>
            </form>
        </div>
    </div>
</section>
  
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="dist/lib/bootstrap/js/popper.min.js"></script>
    <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
