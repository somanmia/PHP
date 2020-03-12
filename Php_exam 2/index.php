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
                         <form method="post" action="store.php">
                             <h1 class="text-primary text-center">Please,Enter Number</h1>
                             <div class="form-group">
                                <label for="n1">First Number:</label>
                                <input class="form-control" type="text" id="n1" name="num1">
                             </div>

                             <div class="form-group">
                                <label for="n2">Second Number:</label>
                                <input class="form-control" type="text" id="n2" name="num2">
                             </div>

                             <div class="form-group">
                                <label for="n3">Second Number:</label>
                                <input class="form-control" type="text" id="n3" name="num3">
                             </div>
                             <div class="form-group">
                                 <input class="btn btn-primary" type="submit" value="Submit">
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