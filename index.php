<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Life Supporter</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">

  
   
  <!-- Carousel Slider -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  

  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

 
  <script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/html5sql.js"></script>
	<script type="text/javascript"> 
            $(document).ready(function () {
                console.log("ready!");
                $("#add").click(function (e) {
                    e.preventDefault();
                    var name = $("#name").val();
                    var password = $("#password").val();
                    var dataString = 'name=' + name + '&password=' + password;
                    $.ajax({
                        type: 'POST',
                        data: dataString,
                        crossDomain: true,
//        url:'http://localhost/login/'
                        url: 'http://kanza.bluenyxstudios.com/database/signin_db.php',
						success: function(data){
        if(data == "success")
       window.location.href = "http://sitarahussain.com/lifeSupporter_v4/index.html";
        else
            alert(data);
    }             
                    });
                });
            });


        </script> 
   
         <script type="text/javascript"> 
$( document ).ready(function() {
    console.log( "ready!" );
	$("#adduser").click(function(e) {
		e.preventDefault();
  var name = $("#name").val(); 
  var age = $("#age").val();
  var gender = $("#gender").val(); 
  var password = $("#password").val();
   var email = $("#email").val();
 
  var dataString = 'name='+name+'&age='+age+'&gender='+gender+'&password='+password+'&email='+email;
  $.ajax({
    type:'POST',
    data:dataString,
	crossDomain: true,
    url:'http://kanza.bluenyxstudios.com/database/adduser_db.php',
    success:function(data) {
      alert(data);
	    window.location.href = "http://sitarahussain.com/lifeSupporter_v4/index.html";
    }
  });
	});
});


</script> 
		</head>
		<body>
		<div id="topbar" class="clearfix">
    	<div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
            </div><!-- end columns -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              
            	
            </div><!-- end columns -->
        </div><!-- end container -->
    </div><!-- end topbar -->
	<section class="post-wrapper-top jt-shadow clearfix">
		
	</section><!-- end post-wrapper-top -->
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Login Your Account</h3>
                            </div><!-- end title -->
                                <form id="loginform" method="post" name="loginform">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" id="name" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label> 
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
								
                                    <button type="submit" name="add" id="add" class="btn btn-primary">Sign in</button>
                                    </div>
                                </form>
                        </div><!-- end widget -->
					</div><!-- end col-md-6 -->
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Create An Account</h3>
                            </div><!-- end title -->
                                <form id="registerform" method="post" name="registerform">
                                    <div class="form-group">
                                        <input type="text" id="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="age" class="form-control" placeholder="age">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="gender" class="form-control" placeholder="Gender">
                                    </div>
									 <div class="form-group">
                                        <input type="email" id="email" class="form-control" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Re-enter password">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="adduser" id="adduser" class="btn btn-primary" value="Register an account">
                                    </div>
                                </form>
                        </div><!-- end widget -->
					</div><!-- end col-md-6 -->
            	</div><!-- end row --> 
            </div><!-- end content -->
    	</div><!-- end container -->
    </section><!--end white-wrapper -->

	


    
	
        
  <!-- Main Scripts-->
 
  <script type="text/javascript">
 
  </script>

  

  </body>
</html>
