<!DOCTYPE html>
<html>	
	<head>		
		<script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>
		<script src="script.js"></script>
		<style>
			body{
				margin:0px;
				overflow:hidden;
				background-color: lightblue;
			}
			.motion{
				offset-path: path('M20,222 420,322');
				animation: move 1000ms ease-in;
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
			<line x1="0" y1="240" x2="400" y2="342" style="stroke:black;stroke-width:4" />
		</svg>
		
		
		<script>
		
			var element = document.getElementById("motion-demo");
			var section = 2;
			function start() {
				element.style.animationPlayState="running";
			}
			function listener(event) {
				if (event.type =="animationend") {
					//alert("endpoint animation request to FIREBASE. Start section " + (section+1));
					// End of this section and now is time to have a call to the next section;
					call_to_next_section(section+1);
				}
			}
			element.addEventListener("animationend", listener, false);
		</script>
		
	</body>
</html>
