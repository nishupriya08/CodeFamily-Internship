<?php
  include "connection.php";
  $id=$_GET["id"];
  $firstname="";
  $lastname="";
  $email="";
  $contact="";


  $res=mysqli_query($link,"select * from table1 whrer id=$id");
  while($row=mysqli_fetch_array($res))
  {
    $firstname=$row["firstname"];
    $latname=$row["lastname"];
    $email=$row["email"];
    $contact=$row["contact"];

  }
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Stacked form</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="pwd">firstname</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<? echo $firstname;?>">
    </div>
    <div class="form-group">
      <label for="pwd">lastname</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" value="<? echo $lastanme;?>">
    </div>
    <div class="form-group">
      <label for="pwd">email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<? echo $email;?>">
    </div>
    <div class="form-group">
      <label for="pwd">contact</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact" value="<? echo $contact;?>">
    </div>
    
   <button type="submit"  name="update" class="btn btn-primary">update</button>
    
  </form>
</div>
</div>
    
    </div>
</body>
<?php
if(isset($_POST["update"]))
 {
    mysqli_query($link,"update table1 set firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',contact='$_POST[contact]'where id=$id");
    ?>
     <script type="text/javascript">
      window.location=index.php;
     </script>
     <?php
}
</html>