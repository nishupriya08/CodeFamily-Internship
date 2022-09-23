<?php
  include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="main">
        <div class="register">
            <h2>Register here</h2>
            <form id="register" method="post">
                <label>First Name : </label>
                <br>
                <input type="text" name="fname" id="name" placeholder="Enter Your First Name">
                <br><br>
                <label>Last Name : </label>
                <br>
                <input type="text" name="lname" id="name" placeholder="Enter Your Last Name">
                <br><br>
                <label>Your Age :</label>
                <br>
                <input type="number" name="age" id="name" placeholder="How old are You?">
                <br><br>
                <label>Email : </label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter Your Valid Email">
                <br><br>
                <label>Gender : </label>
                <br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="male">
                &nbsp;
                <span id="male">Male</span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="female">
                &nbsp;
                <span id="female">Female</span>
                <br><br>
                <label>Known Language : </label>
                <br>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="lang" id="hindi">
                &nbsp;
                <span id="hindi">Hndi</span>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="lang" id="english">
                &nbsp;
                <span id="english">English</span>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="lang" id="urdu">
                &nbsp;
                <span id="urdu">Urdu</span>
                <br><br>
                <input type="submit" value="Submit" name="submit" id="submit">

            </form>
        </div>
    </div>
</body>
</html>
<?php
 if(isset($_POST["insert"]))
 {
     mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
     ?>
     <script type="text/javascript">
      window.location.href=window.location.href;
     </script>
     <?php
    
 }
 if(isset($_POST["delete"]))
 {
    mysqli_query($link,"delete from  table1 where firstname='$_POST[firstname]'");
    ?>
     <script type="text/javascript">
      window.location.href=window.location.href;
     </script>
     <?php
    
    
 }
 if(isset($_POST["update"]))
 {
    mysqli_query($link,"update table1 set firstname='$_POST[lastname]'where firstname='$_POST[firstname]'");
    ?>
     <script type="text/javascript">
      window.location.href=window.location.href;
     </script>
     <?php
    
   
 }