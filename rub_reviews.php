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
$query = $dbh->prepare("SELECT * FROM review_10 WHERE id BETWEEN 0 AND 10");
$query->bindParam(':frequency', $frequency);
$query->bindParam(':keyword', $keyword);
$query->bindParam(':id', $id);

if ($query->execute()) {
  $json=[];
  $json2=[];
  while ($row = $query->fetch(PDO::FETCH_ASSOC) )
    {
      extract($row);
      // $json[]=array_slice($key_word, 0, 10);
      // $json2[]=array_slice($frequency, 0, 10);
      $json[]=$keyword;
      $json2[]=(int)$frequency;
     
      
     
    } 
  }
    //echo json_encode($json);
    $word_list = json_encode($json);
    $counts = json_encode($json2);
    
    // echo $word_list . '<br>' . $counts;
  
  
  // echo json_encode($json2);
    // var_dump($json);
    // var_dump($json2);
  
  
  ?>
<div class="container">
    <div class="jumbotron bg-danger bg-gradient-secondary">
        <div class="container">
            <h1 class="display-4 text-white" >Illicit Locations Reviewed</h1>
            <p class="lead text-white">Data science applied to identifying the bad actors 
            in the illicit sex and human trafficking trade which seem to be increasingly operating from shadows of the spa industry.            
            </p>
            <p class="lead text-white">           
            </p>
        </div>
    </div>
    <!-- end of jumbotron -->

<!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-5">
          <a href="templates/word_cloud.php" class="text-muted"><h2>Rubmap Review Word Cloud</h2></a>
          <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
            no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
            Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
            Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
            vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
            sed. At per alii prompta, nominavi necessitatibus est ea.
          </p>
        </div>        <!-- end of word cloud paragraph div -->

        <div class="col-md-7 float-right"> 
                <img src="resources/rubmap_search.png" style="max-width:100%;
              height:auto;" class="float-right img-fluid" alt="Responsive image">
        </div>         <!-- end of word cloud image div -->
  
     </div> <!-- end of word cloud row  -->


<div class="clearfix"> <hr class="col-xs-12"></div>

<!-- add dividing line -->

<!-- beginning of top 100 word association table -->

  <div class="row">
        <div class="col-md-4 align-self float-left">
              <a href="templates/top_100_table.php" class="text-muted"><h2>Most Frequent 100</h2></a>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      
        

      <div class="col-md-8 float-right">
          <!-- <div class="card card mb-3 border-0"> -->
            <div class="" id="myTable">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th> Reviews from Rubmaps</th>
                      </tr>
                  </thead> 
                
                
                  <!-- PHP TO POPULATE TOP 100 FREQUENT WORDS   -->
                                      <?php
                                      $query = $dbh->prepare("SELECT * FROM rub_reviews ORDER BY id ASC");
                                      //$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
                                      $query->bindParam(':id', $id);
                                      $query->bindParam(':review', $review);



                                      if ($query->execute()) {

                                      while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                                      // var_dump($row['frequency']);

                                        {
                                              echo '<tr>
                                        
                                          <td class="title">'.$row['review'].'</td>
                                                                                  
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


<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->

   <div class="row"> 
        <div class="col-md align-self">                
                <!-- <div class="card card mb-3 border-0"> -->
                <a href="templates/pie_top_15_illicit_words.php" class="text-muted"> <h2>The top 15 illicit ad words.</h2></a>
                        <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                        no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                        Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                        Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                        vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                        sed. At per alii prompta, nominavi necessitatibus est
                        </p>
          </div> <!-- end of pie chart text paragraph div  -->
  </div>  <!-- end of pie chart description paragraph row  -->
    <div class="row"> 
        <div class="col-md"> 
        <!-- <div class="col-8 float-right"> -->
          <!-- <div class="card card mb-3 border-0"> -->
              <div id="canvas-holder" style="width:100%"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <canvas id="pieChart" style="display: block; height: 300x; width: 300px;"  class="chartjs-render-monitor"></canvas>
          <!-- </div> -->
        <!-- </div> -->



          
      </div>  <!-- end of pie chart row  -->


<div class="clearfix"><hr class="col-xs-12"> </div>
   <!-- add dividing line -->



 <div class="row">


      <div class="col-md-5 align-self float-left">
          
          <!-- <div class="card card mb-3 border-0"> -->
          <a href="templates/adlines.php"><h2>Top 10 Kewords</h2></a>
                  <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                  no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

      <div class="col-md-7 float-right">
          <!-- <div class="card card mb-3 border-0"> -->
            <div class="tableFixHead" id="myTable">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th>Most Popular Review Terms</th>
                      </tr>
                  </thead> 

                            <?php
                            $query = $dbh->prepare("SELECT * FROM review_10 ORDER BY frequency ASC");
                            //$query = $dbh->prepare("SELECT * FROM ad_words WHERE id BETWEEN 0 AND 15");
                            $query->bindParam(':id', $id);
                            $query->bindParam(':keyword', $keyword);
                            $query->bindParam(':frequency', $frequency);
                            //$query->bindParam(':key_word', $key_word);


                            if ($query->execute()) {

                            while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                            // var_dump($row['frequency']);

                              {
                                    echo '<tr>
                                
                                <td class="title">'.$row['keyword'].'</td>
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
              </div> <!-- end of reviews table column  -->
                
        </div>   <!-- end of reviews table row -->

</div>   <!-- end of main container-->

</div>   <!-- end of main container-->



   
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>
<script type="text/javascript"> 
let ctx = document.getElementById('pieChart').getContext('2d');
let chart = new Chart(ctx, {
    type: 'pie',
    

    
    data : {
    
    datasets: [{
        
        backgroundColor: [
              "#9933FF",
              "#CC00CC",
              "#99FF33",
              "#FF8000",
              "#E71f63",
              "#FF2400",
              "#66b2ff",
              "#CCE5FF",
              "#FF0000",
              "#ffb288",
              "#B22222",
              "#FF66B2",
              "#CC99FF",
              "#f0592b",
              "#46BFBD",
              "#a70000"
              
            ],
        data: <?php echo $counts; ?>,
        label:<?php echo $word_list; ?>,
        
    }],
    labels: <?php echo $word_list; ?>,
    // These labels appear in the legend and in the tooltips when hovering different arcs
    
},
options: {
  layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },

  title: {
                display: true,
                text: 'Top Fifteen Adwords',
                fontSize: 18,
                fontFamily: 'sans-serif',
                fontColor: '#666',
                fontStyle: 'bold',
                padding: 0,
                position: 'right',
                
            },

      responsive: true,
      
      legend: { 
      
        
        position: 'right',
        
        
    }
  }

});
     
</script>



<?php
include 'templates/footer.php';
?>
