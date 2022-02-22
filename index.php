<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
 
<?php include('header.php'); ?>
<body>
<style>
body{
    background:url("img/home.jpg");
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-size: 100% 120%;
        }
</style>
<div class="container" style = "position:relative; top:225px;">
	<div style="height:50px;">
	</div>
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel">
                <div class="panel-heading">
                    <h3 class="panel-title" style = "color:red;"><span class="glyphicon glyphicon-lock" style = "color:red;"></span> Login
                    	<span class="pull-right"><span class="glyphicon glyphicon-pencil" style ="color:red;"></span> <a style="text-decoration:none; cursor:pointer; color:red;" id="signup">Sign up</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="logform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="username" id="username" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="password" id="password" type="password">
                        	</div>
                        	<button type="button" id="loginbutton" class="btn btn-lg btn-block" ><span class="glyphicon glyphicon-log-in" style = "color:red;"></span> <span id="logtext" style= "color:red;">Login</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>
 
    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel">
                <div class="panel-heading">
                    <h3 class="panel-title" style = "color:red;"><span class="glyphicon glyphicon-pencil"  style = "color:red;"></span> Sign Up
                    	<span class="pull-right"><span class="glyphicon glyphicon-log-in"></span> <a style="text-decoration:none; cursor:pointer; color:red;" id="login">Login</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Username" name="susername" id="susername" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="spassword" id="spassword" type="password">
                        	</div>
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-dark btn-block"><span class="glyphicon glyphicon-check"  style = "color:red;"></span> <span id="signtext"  style = "color:red;">Sign Up</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>
 
    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
</div>
<script src="custom.js"></script>
</body>
</html>
	