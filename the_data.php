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
    <title>The Data</title>
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

</head>
<body>

<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >The Data</h1>
            <p class="lead text-white">Data science applied to identifying the bad actors in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
            </p>
            <p class="lead text-white">           
            </p>
        </div>
    </div>
    <!-- end of jumbotron -->

<!---- beginning of table ----->

<div class="clearfix"><hr class="col-xs-12"> </div>
<!-- add dividing line -->


<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h2>The Data</h2>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 
<!-- end of permeating intro container -->


<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h2>More Data</h2>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 



<?php
include 'templates/footer.php';
?>
