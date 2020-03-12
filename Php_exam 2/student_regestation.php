<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
     <section>
         <div class="container">
              <div class="row">
                  <div class="col-md-6">
                         <form method="post" action="student_store.php">
                             <h1 class="text-primary text-center">Student Regestation Form</h1>
                             <div class="form-group">
                                <label for="n1">Name:</label>
                                <input class="form-control" type="text" id="n1" name="namefld">
                             </div>

                             <div class="form-group">
                                <label for="n2">Email:</label>
                                <input class="form-control" type="email" id="n2" name="emailfld">
                             </div>

                             <div class="form-group">
                                <label for="n3">Roll</label>
                                <input class="form-control" type="text" id="n3" name="rollfld">
                             </div>
                             <div class="form-group">
                               <label for="n4">Phone</label>
                                <input class="form-control" type="text" id="n4" name="phonefld">
                             </div>
                             <div class="form-group">
                               <label for="n5">Address:</label>
                                <textarea class="form-control" name="addrfld"></textarea>
                             </div>
                             <div class="form-group">
                                  <input  class="btn btn-primary" type="submit" value="Submit">
                                  <span class="text-danger">
                                       <?php
                                          if(isset($_REQUEST['msq'])){
                                              echo $_REQUEST['msq'];
                                          }
                                       ?>
                                </span>
                            </div>                         
                         </form>
                  </div>
              </div>
         </div>
     </section>
   <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
   <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="dist/lib/bootstrap/js/popper.min.js"></script>
    
</body>
</html>