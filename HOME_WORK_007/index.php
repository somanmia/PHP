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

<?php
                         require_once('connect.php');
                         $query="SELECT* FROM users";
                         $runquery=mysqli_query($connect,$query);
                         
                        
 ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="form-section">
                    <h3 class="text-center text-primary">Student Registation Form</h3>
                    <form method="GET" action="store.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" required type="text" name="namefld" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" required type="email" name="emailfld" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" required type="number" name="phonefld" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" name="msqfld" id="message"></textarea>
                        </div>
                        <div class="form-group">
                           
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                            <span class="text-success">
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
    <!---Table Data Show----->
  <sectin>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                   <h1 class="text-center text-primary mb-4">Student Information</h1>
                   <h3 class="text-danger">
                   <?php
                     if(isset($_REQUEST['dltmsq'])){
                         echo $_REQUEST['dltmsq'];
                     }if(isset($_REQUEST['updatemsq'])){
                          echo $_REQUEST['updatemsq'];
                     }
                   ?>
                   </h3>
                   <table class="table table-bordered table-dark">
                         <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Message</th>
                              <th>Action</th>
                         </tr>
                       <?php
                        foreach($runquery as $mydata){
                        ?>
                      <tr>
                            <td><?php echo $mydata['id']; ?></td>
                            <td><?php echo $mydata['Name']; ?></td>
                            

                            <td><?php echo $mydata['Email']; ?></td>
                            <td><?php echo $mydata['Phone']; ?></td>
                            <td><?php echo $mydata['Address']; ?></td>
                            <td><a  class="btn btn-primary mr-2" href="update_data.php?editid=<?php echo $mydata['id'];?>">Edit</a> | <a class="btn btn-danger" href="delete_core.php?id=<?php echo $mydata['id'];?>">Delete</a> | <a  class="btn btn-success" href="">Show</a></td>
                        </tr>
                         <?php   }
                       
                       ?>
                   </table>
              </div>
          </div>
      </div>
  </sectin>
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/lib/bootstrap/js/popper.min.js"></script>
</body>
</html>