<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel= "stylesheet" href="style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration</title>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="card" style="width: 18rem;">
      <form action="upload.php" method="POST" enctype="multipart/form-data">
      <label for="title"><h5>Select Image to Upload</h5></label>
        <input type="file" name="files[]" multiple>
        <button type="submit" name="submit">
        <i class="fa fa-upload" aria-hidden="true"></i>

        upload</button>
    </form>


      </div>
    </div> 
</div>
</body>
</html>

    
      
  