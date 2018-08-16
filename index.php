
imports: [
    ...
    RouterModule.forRoot(routes, { useHash: true })  // remove second argument
]

<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<base href="/parent">
  <head>

  


    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
          <title>Banaras Hindu University</title>
          <!-- Bootstrap -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
            <link href="css/styles.css" media="all" rel="stylesheet" type="text/css" />
              <link href="css/toaster.css" rel="stylesheet">
                <style>
                  a {
                  color: orange;
                  }
                </style>
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]><link href= "css/bootstrap-theme.css"rel= "stylesheet" >

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

 
              </head>

  <body ng-cloak="">
    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="topnav" >

    <div class="container">
    <ul class="pull-right">
      <li><a class="topBtn btn btn-info marR5" href="#chPassModal" data-toggle="modal">Change Password</a></li>
      <li><a href="#myModal" class="topBtn btn btn-primary" data-toggle="modal">Sign In</a></li>
      <li><a class="topBtn btn btn-danger" href="#">Logout</a></li>
    </ul>
  </div>
     
  </div>
    </div>


<?PHP

require_once('partials/headerpart2.php');
?>


    

<div>
      <div class="container" style="margin-top:0px;">
        <div data-ng-view="" id="ng-view" class="slide-animation"></div>

      </div>

    </body>
  <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
  <!-- Libs -->
  <script src="js/angular.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <script src="js/angular-animate.min.js" ></script>
  <script src="js/toaster.js"></script>

  <!--- Calling Section --->
  <script src="app/app.js"></script>
  <script src="app/data.js"></script>
  <script src="app/directives.js"></script>
  <script src="app/authCtrl.js"></script>
</html>
