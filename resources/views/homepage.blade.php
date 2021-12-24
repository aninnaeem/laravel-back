<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

.button {
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
h1 {
  text-align: center;
  text-transform: uppercase;
    color: #4CAF50;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
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

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>
</head>
<body style="font-family:Verdana; background-color:powderblue;">
<h1>Prescription Generation</h1><br>
<div align="center"><button onclick="window.location.href='/user-login'" class="button button1">Admin Login</button>
<button class="button button1" onclick="window.location.href='/restapishow'">REST API DATA LIST SHOW</button>
<button class="button button1" onclick="window.location.href='/client'">Client login (Validation)</button>
<button class="button button1" onclick="window.location.href='/prescription-json'">Prescription Rest API</button>
</div>






</body>
</html>

