<!DOCTYPE html>
<html>
<head>
  
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.one{float:left;}
.two{float:right;
  margin-top:15px ;

}
.two2{float:right;
  

}
tr:nth-child(even) {
  background-color: #dddddd;
}
button {
  background-color: #04AA6D;
  color: white;  
  border: none;
  cursor: pointer;
 
  
}

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
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

  <div class="w3-container">
    <div class="w3-panel w3-card">
      <div class="one"><h2>Prescription List</h2></div>
      <div class="two"><button><a href="/prescription-view" style="padding:10px;">ADD</a></button><button class="button button3" onclick="window.location.href='/'">Back to Home</button></div>

    </div>
  <table>
  <tr>
    <th style="width:10%">Prescription Date</th>
    <th style="width:15%">Patient Name</th>
    <th style="width:5%">Patient Age</th>
    <th style="width:10%">Gender</th>
    <th style="width:15%">Diagnosis</th>
    <th style="width:15%">Medicine</th>
    <th style="width:15%">Next Visit Date</th>
    <th style="width:10%">Actions</th>
    
    
  </tr>
    @foreach($lists as $student)
  <tr>
    <td>{{$student['prescription_date']}}</td>
    <td>{{$student['patient_name']}}</td>
    <td>{{$student['patient_age']}}</td>
    <td>{{$student['gender']}}</td>
    <td>{{$student['diagonsis']}}</td>
    <td>{{$student['medicine']}}</td>
    <td>{{$student['next_visit_date']}}</td>
    <td>
      <div class="one">
      <form method="post" action="{{ route('prescription.show', ($student->id)) }}">

        {{ method_field("GET") }}
        <button class="btn btn-danger btn-xs pull-left" >edit</button>
      </form>
    </div>
      <div class="two2">
       
      <form method="post" action="{{ route('prescription.destroy', ($student->id)) }}">

        {{ method_field("delete") }}
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" style="background-color: red !important;">delete</button>
       <!--  <button class="btn btn-danger btn-xs pull-left"  if="tttt"> delete</button> -->
      </form>
    </div>
    </td>

  </tr>
  @endforeach
  
</table>

 
</div>

</body>

</html>


