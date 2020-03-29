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

<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >Establishment Comparisons</h1>
            <p class="lead text-white">Data science applied to identifying the bad actors in the illicit sex and human trafficking trade which seems to be increasingly operating from shadows of the spa industry.            
            </p>
            <p class="lead text-white">           
            </p>
        </div>
    </div>
    <!-- end of jumbotron -->


<!-- <div class="container"> -->
<div class="row">
        <div class="col-md-3">
          <a href="templates/word_cloud.php" class="text-muted"><h2>100 Word Cloud</h2></a>
          <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
            no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
            Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
            Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
            vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
            sed. At per alii prompta, nominavi necessitatibus est ea.
          </p>
        </div>        <!-- end of word cloud paragraph div -->

        <div class="col-md-9 float-right"> 
            <div id="display" class="myCustom1">
                <?php include('html_inclusions/yelp_plotly_map.php'); ?>
            </div>


              
        </div>         <!-- end of word map display div -->
  
     </div> <!-- end of word cloud row  -->


<div class="clearfix"> <hr class="col-xs-12"></div>

<?php

include_once 'templates/footer.php';

?>