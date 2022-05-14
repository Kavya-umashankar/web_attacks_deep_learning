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

.switch {
  position: absolute;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


</style>
<body id="main">
  <div class=header>
<a href="home.html" ><h1 id="heading">CHASE<img class="logo" src=https://i0.wp.com/uponarriving.com/wp-content/uploads/2016/02/Chase-Logo.png   > </h1></a>
</div>
<form action='user.php' method="post">

    <div id="loginbox" class="container-fluid" style="margin-top: 2.5cm;">

    <div class="row">
        <div class="offset-4 col-4">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">Customer login</legend>
            <div class="control-group">
            
                <label class="control-label input-label" for="email"><i class="fa fa-envelope"></i>    E-mail :</label><br>
                    <input type="text" name="email" placeholder="abc@gmail.com" /><br><br>
                    <label class="control-label input-label" for="pass"><i class="fa fa-key"></i>    Password :</label><br>
                    <input type="password" name="password" /> <br><br>
                    
            
                    
                    <input class="btn btn-primary" type="submit" value="Submit"><br>
                    </form>
                    <div class="signup" >
                      New Customer?<a href="customerregister.html"> Click here to register</a>
                    </div>
            </div>
        </fieldset>
    </div>
</div>
    </div>

    </body>
    </html>
