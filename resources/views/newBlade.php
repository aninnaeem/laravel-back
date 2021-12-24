
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Prescription List</h2>

<table style="width:100%">
  <tr>
    <th>Prescription Date</th>
    <th>Patient Name</th>
    <th>Patient Age</th>
    <th>Diagnosis</th>
    <th>Medicine</th>
    <th>Next Visit Date</th>
    <th>Actions</th>
  </tr>
  @foreach($lists as $student)
  <tr>
    <td>{{$student['prescription_date']}}</td>
    <td>{{$student['patient_name']}}</td>
    <td>{{$student['patient_age']}}</td>
    <td>{{$student['diagonsis']}}</td>
    <td>{{$student['medicine']}}</td>
    <td>{{$student['next_visit_date']}}</td>
    <td><button class="mr-2">Edit</button> @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button></td>
  </tr>
  @endforeach
</table>

<p>To undestand the example better, we have added borders to the table.</p>

</body>
</html>