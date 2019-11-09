    <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hani - @yield('title')</title>

      
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



        <style>

     </style>
    </head>

<body>
	 @section('navbar')
            
    <div id="navv"class="container" style="background-color:#fff;color:#0091ea;">
            <nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<a class="navbar-brand mu-logo" href="#">
					<img style="width:50px;" src="{{ asset('images/logo1_white.png')}}" />
					<!--
					<img style="width:50px;" src="https://i.imgur.com/WsMp0uM.png" />
					-->
					<span>Islamic EA</span>
				</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fa fa-bars"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mu-navbar-nav">
                        <li class="nav-item"> <a id="nav_home" href="index.php">Home</a> </li>
                        <li class="nav-item"> <a id="nav_assessment" href="assessment.php">Assessment</a></li>
                        <li class="nav-item"> <a id="nav_library" href="#">Library</a></li>
                        <li class="nav-item" style=""> <a id="nav_queries" href="#">Queries</a></li>
                        
													<li class="nav-item dropdown"> <a class="dropdown-toggle" href="" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Your Panel</a>
									<a class="dropdown-item" href="#">Logout</a>
								</div>
							</li>
							                        <li class="nav-item"><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        @show
    </body>
    </html>