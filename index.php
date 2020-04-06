<?php 
session_start();
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
$title = "Home Page";
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

 
// // Fetch the marker info from the database 
// $result = $db->query("SELECT * FROM illicit_locations"); 
 
// // Fetch the info-window data from the database 
// $result2 = $db->query("SELECT * FROM illicit_locations"); 



  
  ?>


<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >Identifying Illicit Locations</h1>
            <p class="lead text-white">Data science applied to identifying the bad actors in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
            </p>
            <p class="lead text-white">           
            </p>
        </div>
    </div>
    </div>
    <!-- end of jumbotron -->

    <!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <!-- <div class="clearfix"><hr class="col-xs-12"> </div> -->
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>Massage: multifaceted problem, and rotting from the inside out.</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 
</div> 
<!-- end of intro container -->
<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->



<div class="container">
<div class="row">


   <div class="col-md-5 align-self float-left">
       
       <!-- <div class="card card mb-3 border-0"> -->
       <h5>Massage, a not so happy ending.</h5>
       Almost half the massage locations on Yelp reviewed on a site associated with sexual human trafficking
               <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
               no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
               Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
               vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
               sed. At per alii prompta, nominavi necessitatibus est ea.</p>
   </div>

 <div class="col-md-7 float-right">
 
 <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=2109904317&amp;format=interactive"></iframe>

             

             
</div>   <!-- end of iframe -->
</div>   <!-- end of row -->
</div>   <!-- end of container -->



<div class="container">
    <div class="row">

        <div class="col-md-12 align-self">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>Yelp and Rubmaps massage establishments overlap map </h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

 <div class="row">
 

      <div class="col-md-12" id="display" style="height: 600px; width: 100%;">
        

        <?php include('html_inclusions/yelp_plotly_map_filtered.php'); ?>


      </div>

        <div class="col-md-1"></div>


           
            
        </div>   <!-- end of html div -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->

<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>



  <!-- end of creating space -->
  <div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
           
                <h5>Permeating San Diego: Sexual Massage Locations</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 
<!-- end of permeating container -->



<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->



<div class="container">
 <div class="row">


      <div class="col-md-4 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h5>Google Map of Rubmaps</h5>
                  <p>Rubmaps.....olestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

        <div class="col-md-8 float-right" >
        
        <div class="">

            <a href="rub_reviews.php"  target="_blank"><img src="data_image/google_map.jpg"  alt="google_map" style="width:100%"></a>
            <div class="caption">
                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            </div>
            </a>
        </div>


       
                
        </div>   <!-- end of iframe -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->
<!-- end of nationwide rubmaps display -->


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->



<div class="container">
 <div class="row">


      <div class="col-md-4 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h5>Nationwide rubmaps</h5>
                  <p>Rubmaps.....olestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

        <div class="col-md-8 float-right" >
        
        <div class="">

            <a href="html_inclusions/rubmaps_usa_plotly_map.php"  target="_blank"><img src="data_image/usa_rub.png"  alt="nationwide" style="width:100%"></a>
            <div class="caption">
                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            </div>
            </a>
        </div>


       
                
        </div>   <!-- end of iframe -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->
<!-- end of nationwide rubmaps display -->


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->


<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>The Network of guys who patronize the places</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

 <div class="row">
 

      <div class="col-md-12" id="display" style="height: 600px; width: 100%;">
        

        <?php include('html_inclusions/rubmaps_user_map.php'); ?>

      </div>

        <div class="col-md-1"></div>


           
            
        </div>   <!-- end of html div -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning meimin -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>A glimpse of human trafficking?</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      



<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>The Most Popular</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

 <div class="row">
 

      <div class="col-md-12" id="display" style="height: 600px; width: 100%;">
        

        <?php include('html_inclusions/locations_most_frequented_map.php'); ?>

      </div>

        <div class="col-md-1"></div>


           
            
        </div>   <!-- end of html div -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->

<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>The "Providers"</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

 <div class="row">
 

      <div class="col-md-12" id="display" style="height: 600px; width: 100%;">
        

        <?php include('html_inclusions/rubmaps_girls_map.php'); ?>

      </div>

        <div class="col-md-1"></div>


           
            
        </div>   <!-- end of html div -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->

<!-- beginning meimin -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>Rubratings and other sites</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      





<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>



<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning advice table -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>Not enough licenses to explain this many locations</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      

<!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<!-- end of Not enough licenses to go around -->


<div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h5>Business owners with massage licenses</h5>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>



    <div class="col-md-7 float-right">
    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=1550524911&amp;format=interactive"></iframe>

    </div>   <!-- end of iframe -->
 </div>   <!-- end of row -->
</div>   <!-- end of container -->

<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>


<div class="container">
    <div class="row">

        <div class="col-md-12 align-self">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>All Yelp Locations</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

 <div class="row">
 

      <div class="col-md-12" id="display" style="height: 600px; width: 100%;">
        

        <?php include('html_inclusions/yelp_plotly_map.php'); ?>


      </div>

        <div class="col-md-1"></div>


           
            
        </div>   <!-- end of html div -->
    </div>   <!-- end of row -->
</div>   <!-- end of total yelp vs 111 rub container -->

<div class="container">
<div class="row">


   <div class="col-md-5 align-self float-left">
       
       <!-- <div class="card card mb-3 border-0"> -->
       <h5>Total yelp locations</h5>
               <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
               no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
               Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
               vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
               sed. At per alii prompta, 
               nominavi necessitatibus est ea <a href = "https://www.amtamassage.org/infocenter/economic_industry-fact-sheet.html">Massage statistics</a></p>
   </div>

 <div class="col-md-7 float-right">
 
 <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=922016151&amp;format=interactive"></iframe>

             

             
</div>   <!-- end of iframe -->
</div>   <!-- end of row -->
</div>   <!-- end of container -->



<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning advice table -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>A profile of legitimate therapists</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.  <a href = "https://www.amtamassage.org/infocenter/economic_industry-fact-sheet.html" target="_blank">Massage statistics</a></p>

          </div>    <!-- end 100 paragraph -->      

<!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<div class="container">
 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h5>Mostly individual practitioners</h5>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

      <div class="col-md-7 float-right">
        <iframe width="600" height="371" seamless frameborder="0" scrolling="no" 
        src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=311304930&amp;format=interactive">
        </iframe>      
                
 </div>   <!-- end of iframe -->
 </div>   <!-- end of row -->
</div>   <!-- end of container -->


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning advice table -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>Why hasn't this been stopped?</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      



<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<div class="container">

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/police_camtc.png"  target="_blank">
          <img src="data_image/police_camtc.png"  alt="police statement" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/meimin.png" target="_blank">
          <img src="data_image/meimin.png"  alt="camtc" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/camtc_no_exam.png"  target="_blank">
          <img src="data_image/camtc_no_exam.png"  alt="sd biz" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning meimin -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>A glimpse of human trafficking?</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      



<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<div class="container">
  <h5>Chinese solicitation website: Meimin</h5>

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/osaka_619-299-7102.png"  target="_blank">
          <img src="data_image/osaka_619-299-7102.png"  alt="meimin" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/girl_recruitment.png"  target="_blank">
          <img src="data_image/girl_recruitment.png"  alt="camtc" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/meim_ding.png"  target="_blank">
          <img src="data_image/meim_ding.png"  alt="sd biz" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>



<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>


 <!-- add dividing line -->

 <div class="container">
 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h5>Chinese last names, rubmaps and meimen solicitation</h5>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

    <div class="col-md-7 float-right">
    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=1100102425&amp;format=interactive"></iframe>

                

                
        </div>   <!-- end of iframe -->
    </div>   <!-- end of row -->
</div>   <!-- end of container -->



<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- </div> -->




<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->


<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>Continuing the journey</h5>
                
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
