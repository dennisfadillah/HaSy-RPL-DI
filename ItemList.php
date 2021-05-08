<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="itemList.css">
    <title>HaSy | Admin Item List</title>
  </head>
  <body>
    
    <div class="sidebar">
      <h3 class="my-5 text-center">Admin</h3>
      <a class="active font-weight-bold" href="#home">Item List</a>
      <a href="#">Input & Update Item</a>

    </div>

    <div class="container">
      <div class="content">
        <h3 class="mt-3 font-weight-bold">Item List</h3>
        <table class="table mt-3">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Item Name</th>
              <th scope="col">Item Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php
              $data = $mysqli->query("SELECT * FROM `produk`");
              while ($row = $data->fetch_array()){
            ?>
          <tbody>
            <tr>
              <td><?php echo $row['nama']?></td>
                <td>Rp. <?php echo $row['harga']; ?></td>
                <td>
                  <button class="btn btn-primary">
                    Update
                  </button>
                  <button class="btn btn-danger">
                    Delete
                  </button>
              </td>
            </tr>
           
            
          </tbody>
          <?php
              }
            ?>
        </table>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>