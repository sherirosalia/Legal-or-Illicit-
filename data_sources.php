<?php 
session_start();
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
$title = "Data Sources";
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


  
  ?>


<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >Data Sources</h1>
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
                <h2>Data Wranglings</h2>
                
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


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h3>Rubmaps</h3>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. .</p>
      </div>

    <div class="col-md-7 float-right">

        <img src="data_image/usa_rub.png" width="600" height="371"; margin-left:-15px;" />
     
                
 </div>   <!-- end of iframe -->
 </div>   <!-- end of row -->
</div>   <!-- end of container -->

<div class="clearfix"><hr class="col-xs-12"> </div>
<!-- add dividing line -->

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h4>The following graphs</h4>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 







<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->






   <div class="container">
  <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/usa_rub.png"  target="_blank">
          <img src="data_image/usa_rub.png"  alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/usa_rub.png"  target="_blank">
          <img src="data_image/usa_rub.png"  alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/usa_rub.png"  target="_blank">
          <img src="data_image/usa_rub.png"  alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>



<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">

        <iframe frameborder="0" scrolling="no" width="100%" height="100%"
        src="data_image/usa_rub.png" name="imgbox" id="imgbox">
        <p>iframes are not supported by your browser.</p>
        </iframe><br />

        <a href="data_image/usa_rub.png" target="imgbox">Red Ball</a><br />
        <a href="data_image/usa_rub.png" target="imgbox">Floating Ball</a><br />
        <a href="data_image/usa_rub.png" target="imgbox">Eight Ball</a>
    </div>
<div class="col-md-2"></div>

<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->

<div class="container">
    <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h4>Biz graph 1</h4>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

    <div class="col-md-7 float-right">
    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=1612738273&amp;format=interactive"></iframe>
                
 </div>   <!-- end of iframe -->
 </div>   <!-- end of row -->
</div>   <!-- end of container -->

<div class="clearfix"><hr class="col-xs-12"> </div>

<!-- add dividing line -->

<div class="container">
<div class="row">


   <div class="col-md-5 align-self float-left">
       
       <!-- <div class="card card mb-3 border-0"> -->
       <h4>Biz graph 2</h4>
               <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
               no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
               Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
               vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
               sed. At per alii prompta, nominavi necessitatibus est ea.</p>
   </div>

 <div class="col-md-7 float-right">
 
 <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=922016151&amp;format=interactive"></iframe>

             

             
</div>   <!-- end of iframe -->
</div>   <!-- end of row -->
</div>   <!-- end of container -->

<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->

   <div class="container">
 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h4>Biz graph 3</h4>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

      <div class="col-md-7 float-right">
      <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTuchWV6hZLsOyoenOPfGuU_i7q5pVgSrsErhVinqVS9kmapKorFIoeh8TjNqB2isiZ2D7SasHFERa/pubchart?oid=1150387910&amp;format=interactive"></iframe>
        
                
 </div>   <!-- end of iframe -->
 </div>   <!-- end of row -->
</div>   <!-- end of container -->

<div class="clearfix"><hr class="col-xs-12"> </div>

<!-- add dividing line -->

<div class="container">
<div class="row">


   <div class="col-md-5 align-self float-left">
       
       <!-- <div class="card card mb-3 border-0"> -->
       <h4>Biz graph 2</h4>
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


<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->

   <div class="container">
 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h4>Biz graph 4</h4>
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


    <div class="clearfix"><hr class="col-xs-12"> </div>

   <!-- add dividing line -->

<div class="container">
 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h4>Biz graph 5</h4>
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



<?php
include 'templates/footer.php';
?>