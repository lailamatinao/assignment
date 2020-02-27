<?php
   include_once ("validation.php");
  $firstName = $_POST['FirstName'];
  $lastName = $_POST['LastName'];
  $MiddleName = $_POST['MiddleName'];
  $Address = $_POST['Address'];
  $DateofBirth = $_POST['DateofBirth'];
  $PlaceofBirth = $_POST['PlaceofBirth'];
  $gender = $_POST['Gender'];
  $guardian = $_POST['guardian'];
  $contactnumber = $_POST['contactnumber'];
  $civilstatus= $_POST['civilstatus'];
  $yearlevel = $_POST['yearlevel'];
  $course = $_POST['Course'];
  $schoolyear = $_POST['schoolyear'];
  $email = $_POST['email'];

  echo "First Name:  ",$firstName,"<br>";
  echo "Last Name:  ",$lastName,"<br>";
  echo "Middle Name:  ",$MiddleName,"<br>";
  echo "Address:  ",$Address,"<br>";
  echo "Date of Birth:  ",date('m-d-Y',strtotime($DateofBirth)),"<br>";
  echo "Place of Birth:  ",$PlaceofBirth,"<br>";
  echo "Gender:  ",$gender,"<br>";
  echo "Guardian:  ",$guardian,"<br>";
  echo "Contact Number:  ",$contactnumber,"<br>";
  echo "Civil Status:  ",$civilstatus,"<br>";
  echo "Year Level:  ",$yearlevel,"<br>";
  echo "Course:  ",$course,"<br>";
  echo "School Year:  ",$schoolyear,"<br>";
  echo "Email:  ",$email,"<br>";


/* 1 */
if (notEmp($firstName) && notEmp($lastName) && notEmp($MiddleName) && notEmp($Address) && notEmp($PlaceofBirth) && notEmp($guardian) && notEmp($civilstatus) && notEmp($schoolyear) && notEmp($email)){
  echo "valid", "<br>";
}
else{
  echo "invalid", "<br>";
}

/* 2 */
if (shouldnotNum($firstName) && shouldnotNum($lastName) && shouldnotNum($MiddleName) &&shouldnotNum($Address) && shouldnotNum($PlaceofBirth) && shouldnotNum($guardian) && shouldnotNum($civilstatus) && shouldnotNum($email)){
  echo "valid", "<br>";
}
else{
  echo "invalid", "<br>";
}
/* 3 */
if (notSpecialChar($firstName) && notSpecialChar($lastName) && notSpecialChar($MiddleName) && notSpecialChar($Address) && notSpecialChar($PlaceofBirth) && notSpecialChar($guardian)  && notSpecialChar($civilstatus) && notSpecialChar($schoolyear) && notSpecialChar($email)){
  echo "valid", "<br>";
}
else{
  echo "invalid", "<br>";
}
/* 4 */
if (moreThan2($lastName) && moreThan2($firstName)){
  echo "valid", "<br>";
}
else{
  echo "invalid", "<br>";
}
/* 5 */
if (notags($lastName) && notags($firstName) && notags($MiddleName) && notags($Address) && notags($PlaceofBirth) && notags($guardian) && notags($civilstatus) && notags($schoolyear) && notags($email)){
 echo "valid", "<br>";
}
else{
  echo "invalid", "<br>"; 
}
/* 6 */
if (emailFormat($email)){
  echo "valid", "<br>";
}
else{
  echo "Invalid", "<br>";
}
/* 7 */
if (philpreffix($contactnumber)){
  echo "valid";
}
else{
  echo "invalid";
}












?>