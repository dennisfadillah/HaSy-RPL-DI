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
    <link rel="stylesheet" href="">
    <title>HaSy | Update Akun</title>
  </head>
  <body>
  <div class=" pb-5" style='background-color:#f49184;'>
    <div class="container">
        <center><h3 class="pt-5 pb-5" style="color:white">Account Setting</h3></center>
        <div class="row">
            <div class="col-sm-1">
                <img style="width:80px;height:80px;" src="https://merahputih.com/media/bc/dd/e3/bcdde3e5d477c0e99ba1b67ad0bfcf8d.jpg" class="rounded float-left" alt="...">
            </div>
            <div class="col">
                <h6 class="mt-3 pl-4" style="color:white">Lorem Ipsum maulana</h6>
            </div>
        </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
        <div class="col-sm-5 my-5 pt-5 border border-primary">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lorem Ipsum Maulanan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MaulanaLorem@gmail.com">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">telephone number</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="0821624511625">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="exampleCheck1">Address</label>
                    <input type="text" class="form-control" id="exampleCheck1" placeholder="Bandung">
                </div>
                <center><button type="submit" class="btn btn-primary btn-lg mt-5 mb-5 rounded-pill">Update</button></center>
            </form>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6  my-5 pt-5">
            <h5 class="mb-4">Shopping List</h5>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">item name </th>
                        <td>20 april</td>
                    </tr>
                    <tr>
                        <th scope="row">item name </th>
                        <td>20 april</td>
                 
                    </tr>
                    <tr>
                        <th scope="row">item name </th>
                        <td>20 april</td>
             
                    </tr>
                </tbody>
            </table>
            <h5 class="mb-4">Latest Transcacrion</h5>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Item name</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">item name </th>
                        <td>20 april</td>
                    </tr>
                    <tr>
                        <th scope="row">item name </th>
                        <td>20 april</td>
                 
                    </tr>
                    <tr>
                        <th scope="row">item name </th>
                        <td>20 april</td>
             
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
    
  
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>