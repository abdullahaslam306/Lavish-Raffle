
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	   <meta charset="UTF-8">
<link rel="icon" href="logo1.jpg" type="image/gif" sizes="50x50">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<style type="text/css">
	body{
		  background-image: url('back4.jpg');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;

		padding: 10px auto;
	margin: 0% auto;}
label{
	color:white;
	font-weight: bold;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">
    <img src="logo1.jpg" width="100" height="50" class="d-inline-block align-top" alt="" loading="lazy">
Lavish Raffles  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Configure <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">Raffle</a>
      </li>
    </ul>

  </div>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<div class="container" >
	
	
	<form action="index2.php" method="post" enctype="multipart/form-data" style="border:2px solid black; padding: 20px;     background: rgba(0, 0, 0, 0.5);
">
<h2 style="color:white; font-weight: bold;"> Configuration Form</h2>
		<div class="form-row">
    <div class="col-md-12 mb-12">
     
      <label for="validationCustom01">Title :</label>
      <input type="text" name="title" placeholder="Enter Title of the Raffle" class="form-control" id="title" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
   <br>
    <div class="form-row">
    	<div class="col-md-12 mb-12">
     <img src="download.png" class="rounded mx-auto d-block" style="width: 300px; height: 250px;" id="output">
     </div>
  
    </div>
    <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationCustom04">Choose Image</label>
      <input type="file" id="file" accept="image/*"  onchange="loadFile(event)" class="form-control" name="img"  required>
      
      <div class="invalid-feedback">
        Please select a valid Type.
      </div>
    </div>
</div>
    <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationCustom04">Choose Excel File</label>
      <input type="file" id="Excelfile" accept=".xlsx, .xls, .csv"  class="form-control" name="excel"  required>
      
      <div class="invalid-feedback">
        Please select a valid Type.
      </div>
    </div>
</div>
    <br>
    <button type="Submit" class="btn btn-success" name="add">Continue</button>
    
 
  

	</form>


</div>

<script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
<script type="text/javascript">

</script>