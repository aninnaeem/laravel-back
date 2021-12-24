<!DOCTYPE html>
<html>
<body>
<style type="text/css">
	#data {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#data td, #data th {
  border: 1px solid #ddd;
  padding: 8px;
}

#data tr:nth-child(even){background-color: #f2f2f2;}

#data tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}

h2 {
	text-align: center;
	text-transform: uppercase;
  	color: #4CAF50;
}
}
.button2 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
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
<h2>Data from REST API</h2><br>
<div align="center">
<button class="button2 button3" onclick="window.location.href='/'">Back to Home</button>
</div>
<br>

<table >
	<tr>
		<th>rxcui</th>
		<th>name</th>
		<th>tty</th>
		<th>id</th>
		<th>name</th>
        <th>url</th>
    </tr>
	<tbody id="data">
		
	</tbody>
</table>

<script>
	var myObj = {};

	fetch("https://rxnav.nlm.nih.gov/REST/interaction/interaction.json?rxcui=341248").then(
		res=>{
			res.json().then(
				data=>{
					this.myObj = data;
                    var temp = '';
					console.log("data",this.myObj);
					console.log("data",this.myObj.nlmDisclaimer);
					var finalarr = this.myObj.interactionTypeGroup[0].interactionType[0].interactionPair;
					finalarr.forEach((value)=>{
							console.log("value",value);
							value.interactionConcept.forEach((lastArrObj)=>{
                             console.log("lastArrObj",lastArrObj);
                              temp +="<tr>";
							temp +="<td>"+lastArrObj.minConceptItem.rxcui+"</td>";
							temp +="<td>"+lastArrObj.minConceptItem.name+"</td>";
							temp +="<td>"+lastArrObj.minConceptItem.tty+"</td>";
							temp +="<td>"+lastArrObj.sourceConceptItem.id+"</td>";
							temp +="<td>"+lastArrObj.sourceConceptItem.name+"</td>";
							temp +="<td>"+lastArrObj.sourceConceptItem.url+"</td></tr>";
							// temp +="<tr>";
							// </tr>";
							})
							
						}
						)

					
						document.getElementById("data").innerHTML = temp;
						
				}

				)
		}

		)


</script>
</body>


</html>