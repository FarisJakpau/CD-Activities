<html>
<head>
	<title>Task 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="container-fluid" style="background-color: 34495e ;"> 
	<h2 style="color: white">Mission to Mars</h2>
</div>
<div class= "container-fluid">
	<div class="row">
		<div class="col-md-6" style="background-color: lavender">
			<div class="container-fluid" style="padding-bottom:15px ; padding-top: 15px ; background-color: ecf0f1">
				<button class="btn btn-info" style="float: right;" onclick="document.getElementById('add').style.display='block'">Add New</button>
			</div>
			<div class="container-fluid">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<td><small>Mission</small></td>
							<td><small>Launch Date</small></td>
							<td><small>Notes</small></td>
						</tr>
					</thead>
					<tbody id="data_table">

					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-6" style="background-color:ecf0f1">
			<div class="container-fluid">
				<p>Red Dragon</p>
			</div>
			<div class="container-fluid">
				<div class="container-fluid">
					<button class="btn btn-info" style="float: right;">Edit</button>
					<button class="btn btn-link" style="float: right;">Delete</button>
				</div>
				<table class="table table-condensed" id="table">
					<tr>
						<td> Launch Date :</td>
						<td id="date">Tarikh drpd JSON</td>
					</tr>
					<tr>
						<td>Short Notes :</td>
						<td id="note1"> Note from JSON</td>
					</tr>
					<tr>
						<td>Status :</td>
						<td>Status from JSON</td>
					</tr>
				</table>
				
				<div >
					<p>Description</p>
					<p>Before you begin, you'll need a JavaScript (web or Node.js) app to add Firebase to. If you don't have an app already, you can download one of our quickstart samples. If you are upgrading from a 2.x version of the Firebase SDK, see our upgrade guide for Web / Node.js to get started.

					If you are interested in using Node.js in privileged environments such as servers or serverless backends like Cloud Functions (as opposed to clients for end-user access like a Node.js desktop or IoT device), you should instead follow the instructions for setting up the Admin SDK.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="w3-modal" id="add">
	<div class="w3-modal-content w3-card-4 w4-animate-zoom" style="max-width: 600px">
		<div class="w3-center">
			<span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright w3-hover-red">X</span>
		</div>
		<div class="w3-container" style="padding-bottom: 19px">
			<div class="w3-section">
				<h4>Mission</h4>
				<input type="text" id="mission_ed">
				<h4>Launch Date</h4>
				<input type="text" id="date_ed">
				<h4>Note</h4>
				<input type="text" id="note_ed">
				<h4>Status</h4>
				<input type="text" id="status_ed">
				<h4>Description</h4>
				<input type="text" id="description_ed">
			</div>
			<button class="btn btn-info" style="float: right;" onclick="addnew()">Submit</button>
		</div>

	</div>
</div>

</body>
<script>
var modal = document.getElementById('add');

var data1 = {};
data1.firstname = "John";
data1.lastname  = "Snow";
var json = JSON.stringify(data1);

var da = {

	  date : "2011",
      description : "long text",
      mission : "Red Dragon",
      note : "lander",
      status : "Planned launch"
} 

var xml = new XMLHttpRequest();
xml.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		var obj = JSON.parse(this.responseText);
		obj.data.push(da);
		document.getElementById('note1').innerHTML = obj.data[3].date;
		console.log(obj);
	}
};

xml.open("GET","data.json");
xml.send();


function addnew(){
	var xxx = new XMLHttpRequest();

	xxx.onreadystatechange = function(){
		if(this.readyState == 4 && this.status =="201"){
			var ob  = JSON.parse(this.responseText);
			console.log(ob);
		}
	} 

	xxx.open("POST","lol.json",true);
	xxx.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
	xxx.send(json);
	
	console.log(json);
	modal.style.display = "none";
}

</script>
</html>