<html lang="en">
  <head>
  <title><?php echo $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- style the map-->
    <style>
        *  {
            margin: 0;
            padding: 0;
        }
        #mapCanvas{

            height: 600px;
            width: 100%;
        }
    </style>

    <script type="text/javascript" src="js/googlemap.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    

    <html lang="en">
  <head>
  <title><?php echo $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- style the map-->
    <style>
        *  {
            margin: 0;
            padding: 0;
        }
        #mapCanvas{

            height: 600px;
            width: 100%;
        }
    </style>

    <script type="text/javascript" src="js/googlemap.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>

<body>	
	
<header>
	<div class="topnav"> <!-- div ends at bottom of page/create class to overide some bootstrap if needed-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">			
			<a class="navbar-brand" href="#"><img src="resources/rosalia.png" class="img-responsive" height="40px" width="40px" alt="rose logo"/></a> <!--	logo -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button> <!--	toggle that appears smaller screen -->

	<div class="collapse navbar-collapse " id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href='index.php'>Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href='adwords.php'>Naughty Advertising</a>
            </li>
            <li class="nav-item">
				<a class="nav-link" href='leg_vs_il.php'>Legit Map Overlay</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href='rub_reviews.php'>Illicit Reviews</a>
            </li>
            <li class="nav-item">
				<a class="nav-link" href='rub_usa.php'>USA Mapped</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href='the_project.php'>The Project</a>
					<a class="dropdown-item" href='the_data.php'>The Data</a>
				</div> <!--	end of dropdown-menu -->		  
			</li>
		 </ul>
	 </div>   <!--	end of collapsable navbar content -->
</header>

