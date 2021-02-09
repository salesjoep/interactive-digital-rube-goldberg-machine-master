<!-- https://i876555.hera.fhict.nl/kickoff_OL/grp_001.php -->
<!DOCTYPE html>
<html>	
	<head>
		<script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>	
		<style>
			body{
				background-image:url('2rt4an0o3nv21.png');
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				width:200%;
			}
			.config{
				width:400px; 
				height:600px; 
				border:solid 5px black;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				margin:5px;
			}
			.url{
				display:inline-block;
				width: 405px;
				margin:7px;
				
			}
		</style>
	</head>	
	
	<body>
		
		<iframe class="config" src="https://i876555.hera.fhict.nl/kickoff_OL/grp_001.php" ></iframe>
		<iframe class="config" src="https://i876555.hera.fhict.nl/kickoff_OL/grp_002.php" ></iframe>
		<iframe class="config" src="https://i876555.hera.fhict.nl/kickoff_OL/grp_003.php" ></iframe>
		<iframe class="config" src="" ></iframe>
		
		<div>
			<div class="url" >example url group 1: <br> https://i876555.hera.fhict.nl/kickoff_OL/grp_001.php</div>
			<div class="url" >example url group 2: <br> https://i876555.hera.fhict.nl/kickoff_OL/grp_002.php</div>
			<div class="url" >example url group 3: <br> https://i876555.hera.fhict.nl/kickoff_OL/grp_003.php</div>
			<div class="url" >url group 4: <br> url needed!</div>
		</div>
		
		<div id="button-container">
			<button onclick='call_to_next_section(1);'>start</button>
			<button onclick='reload_RGM();'>reload</button>
		</div>
		
		<script>
			// Initialize Firebase
			var config = {
				apiKey: "AIzaSyBVzTcyAuEIi3XqHJfJ_Fu543lnqytDK9M",
				authDomain: "welgeen003.firebaseapp.com",
				databaseURL: "https://welgeen003.firebaseio.com",
				projectId: "welgeen003",
				storageBucket: "welgeen003.appspot.com",
				messagingSenderId: "1056729225262"
			};
			firebase.initializeApp(config);
			 
			function call_to_next_section(section){
				// Set firebase.database!
				firebase.database().ref('/chain/').set( {active_section: section} );
			}

			function reload_RGM(){
				// Set firebase.database!
				firebase.database().ref('/chain/').set( {active_section: "reload"} );
			}
		</script>
	</body> 
</html>
