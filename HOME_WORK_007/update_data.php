<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/lib/bootstrap/css/flexboxgrid.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="form-section">
                    <h3 class="text-center text-primary">Student Registation Data Update</h3>
                     <?php
                       if(isset($_REQUEST['editid'])){
                        $updateid=$_REQUEST['editid'];
                         require_once('connect.php');
                         $query="SELECT* FROM users where id=$updateid";
                         $updatequery=mysqli_query($connect,$query);
                         

                       foreach($updatequery as $updatedata){
                          ?>
                        <form method="GET" action="update_core.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" required type="text" value="<?php echo $updatedata['Name'];?>" name="namefld" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" required type="email" value="<?php echo $updatedata['Email'];?>" name="emailfld" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" required type="number" value="<?php echo $updatedata['Phone'];?>" name="phonefld" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" name="msqfld" id="message"> <?php echo $updatedata['Address'];?></textarea>
                        </div>
                        <div>
                          <input type="hidden" name="idfld" value="<?php  echo $_REQUEST['editid'] ?>;"/>
                        </div>
                        <div class="form-group">
                           
                            <input class="btn btn-primary" type="submit" name="submit" value="Update">
                            
                        </div>
                    </form>
  
                       <?php  }
                       }
                     ?>
                </div>
            </div>
        </div>
    </section>
   
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/lib/bootstrap/js/popper.min.js"></script>
</body>
</html>