<?php 
session_start();
    

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
$title = "Naughty Ad Words";
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

//$query = $dbh->prepare("SELECT * FROM ad_words ORDER BY id ASC");
$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
$query->bindParam(':frequency', $frequency);
$query->bindParam(':key_word', $key_word);
$query->bindParam(':id', $id);

if ($query->execute()) {
  $json=[];
  $json2=[];
  while ($row = $query->fetch(PDO::FETCH_ASSOC) )
    {
      extract($row);

      $json[]=$key_word;

    } 
  }

    $word_list = json_encode($json);
    $counts = json_encode($json2);

  
  ?>
<div class="container">
      <div class="jumbotron bg-danger bg-gradient-secondary">
          <div class="container">
              <h1 class="display-4 text-white" >Identifying Illicit Adwords</h1>
              <p class="lead text-white">Data science applied to identifying the bad actors in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
              </p>
              <p class="lead text-white">           
              </p>
          </div>
      </div>
</div>
<!-- end of jumbotron -->


<div class='container'>
      <!-- creating some space and a thin line -->
      <div class='col-md-6 col-md-offset-3'></div>
      <div class="clearfix"><hr class="col-xs-12"> </div>
      <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <h5>Rubratings ads </h5>
          <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
            no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
            Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
            Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
            vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
            sed. At per alii prompta, nominavi necessitatibus est ea.
          </p>
        </div>        
    </div>
</div>
<div class="container">
  

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/rubratings.png"  target="_blank">
          <img src="data_image/rubratings.png"  alt="meimin" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/rubrate_enter-opt.jpg"  target="_blank">
          <img src="data_image/rubrate_enter-opt.jpg"  alt="camtc" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="data_image/rubrat_sample-opt.jpg"  target="_blank">
          <img src="data_image/rubrat_sample-opt.jpg"  alt="sd biz" style="width:100%">
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

<div class='container'>
  <div class="row">

    
    <div class="col-md-12">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <h2>2400 Lines of Ads</h2>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
    </div>
    
  </div>
</div>

<div class='container'>
 <div class="row">
  <div class="col-md-1"></div>
      <div class="col-md-10">
            <div class="tableFixHead" id="myTable">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th>Illicit Ads: Line by Line</th>
                      </tr>
                  </thead> 

                            <?php
                            $query = $dbh->prepare("SELECT * FROM ad_lines ORDER BY id ASC");
                            //$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
                            $query->bindParam(':id', $id);
                            $query->bindParam(':ad_lines', $ad_lines);
                            //$query->bindParam(':key_word', $key_word);


                            if ($query->execute()) {

                            while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                            // var_dump($row['frequency']);

                              {
                                    echo '<tr>
                                
                                <td class="title">'.$row['ad_lines'].'</td>
                                
                                
                                ';
                                }//end of query
                                
                                //$dbh=NULL;

                                
                              
                              } else {
                                print '<p style="color: red;">Connection Error</p>';
                            }

                              ?>

                            </tr> 
                      </table>
                    </section>
                  <!-- </div> end of card  -->
                </div> <!-- end of table div -->
        </div> <!-- end of adlines table column  -->
                
    </div>   <!-- end of adlines table row -->

  </div>   <!-- end of table-->
  <div class="col-md-1"></div>
  </div>
</div>

<div class='container'>
      <!-- creating some space and a thin line -->
      <div class='col-md-6 col-md-offset-3'></div>
      <div class="clearfix"><hr class="col-xs-12"> </div>
      <div class='col-md-6 col-md-offset-3'></div>
</div>

  <div class="container">
      <div class="row">
    
          <div class="col-md-12">
            <h5>100 Word Cloud</h5>
            <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
              no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
              Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
              Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
              vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
              sed. At per alii prompta, nominavi necessitatibus est ea.
            </p>
          </div>        <!-- end of word cloud paragraph div -->
      
  </div>
</div>

<div class='container'>
      <!-- creating some space and a thin line -->
      <div class='col-md-6 col-md-offset-3'></div>
      <div class="clearfix"><hr class="col-xs-12"> </div>
      <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->
<div class='container'>
<div class='row'>
      <div class="col-md-8 float-left"> 
              <img src="resources/100_word_cloud.png" style="max-width:100%;
            height:auto;" class="float-left img-fluid" alt="Responsive image">
      </div>         <!-- end of word cloud image div -->



      <div class="col-md-4 float-right">
          <!-- <div class="card card mb-3 border-0"> -->
            <div class="tableFixHead" id="myTable" style="height:350px;">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th> Most Frequently Used</th>
                      </tr>
                  </thead> 
                
                
                  <!-- PHP TO POPULATE TOP 100 FREQUENT WORDS   -->
                                      <?php
                                      $query = $dbh->prepare("SELECT * FROM ad_words ORDER BY id ASC");
                                      //$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
                                      $query->bindParam(':id', $id);
                                      $query->bindParam(':frequency', $frequency);
                                      $query->bindParam(':key_word', $key_word);


                                      if ($query->execute()) {

                                      while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                                      // var_dump($row['frequency']);

                                        {
                                              echo '<tr>
                                        
                                          <td class="title">'.$row['key_word'].'</td>
                                          <td class="entry">'.$row['frequency'].'</td>	
                                          
                                          ';
                                          }//end of query
                                          
                                          //$dbh=NULL;

                                          
                                        
                                        } else {
                                          print '<p style="color: red;">Connection Error</p>';
                                      }



                                      ?>

                      </tr> 
                </table>
              </section>
            <!-- </div> end of card  -->
          </div> <!-- end of table div -->
        </div> <!-- end of 100 table column  -->
  </div> <!-- end of word association row -->
    
  </div> <!-- end of word cloud row  -->


<!-- creating some space and a thin line -->
<div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>

<div class='container'>
  <div class="row"> 
        <div class="col-md-12 ">                
                <h5>The top 15 illicit ad words</h5>
                        <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                        no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                        Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                        Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                        vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                        sed. At per alii prompta, nominavi necessitatibus est
                        </p>
          </div> <!-- end of pie chart text paragraph div  -->
  </div>  <!-- end of pie chart description paragraph row  -->
</div> 






<?php
include 'templates/footer.php';
?>
