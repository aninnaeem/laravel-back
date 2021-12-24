
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


</style>
<body>
 
<br>

<br>

<form method="post" action="{{url('/prescription')}}"><!-- <big><big>PRESCRIPTION Edit:<button><a href="/prescription" style="padding:10px;">Back to List</a></button> -->
  </form>
  <form method="post" action="{{ route('prescription.update', ($data->id)) }}">
<br>
  <div class="container">
  <big><div align="center"><big>PRESCRIPTION</div>
    <div align="center"><button><a href="/prescription" style="padding:10px; color: white;">Back to List</a></button></div>
  </big></big>
  <table width:="50%">
    <tbody>
       <tr>
        <td>Prescription date : <br>
        </td>
        <td><input value="{{ $data->prescription_date }}" name="prescription_date" type="date" style="width: 400px;"  required ><br>
        </td>
      </tr>
    <tr>
        <td>Patient Name : <br>
        </td>
        <td><input value="{{ $data->patient_name }}" name="patient_name" type="text" required><br>
        </td>
      </tr>
      <tr>
        <td>Patient Age : <br>
        </td>
        <td ><input value="{{ $data->patient_age }}" name="patient_age" type="number" min="1" max="100" style="width: 400px;" required><br>
        </td>
      </tr>
      <tr>
        <td>Gender : <br>
        </td>
        <td required>
          <select name="gender" id="cars">
            <option value="{{$data->gender}}">{{$data->gender}}</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
 
  
        </td>
      </tr>
      <tr>
        <td>Medicine : <br>
        </td>
        <td><textarea value="" cols="30" rows="3" name="medicine" style="width: 400px;" required>{{ $data->medicine }}</textarea><br>
        </td>
      </tr>
      <tr>
        <td>Diagnosis : <br>
        </td>
        <td><textarea cols="30" rows="3" value="" name="diagonsis" style="width: 400px;"required>{{ $data->diagonsis }}</textarea><br>
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
        <td><input value="{{ $data->next_visit_date }}" name="next_visit_date" type="date" style="width: 400px;" required><br>
        </td>
      </tr>
    </tbody>
  </table>
</div>
 <!--  <table width:="50%">
    <tbody>
       <tr>
        <td>Prescription date : <br>
        </td>
        <td><input name="prescription_date" type="text" value="{{ $data->prescription_date }}"><br>
        </td>
      </tr>
    <tr>
        <td>Patient Name : <br>
        </td>
        <td><input name="patient_name" type="text" value="{{ $data->patient_name }}"><br>
        </td>
      </tr>
      <tr>
        <td>Patient Age : <br>
        </td>
        <td><input name="patient_age" type="text" value="{{ $data->patient_age }}"><br>
        </td>
      </tr>
      <tr>
        <td>Gender : <br>
        </td>
        <td><input name="gender" type="text" value="{{ $data->gender }}"><br>
        </td>
      </tr>
      <tr>
        <td>Medicine : <br>
        </td>
        <td><textarea cols="30" rows="3" name="medicine" value="">{{ $data->medicine }}</textarea><br>
        </td>
      </tr>
      <tr>
        <td>Diagnosis : <br>
        </td>
        <td><textarea cols="30" rows="3" name="diagonsis" value="">{{ $data->diagonsis }}</textarea><br>
        </td>
      </tr>
   
     <tr>
        <td>Next visit date : <br>
        </td>
        <td><input name="next_visit_date" type="text" value="{{$data->next_visit_date}}"><br>
        </td>
      </tr>
    </tbody>
  </table> -->
  <br>
  <br>
        {{ method_field("PUT") }}
        <button class="btn btn-danger btn-xs pull-left" type="submit"> Update</button>
      </form>

</body>
</html>