<!DOCTYPE html>
<html>	
	<head>		
		<script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>
		<script src="script.js"></script>
		<style>
			body{
				margin:0px;
				overflow:hidden;
				background-color: orange;
			}
			.motion{
				offset-path: path('M20,312 C150,150 200,0 200,580');
				animation: move 3000ms ease-in-out;
				animation-play-state: paused;
			}
			@keyframes move{
				0% {
					offset-distance: 0%;
				}
				100% {
					offset-distance: 100%;
				}
			}
		</style>
	</head>	
	
	<body>
	
		<svg height="600" width="400">
			<circle class="motion" id="motion-demo" cx="0" cy="0" r="20" stroke="black" stroke-width="3" fill="blue" />
			<line x1="0" y1="385" x2="80" y2="265" style="stroke:black;stroke-width:4" />
		</svg>
		

		<script>
			var element = document.getElementById("motion-demo");
			var section = 3;
			function start() {
				element.style.animationPlayState="running";
			}
			function listener(event) {
				if (event.type =="animationend") {
					//alert("last section: endpoint animation no request to FIREBASE");
					element.style.animationPlayState = "paused";
				
				}
			}
			element.addEventListener("animationend", listener, false);
		</script>
		
	</body>
</html>
