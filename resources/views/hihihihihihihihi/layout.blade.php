<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="wrap">
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="/img/logo.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="">Home</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Servers</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Giveaway</a></li>
                <li><a href="#">Donate</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container">
            <div class="maincontent">
                <div class="row">
                    @section('content')
                    @show
                </div>
            </div>
        </div>

        <div class="pushfooter"></div>
    </div>

    <div class="footer">
        <p class="text-center">
            <strong>&copy;2015 Copyright Horizon Servers, All Rights Reserved</strong>
        </p>
    </div>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
