<?php 
session_start();
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
$title = "Illicit Massage Plot";
include_once 'templates/header.php';
$conn = include('config.php'); 

// echo 'connected to database';
	  
if(!$conn) //verify database connection
	
{
	die('cannot display quotes due to server error');
} //end of connection 

elseif($conn){
    // echo 'connected to database';
}

 
// Fetch the marker info from the database 
$result = $db->query("SELECT * FROM illicit_locations"); 
 
// Fetch the info-window data from the database 
$result2 = $db->query("SELECT * FROM illicit_locations"); 



  
  ?>
<!-- <!doctype html>
<html>

<head> -->
    <title>Map Rub USA</title>

    </style>

</head>
<body>

<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >Mapping Illicit Rubs Across the USA</h1>
            <p class="lead text-white">Data science applied to identifying the bad actors in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
            </p>
            <p class="lead text-white">           
            </p>
        </div>
    <!-- end of jumbotron -->
    </div>
</div>

<div class="clearfix"><hr class="col-xs-12"> </div>
<!-- add dividing line -->


<div class= "container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h2>Permeating the USA: Illicit Locations Mapped</h2>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>


<!----- beginning of map formatting --->

    <div class="row">   


            <div class="col-md-12 " id="display" style="height: 600px; margin: -20px; padding: -20px; width: 110%;" >
                <?php include('html_inclusions/rubmaps_usa_plotly_map.php'); ?>
            </div>

    </div>


</div>





<?php
include 'templates/footer.php';
?>
