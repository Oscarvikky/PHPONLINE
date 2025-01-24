<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQ3kfxNc34PpSmivN+GGfBbx5xkmFcbvpCykMEeDfYXAe3sBzBO1dQyjn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pfI2z3STio1K9KcEY31eKkNEXpIoTIYEn2lH6sPhhExP54LeXACtxoS8QWfvtPkz" crossorigin="anonymous"></script>  
</head>
<body>
  
         <div class="card mx-auto py-2 my-4 col-6">
         <?php
      session_start();
      if(isset($_SESSION['message'])){
       echo "<div class='text-danger'>" . $_SESSION['message'] . "</div>";
      }
    ?>

           <form action="index.php" method="post">
       <div class="form-group">
        <label for="">lastname</label>
        <input type="text" class="form-control" name="lastname" >
       </div>
       <div class="form-group">
        <label for="">firstname</label>
        <input type="text"  class="form-control" name=" firstname" >
       </div>
       <div class="form-group">
        <label for="">email</label>
        <input type="text"  class="form-control" name="email">
       </div>
       <div class="form-group">
        <label for=""> password</label>
        <input type="text"  class="form-control" name="password">
       </div>
      <div class="form-group">
        <button class="btn btn-primary my-3" name="submit"> submit</button>
      </div>
           </form>


         </div>
</body>
</html>