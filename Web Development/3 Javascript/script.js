	var totalTime = 0;
	var attempts = 0;
	function getRandomColor() {
			var letters = '0123456789ABCDEF'.split('');
			var color = '#';
			for (var i = 0; i < 6; i++ ) {
				color += letters[Math.floor(Math.random() * 16)];
				}
				return color;
	}
		
		
		var clickedTime;
		var createdTime;
		var reactionTime;
		
		function makeBox()
		{
			var time = Math.random() * 5000;
		
			setTimeout(function() {
				document.getElementById("box").style.backgroundColor = getRandomColor();
				if(Math.random()> 0.5)
				{
					document.getElementById("box").style.borderRadius = "50%";
				}
				else
				{
					document.getElementById("box").style.borderRadius = "0";
				}
				
				var top = Math.random() * 300;
				var left = Math.random() * 500;
				
				document.getElementById("box").style.top = top + "px";
				document.getElementById("box").style.left = left + "px";
				document.getElementById("box").style.display = "block";
				createdTime=Date.now();
			}, time);
		}
		
		makeBox();
		document.getElementById("box").onclick = function()
		{
			attempts++;
			clickedTime=Date.now();
			reactionTime = (clickedTime-createdTime)/1000;
			totalTime = totalTime + reactionTime;
			document.getElementById("time").innerHTML = reactionTime;
			document.getElementById("avgTime").innerHTML = (totalTime/attempts).toFixed(3);
			this.style.display = "none";
			makeBox();
		}