



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CHRISTIAN HLABU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="stylesheet.css">

</head>

<body class="bg-primary">

  <div class="container">
    <div class="row mt-4" >
      <div class="col-md-8 mx-auto rounded p-4" style="background-color:#ffffff">
        <h5 class="text-center"><img src="./uploads/icons/logo_color.png" width="200" height="200">
        <hr class="my-1">
        <p class="text-center text-dark">A hnuai ah hla hmin ngan aw la hawl aw</p>
        <form action="chord/details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-primary width =250px;" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-right">
            </div>
          </div>
        </form>
      </div>
      <div class="col-8 mx-auto" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

<div class="container">
<div class="row mt-4" >
<div class="col-md-8 mx-auto rounded p-4" style="background-color:#ffffff">

</div>
</div>
</div>

<div class = "footer mt-4">
<?php require_once 'footer.php';?>
</div>