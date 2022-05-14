<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
body{
  background-image: url('https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg');
  background-size: contain, cover;
  background-repeat: no-repeat;
  background-size: 100% 140%;
   background-color: rgb(220, 227, 230);
}
#heading{
    background-color: transparent;
    padding:30px 20px 30px 20px;
    color: white;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-style: oblique;
    letter-spacing: 1.5px;
    word-spacing: 4px;
    text-align: center;
}

.header {
  text-align: center;
  background: #1357a6;
  color: white;
  font-size: 30px;
}
.logo{
  width:50px;
   height:50px;
}
#head{
  color: white;
}

a:visited,link{
color: blue   ;
}


#Entertainment{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
#right{
  margin-left:0.5cm;
}
#right2{
  margin-left:23cm;
}
fieldset.scheduler-border {
    border: 1px double black;
    padding: 1.4em 1.4em 1.4em 1.4em;
    margin: 0 0 1.5em 0;
}

legend.scheduler-border {
    width:auto; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}
#loginbox{
  font-family: 'Times New Roman', Times, serif;
  font-size: larger;
}
.navbar-nav {
    flex-direction: row;
  }
  
  .nav-link1 {
    color:white;
    padding-right: .5rem !important;
    padding-left: .5rem !important;
  }
  
  /* Fixes dropdown menus placed on the right side */
  .ml-auto .dropdown-menu {
    left: auto !important;
    right: 0px;
  }

  li{
    color:white;
  }
</style>
<body id="main">
  <div class=header>
<a href="home.html" ><h1 id="heading">CHASE<img class="logo" src=https://i0.wp.com/uponarriving.com/wp-content/uploads/2016/02/Chase-Logo.png> </h1></a>
</div>
<nav class="navbar navbar-default" style="background: white; color:#1357a6">
  <div class="container-fluid">
    <div class="navbar-header">
     <h5> <a class="navbar-brand" href="transact.php">Transaction</a><h5>
    </div>
  </div>
</nav>
<?php 
 
//echo "Connected successfully<br>";
  $fname = $_POST['fname'];
  $tname = $_POST['tname'];
  $amt = $_POST['amt'];
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $name =$_SESSION['mail'];
    $data=$_GET['name'];
    $command = escapeshellcmd("python C:/xampp/htdocs/Onlinebank/xss.py \"$fname\" ");
    $a1 = shell_exec($command);
    $command = escapeshellcmd("python C:/xampp/htdocs/Onlinebank/xss.py \"$tname\" ");
    $a2 = shell_exec($command);
    $command = escapeshellcmd("python C:/xampp/htdocs/Onlinebank/xss.py \"$amt\" ");
    $a3 = shell_exec($command);
if (($a1 == 0) && ($a2==0) && ($a3==0))
{
    $con = mysqli_connect('localhost','root','','onlinebanking') or die('Unable To connect');

    $sql = "insert into transact (fnum,tnum,amt) values('$fname','$tname','$amt')";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_execute($stmt);

    mysqli_close($con);
}
else{
    ?> <script>
    alert('XSS alert..!! Please use valid data ,Else you will be blocked..!!');
    window.location.href='transact.php';
    </script>
    <?php
}
    // $command = escapeshellcmd('C:/final project/XSStest.py');
    // $output = shell_exec($command);
    // echo $output;
}
  ?>