<?php 
session_start();
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
$title = "Mainstream vs. Fringe";
include_once 'templates/header.php';
$conn = include('config.php'); 
?>
<title>Legit Map Overlay</title>

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
<div class='wrapper'>
    <div class="container">
        <div class="jumbotron bg-danger bg-gradient-secondary">
            <div class="container">
                <h1 class="display-4 text-white" >Legit vs. Illegit Comparisons</h1>
                <p class="lead text-white">Data science applied to identifying the bad actors 
                in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
                </p>
                <p class="lead text-white">           
                </p>
            </div>
        </div>
    </div>
        <!-- end of jumbotron -->


    <div class="container">
        <div class="row" style='margin-bottom: -20px;'>
            <div class="col-md-12 align-self ">
                
                <!-- <div class="card card mb-3 border-0"> -->
                    <h2>Permeating San Diego: Illicit Locations Mapped</h2>
                    
                    <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                    no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                    Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                    Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                    vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                    sed. At per alii prompta, nominavi necessitatibus est ea.</p>
            </div>
        </div>


    <div class="row">   
        <!-- <div class="col-md-12 "> -->
        <!-- <div class="container"> -->

            <div class="col-md-12 " id="display" style="height: 600px; margin-top: 20px; width: 95%;" >
                <?php include('html_inclusions/yelp_plotly_map.php'); ?>
            </div>
        <!-- </div>  -->

    <!-- </div> -->

    
    </div> 
    <!-- end of row -->
    <div class="row" style='margin-bottom: -20px;'>
            <div class="col-md-12 align-self ">
                
                <!-- <div class="card card mb-3 border-0"> -->
                    <h2> Illicit Locations Filtered and Mapped</h2>
                    
                    <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                    no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                    Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                    Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                    vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                    sed. At per alii prompta, nominavi necessitatibus est ea.</p>
            </div>
        </div>


    <div class="row">   
        <!-- <div class="col-md-12 "> -->
        <!-- <div class="container"> -->

            <div class="col-md-12 " id="display" style="height: 600px; margin-top: 20px; width: 95%;" >
                <?php include('html_inclusions/yelp_plotly_map_filtered.php'); ?>
            </div>
        <!-- </div>  -->

    <!-- </div> -->

    
    </div> 
    <!-- end of row -->

    </div> 
    <!-- end of container -->
</div>
<!-- end of wrapper -->


<?php

include_once 'templates/footer.php';

?>