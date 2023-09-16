<?php 
include 'dbconnect.php';
if(isset($_POST['login']))
{
    $sql=mysqli_query($conn,"select * from a_registration where email='".$_POST['email']."' and password='".$_POST['password']."'");
    $row=mysqli_fetch_assoc($sql);
    if($row['email']==$_POST['email'] and $row['password']==$_POST['password'])
    {
       $_SESSION['email']=$_POST['email'];
       $_SESSION['name']=$_POST['name'];

       header('location:em/add_emp.php');
    }
    else
    {
       echo "Login Failed";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <style type="text/css">
        .container
        {
           
            padding: 30px;

        }
        .info
        {
           background-image: url("service1.jpg");
            border-top-left-radius:5px;
            border-bottom-left-radius:5px; 
            padding: 40px;
          
            
        }
        .login
        {
            background-color: lightgray;
            border-top-right-radius:5px;
            border-bottom-right-radius:5px; 
            padding: 50px;
               


        }
        body
        {
          background-image: url("v1.jpg");
            background-repeat: no-repeat;
    background-size: cover;
    height: 700px;
        }
        button
        {
            border-top-left-radius:5px;
            border-bottom-right-radius:5px; 
        }
        label
        {
            color: black;
        }
        h1
        {
           color:whitesmoke;          
        }
    </style>
</head>
<body>
    <form action="login.php" class="form" method="POST">
    <br><br>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 info" align="center">
                    <h3><b></b></h3><br>
                    <h2><b><i>Employee Management System</i></b> </h1>
                                  
                </div>
                <div class="col-sm-6 login">
                    <form action="login.php" method="POST">
                      <!-- <center> <img src="logo.jpeg" width="100" height="100"></center> -->
                    <h2 align="center" style="color: black"><b>Log In</b></h2>
                    <div class="row" >
                        <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label>Email<span style="color: red">*</span></label>
                            <input type="text" name="email" class="form-control" required="">
                            </div>
                        <div class="col-sm-2"></div>
                    <br><br>
                       <br><br>
                        <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label>Passward<span style="color: red">*</span></label>
                            <input type="Password" name="password" class="form-control" required="">
                            </div>
                            <div class="col-sm-2"></div>
                   
                    <br> <br>
                    <br>
                    <br>
                    <div class="row" >
                       <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                         <center><button type="submit" name="login" class="btn btn-light" value="login" style="background-color:#4d79ff" >Login</button></center>
                        </div>
                         <!-- <div class="col-sm-5">
                         <center><a href="registration.php" >Create a new account</a></center>
                        </div> -->

                        <div class="col-sm-1"></div>

                       

                         <br>
                         <div class="col-sm-2"></div>
                            <!-- <div class="col-sm-8">
                        <center><a href="forgot.php" >Forgot Password</a></center>
                        </div> -->
                         <div class="col-sm-2"></div>
                         
                    </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>
</div>
</div>

    <div class="col-sm-2"></div>
</form>
</body>
</html>
