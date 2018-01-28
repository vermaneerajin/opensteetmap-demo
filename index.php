<?php
    include "template/header.php";
    include "connection.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <p>List of restaurant, pubs and clubs.</p>
                <br />
                <ul class="list-group">
                <?php
                    $query = "select * from locations order by id DESC";
                    $stmt = $dbh->prepare($query);
                    $stmt->execute();
                    $locations = $stmt->fetchAll();


                    foreach ($locations as $location) {
                        echo '<li class="list-group-item" data-name="' .$location["name"]. '" data-rating="' .$location["rating"]. '" data-latitude="' .$location['latitude']. '" data-longitude="' .$location['longitude']. '">' . $location["name"] . ' <small> ' .$location["type"]. '</small></li>';
                    }
                ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <div id="map-container">

                </div>
            </div>
        </div>
    </div>
<?php
    include "template/footer.php";
?>
