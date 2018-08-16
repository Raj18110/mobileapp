<!DOCTYPE html>
<html>
<head>
<title>ucanapply</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->

<link href="css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/styles.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- Modal start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">Sign In</h2>
      </div>
      <form class="form-signin">
            <div class="modal-body">
             <span class="form-group">
					<label class="control-label">Email address</label>
                    <input type="text" class="form-control input-sm margin-bottom-10" placeholder="Email address">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control input-sm" placeholder="Password">
            </span>
       		<span class="pull-left">
	  		<label class="checkbox no-padding-left">
                <input type="checkbox" value="remember-me" class="marLT"> Remember me
            </label>
            </span>
            <span class="pull-right padding-top-10"><a href="#">Forget Password</a></span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-n pull-left" type="submit">Sign In</button>
            </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->

<!-- Start Top Nav -->
<div class="topnav" >
  <div class="container">
    <ul class="pull-right">
      <li><a class="topBtn btn btn-info marR5" href="#chPassModal" data-toggle="modal">Change Password</a></li>
      <li><a href="#myModal" class="topBtn btn btn-primary" data-toggle="modal">Sign In</a></li>
      <li><a class="topBtn btn btn-danger" href="#">Logout</a></li>
    </ul>
     
  </div>
</div>
<!-- End Top Nav --> 
<!-- Start Main Nav -->
<div class="navbar navbar-fixed-top">
  <div class="navbar-innerBhu">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 logoPan1"><img src="images/bhu-logo.jpg" width="280" height="70" alt="logo"></div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 logoPan2"><img src="images/bhu-logo.jpg" width="280" height="70" alt="logo"></div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 logoPan3"><img src="images/bhu-logo.jpg" width="280" height="70" alt="logo" class="pull-right"><br class="clearfix">
          <div class="punchLine"><span>Punchline goes here! oes here! Punchline goes here! Punchline goes here!</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb start here -->
  <div class="container">
    <ul class="breadcrumb breadcrumb-mainEx">
      <li class="text-infoEx">Welcome to Banaras Hindu University</li>
    </ul>
  </div>
  <!-- breadcrumb End here --> 
</div>
<!-- End Main Nav --> 
