<?php
?>
<html>
	<head>
		<title>Gammazaki.com</title>
		<script src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript">
			var contentdiv = undefined;
			function kewltimez() {
				alert("KEWL");
				var fundiv = $("<div class='kewltext' style='position:absolute;left:50%;top:50%;border-radius:15px;background-color:#1EB14C;padding:10px;'>Gammazaki.com</div>");
				fundiv.mouseover(function() {
					var randX = Math.random() * contentdiv.width();
					var randY = Math.random() * contentdiv.height();
					fundiv.css("left", randX + "px");
					fundiv.css("top", randY + "px");
				});
				contentdiv.append(fundiv);
			}
			
			$(document).ready(function() {
				contentdiv = $("#contentzone");
				kewltimez();
			});
		</script>	
	</head>
	<body>
		<div id='contentzone' style='height:100%;width:100%;text-align:center;v-align:middle;'>
		
		</div>
	</body>
</html>

