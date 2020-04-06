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

 
// Fetch the marker info from the database 
$result = $db->query("SELECT * FROM illicit_locations"); 
 
// Fetch the info-window data from the database 
$result2 = $db->query("SELECT * FROM illicit_locations"); 



  
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
                <h5>Permeating San Diego: Illicit Massage Locations</h5>
                
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
<!-- end of permeating intro container -->



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
          <h5>Illicit Locations Reviewed and Mapped</h5>
                  <p>Rubmaps.....olestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                   Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                  Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                  vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                  sed. At per alii prompta, nominavi necessitatibus est ea.</p>
      </div>

        <div class="col-md-8 float-right" >
        
        <div id="mapCanvas" style="height: 450px;"></div>
                
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


<!-- beginning of table heading -->

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>Table of locations</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 ">
            <!-- <div class="card card mb-3 border-0"> -->
                <div class="tableFixHead" id="myTable" style="height:400px;">
                <section>
                    <table class="table table-hover table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Illicit Locations: Line by Line</th>
                        </tr>
                    </thead> 

                                <?php
                                $query = $dbh->prepare("SELECT * FROM illicit_locations ORDER BY id ASC");
                            
                                $query->bindParam(':id', $id);
                                $query->bindParam(':formatted_address', $formatted_address);
                            


                                if ($query->execute()) {

                                while ($row = $query->fetch(PDO::FETCH_ASSOC) )
                                // var_dump($row['frequency']);

                                {
                                        echo '<tr>
                                    
                                    <td class="title">'.$row['id'].'</td>
                                    <td class="title">'.$row['Name'].'</td>
                                    <td class="title">'.$row['formatted_address'].'</td>
                                    
                                    
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
                </div> <!-- end of  table column  -->
            <div class="col-md-1"></div>
                    
    </div>   <!-- end of illicit locations table row -->

</div>



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
                <h5>The Network</h5>
                
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

<!-- beginning advice table -->
<div class='container'>
<div class="row">

        <div class="col-md-12 align-self float-left">
              <h5>How They Advise Each Other</h5>
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                  Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.
                </p>
          </div>    <!-- end 100 paragraph -->      
     
<div class="row">
<div class="col-md-1"></div>
      <div class="col-md-10 float-right">
          <!-- <div class="card card mb-3 border-0"> -->
            <div class="" id="myTable">
              <section>
                <table class="table table-hover table table-striped ">
                  <thead class="thead-dark">
                      <tr>
                        <th>Rubmaps Tips</th>
                      </tr>
                  </thead> 
                
                
                  <!-- PHP TO POPULATE ADVICE COLUMS   -->
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
        </div> <!-- end of table column  -->
        <div class="col-md-1"></div>
  </div> <!-- end of word association row -->

</div>
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
                <h5>The Women</h5>
                
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




<!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
<!-- </div> -->


<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h5>Explore the Journey</h5>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 



<script>
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };
                        
        // Display a map on the web page
        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
        map.setTilt(50);

        
            
        // Multiple markers location, latitude, and longitude
        var markers = [
            <?php if($result->num_rows > 0){ 
                //$locations=array();
                while($row = $result->fetch_assoc()){ 
                    echo '["'.htmlentities($row['Name']).'", '.$row['latitude'].', '.$row['longitude'].', "'.htmlentities( $row['formatted_address']).'"],'; 
                } 
            } //var_dump($locations);
            ?>
        ];
                            
        // Info window content
        var infoWindowContent = [
            <?php if($result2->num_rows > 0){ 
                while($row = $result2->fetch_assoc()){ ?>
                    ['<div class="info_content">' +
                    '<h5><?php echo htmlentities($row['Name']); ?></h5>' +
                    '<p><?php echo htmlentities($row['formatted_address']); ?></p>' + '</div>'],
            <?php } 
            } 
            ?>
        ];
            
        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Place each marker on the map  
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                //icon: markers[i][3],
                title: markers[i][0]
            });
            
            // Add info window to marker    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);
        }

        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(11);
            google.maps.event.removeListener(boundsListener);
        });
    }

    // Load initialize function
    google.maps.event.addDomListener(window, 'load', initMap);
</script> 
    


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWX-p4fDBlWenHRMR7we4S5U62FjZl7Lo&callback=initMap">;

</script>




<?php
include 'templates/footer.php';
?>
