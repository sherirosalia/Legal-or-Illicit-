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
    <title>Illicit Establishment Map</title>
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
            <h1 class="display-4 text-white" >Identifying Illicit Locations</h1>
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
                <h2>Permeating San Diego: Illicit Locations Mapped</h2>
                
                <p>Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, 
                no duis molestiae vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an.
                Summo abhorreant in his, ea habeo ullum conclusionemque sed. At per alii prompta, nominavi necessitatibus est ea.
                Lorem ipsum dolor sit amet, vel ei malorum aliquid veritus, sed an nisl accusamus, no duis molestiae 
                vim. Ut amet tation vis, sit in dolore sapientem, elitr argumentum vim an. Summo abhorreant in his, ea habeo ullum conclusionemque 
                sed. At per alii prompta, nominavi necessitatibus est ea.</p>
        </div>
    </div>
</div> 
<!-- end of permeating sd container -->

<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!----- beginning of map formatting --->
<div class="container">

    <div class="row">   

        <div class="col-md-12 ">

            <h3>Illicit Establishment Map</h3>

            <!-- beginning of creating space -->
            <div class='container'>
                <!-- creating some space and a thin line -->
                <div class='col-md-6 col-md-offset-3'></div>
                <!-- <div class="clearfix"><hr class="col-xs-12"> </div> -->
                <div class='col-md-6 col-md-offset-3'></div>
            </div>
            <!-- end of creating space -->

            <div id="map"></div>

        </div>
    </div>
</div>	

<div class="container">
    
    <div id="mapCanvas"></div>

</div>


<!-- beginning of creating space -->
<div class='container'>
    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>
</div>
<!-- end of creating space -->

<!-- beginning of table heading -->

<div class="container">
    <div class="row">

        <div class="col-md-12 align-self ">
            
            <!-- <div class="card card mb-3 border-0"> -->
                <h2>Table of locations</h2>
                
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

        <div class="col-md-12 ">
            <!-- <div class="card card mb-3 border-0"> -->
                <div class="tableFixHead" id="myTable">
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
                </div> <!-- end of adlines table column  -->
                    
            </div>   <!-- end of illicit locations table row -->

        </div>
    </div>


    <!-- creating some space and a thin line -->
    <div class='col-md-6 col-md-offset-3'></div>
    <div class="clearfix"><hr class="col-xs-12"> </div>
    <div class='col-md-6 col-md-offset-3'></div>

<!-- 
    </div> -->


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
                    '<h4><?php echo htmlentities($row['Name']); ?></h4>' +
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
    


<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">;

</script>




<?php
include 'templates/footer.php';
?>
