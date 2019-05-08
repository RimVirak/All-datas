<html>
	<head>
		<title>Edit 1 line of this page to make it work</title>
	</head>
	<body id='body'>
		<div id="studentsTable">Loading list of students...</div>

		<script>

			function getStudentsList()
			{
				var xmlhttp = new XMLHttpRequest();
				var url = "http://kratie.pnc.lan/laura.hennequin/ssl/web.service/all_students_json.php";
				xmlhttp.onreadystatechange = function() {
				    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				        var json = JSON.parse(xmlhttp.responseText);
				        displayTable(json);
				    }
				};
				xmlhttp.open("GET", url, true);
				xmlhttp.send();
			}

			function displayTable(json) {
			    var out = "<h1>List of students</h1><table><tr><th>Name</th><th>Province</th></tr>";
			    var i;
			    for(i = 0; i < json.length; i++) {
			        out += '<tr>';
			        out += '<td>' + json[i].name + '</td>';
			        out += '<td>' + json[i].city + '</td>';
			        out += '</tr>';
			    }
			    out += "</table>";
			    document.getElementById("studentsTable").innerHTML = out;
			}

			getStudentsList();

		</script>
	</body>
</html>


