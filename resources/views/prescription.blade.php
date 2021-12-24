<!-- <form action="{{url('/prescription')}}" method="post">
  <label for="fname">Prescription Date:</label>
  <input type="text" id="fname" name="prescription_date"><br><br>
  <label for="lname">Patient Name:</label>
  <input type="text" id="lname" name="patient_name"><br><br>
  <label for="lname">Patient Age:</label>
  <input type="text" id="lname" name="patient_age"><br><br>
  <label for="lname">Gender:</label>
  <input type="text" id="lname" name="gender"><br><br>
  <label for="lname">Diagnosis:</label>
  <input type="text" id="lname" name="diagonsis"><br><br>
  <label for="lname">Medicine:</label>
  <input type="text" id="lname" name="medicine"><br><br>
   <label for="lname">next_visit_date:</label>
  <input type="text" id="lname" name="next_visit_date"><br><br>
  <input type="submit" value="Submit">
 
</form> -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  <title></title>
  
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 200px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset] {
  width: 30%;
  background-color: #34dF56;
  color: white;
  padding: 14px 20px;
  margin: 8px 200px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.resetCss{
  width: 30%;
  background-color: darkred;
  color: white;
  padding: 14px 20px;
  margin: 8px 200px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=reset]:hover {
  background-color: #74b249;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.modal {
  background-color: #fefefe;
  margin: 5% auto 25% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 5px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

.container {
  padding: 16px;
}

button {
  background-color: #04AA6D;
  color: white;  
  border: none;
  cursor: pointer;
   height:50px;
    width:120px;}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

</style>
<body>
 
<br>

<br>

<form class="modal" method="post" action="{{url('/')}}" id='selectform'>
  <div class="container">
  <big><div align="center"><big>PRESCRIPTION</div>
    <div align="center"><button class="ml-2"><a href="/prescription" style="padding:10px; color: white;">Back to List</a></button><button class="button button3" onclick="window.location.href='/'">Back to Home</button></div>
  </big></big>
  <table width:="50%">
    <tbody>
       <tr>
        <td>Prescription date : <br>
        </td>
        <td><input name="prescription_date" type="date" style="width: 400px;"  required><br>
        </td>
      </tr>
    <tr>
        <td>Patient Name : <br>
        </td>
        <td><input name="patient_name" type="text" required><br>
        </td>
      </tr>
      <tr>
        <td>Patient Age : <br>
        </td>
        <td ><input name="patient_age" type="number" min="1" max="100" style="width: 400px;" required><br>
        </td>
      </tr>
      <tr>
        <td>Gender : <br>
        </td>
        <td required> 
          <select name="gender" >
            <option >--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
  
        </td>
      </tr>
      <tr>
        <td>Medicine : <br>
        </td>
        <td><textarea cols="30" rows="3" name="medicine" style="width: 400px;" required></textarea><br>
        </td>
      </tr>
      <tr>
        <td>Diagnosis : <br>
        </td>
        <td><textarea cols="30" rows="3" name="diagonsis" style="width: 400px;"required></textarea><br>
        </td>
      </tr>
    <!--   <tr>
        <td>Dosage : <br>
        </td>
        <td>
    <input name="dose" type="checkbox"> Morning<br>
        <input name="dose" type="checkbox"> Afternoon<br>
        <input name="dose" type="checkbox"> Night<br>
        </td>
      </tr> -->
    <!--   <tr>
        <td>Diagnosis :<br>
        </td>
        <td><textarea cols="30" rows="3" name="diagnosis"></textarea><br>
        </td>
      </tr> -->
     <tr>
        <td>Next visit date : <br>
        </td>
        <td><input name="next_visit_date" type="date" style="width: 400px;" required><br>
        </td>
      </tr>
    </tbody>
  </table>

  </div>

  <br>
  <br>
  <input name="submit" value="Generate Prescription" type="submit">
  <button onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;" class="resetCss">
    Reset
</button> 
<big><big><br>
  </big></big></form>

</body>
</html>