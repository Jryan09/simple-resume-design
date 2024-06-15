<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <title>resume</title>
</head>
<body >
     <video autoplay  muted loop id="video" src="pexels-anna-tarazevich-6550972.mp4" type="video/mp4"></video>
<center>
   <img class="img1" src="15062e08233d5acd27f756342d50b042.gif" >
<h2>RESUME</h2>
     <form  name ="myResume" action="idex.php" onsubmit="return validateForm()" method="post" required>
<table  border="1" width = "25%" height="200">
<tr><td colspan="5" align="center" class = "personinfo">PERSONAL INFORMATION</td> </tr>
    <tr>
        <td class="FNAME">fNAME:</td>
        <td ><input type="text" name="fname" ></td>
    </tr>
    <tr>
        <td class="LNAME">lNAME:</td>
        <td><input type="text" name="lname" ></td>
    </tr>
    <tr>
        <td class="MNAME">mNAME:</td>
        <td><input type="text" name="mname" ></td>
    </tr>
    <tr>
        <td class="BDAY">bDay:</td>
        <td><input type="date" name="bday" ></td>
    </tr>
    <tr><td colspan="5" align="center" class = "personinfo">EDUCATION</td> </tr>
    <tr>
        <td class="BDAY">ELEMENTARY:</td>
        <td><input type="txt" name="elem" ></td>
    </tr>
    <tr>
        <td class="BDAY">HIGHSCHOOL:</td>
        <td><input type="txt" name="second" ></td>
    </tr>
    <tr>
        <td class="BDAY">TERTIARY:</td>
        <td><input type="txt" name="ter" ></td>
    </tr>
    <tr><td colspan="5" align="center" class = "personinfo">SKILLS</td> </tr>
    <tr>
        <td class="BDAY">softSKILL:</td>
        <td><input type="txt" name="Sskill" ></td>
    </tr>
    <tr>
        <td class="BDAY">hardSKILL:</td>
        <td><input type="txt" name="Hskill" ></td>
    </tr>
    <tr><td colspan="5" align="center"><input type="submit" name="save" value="save" class="submit" ></td> </tr>
   </form>
   <div id = "clock" onload="currentTime()"></div>
   <audio controls autoplay src="summer-surf-120252.mp3"></audio>
   </center> 
</body>
<script>
function validateForm() {
  var x = document.forms["myResume"]["fname"].value;
  if (x == "") {
    alert("fname must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["lname"].value;
  if (x == "") {
    alert("lname must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["mname"].value;
  if (x == "") {
    alert("mname must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["bday"].value;
  if (x == "") {
    alert("bday must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["elem"].value;
  if (x == "") {
    alert("elem must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["second"].value;
  if (x == "") {
    alert("second must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["ter"].value;
  if (x == "") {
    alert("ter must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["Sskill"].value;
  if (x == "") {
    alert("softskill must be filled out");
    return false;
  }
  var x = document.forms["myResume"]["Hskill"].value;
  if (x == "") {
    alert("hardskill must be filled out");
    return false;
  }
}
function currentTime(){
    let date = new Date(); 
  let hh = date.getHours();
let mm = date.getMinutes();
  let ss = date.getSeconds();
  let session = "AM";

  if(hh == 0){
      hh = 12;
  }
  if(hh > 12){
      hh = hh - 12;
      session = "PM";
   }
   hh = (hh < 10) ? "0" + hh : hh;
   mm = (mm < 10) ? "0" + mm : mm;
   ss = (ss < 10) ? "0" + ss : ss;
    
   let time = hh + ":" + mm + ":" + ss + " " + session;

  document.getElementById("clock").innerText = time; 
  let t = setTimeout(function(){ currentTime() }, 1000);
}
currentTime();
</script>
</html>