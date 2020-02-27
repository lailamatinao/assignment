<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel= "stylesheet" href="style.css">
    <title>Registration</title>
</head>

<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 lai ">
      <form action="output.php" method="post">
        <form ><h4 class="text secondary"> Registration Form </h4>
        <hr class="mb-2">

      
                    <label for ="FirstName"> First Name</label>
                    <input class="form-control" type="text" name="FirstName" placeholder="First Name" required> <p> </p>

                    <label for ="LastName"> Last Name</label>
                    <input class="form-control" type="text" name="LastName" placeholder="Last Name" required> <p> </p>

                    <label for ="MiddleName"> Middle Name</label>
                    <input class="form-control" type="text" name="MiddleName" placeholder="Middle Name" required> <p> </p>

                    <label for ="Address"> Address</label>
                    <input class="form-control" type="text" name="Address" placeholder="Address" required> <p> </p>

                    <label for ="Date of Birth"> Date of Birth</label>
                    <input class="form-control" type="date" name="DateofBirth" placeholder="Date of Birth" required> <p> </p>

                    <label for ="Place of Birth"> Place of Birth</label>
                    <input class="form-control" type="text" name="PlaceofBirth" placeholder="Place of Birth" required> <p> </p>

                    Gender:<p></p>   <input type="radio" name="Gender" value="Female">Female
                              <input type="radio" name="Gender" value="Male">Male <p> </p>

                   <label for ="Guardian"> Guardian</label>
                   <input class="form-control" type="text" name="guardian" placeholder="Guardian" required> <p> </p>

                   <label for ="Contact Number"> Contact Number</label>
                   <input class="form-control" type="text" name="contactnumber" placeholder="e.g +639123456789" required><p> </p>

                   <label for ="Civil Status"> Civil Status</label>
                   <input class="form-control" type="text" name="civilstatus" placeholder="Civil Status"required><p> </p>

                   <label for ="Year Level"> Year Level</label>
                   <select class="form control" name="yearlevel" placeholder="Year Level">
                   <option>First Year</option>
                   <option>Second Year</option>
                   <option>Third Year</option>
                   <option>Fourth Year</option>
                   </select><p></p>


                   <label for ="Course"> Course</label>
                   <select name="Course" id="Course" placeholder="Course">
                   <option value="Information Technology"> Information Technology </option>
                   <option value="Technology Communication Management"> Technology Communication Management</option>
                   <option value="Computer Engineering"> Computer Engineering</option>
                   </select> <p></p>

                   <label for ="School Year"> School Year</label>
                    <input class="form-control" type="text" name="schoolyear" placeholder="School Year" required><p> </p>

                    <label for ="Email"> Email</label>
                    <input class="form-control" type="email" name="email" placeholder="@gmail.com" required><p> </p>
                    </hr class="mb-2">
                        <button type="submit" class="btn btn-secondary mb-2 form-control">
                            Submit
                        </button>
        
        
        
        
        
        </form>
      </div>
      <div class="col-md-4">
    </div> 
</div>
</body>
</html>