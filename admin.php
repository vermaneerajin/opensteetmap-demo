<!DOCTYPE html>
<?php
require_once 'login.php';
include 'template/header_admin.php';
session_start();

if (isset($_SESSION['status'])) {
    echo '<div class="alert alert-primary" role="alert">
       ' . $_SESSION['status'] . '
    </div>';
    unset($_SESSION['status']);
}
?>

<!--Show form to add location-->

<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" action="addLocation.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="type">Type</label>
                <select name="type" class="form-control" id="type" required>
                  <option value="restaurant">Restaurant</option>
                  <option value="pub">Pub</option>
                  <option value="club">Club</option>
                </select>
              </div>
              <div class="form-group">
                <label for="rating">Rating</label>
                <select name="rating" class="form-control" id="rating" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="latitude">Latitute</label>
                <input type="text" required name="latitude" class="form-control" id="latitude" placeholder="Latitute">
              </div>
              <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" required name="longitude" class="form-control" id="longitude" placeholder="Longitude">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
