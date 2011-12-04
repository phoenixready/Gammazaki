<?php
<html>
	<head>
		<title>Gammazaki.com</title>
		<script src="js/jquery-1.7.1.min.js"/>
		<script type="text/javascript">
			var contentdiv = undefined;
			function kewltimez() {
				var fundiv = $("<div class='kewltext' style='position:absolute;left:50%;top:50%;sbackground-color:#1EB14C;padding:10px;'>Gammazaki.com</div>");
				fundiv.mouseover(function() {
					alert("LOL"!);
				});
				contentdiv.append(fundiv);
			}
			
			$(document).ready() {
				kewldiv = $("#contentzone");
				kewltimez();
			}
		</script>	
	</head>
	<body>
		<div id='contentzone' style='height:100%;width:100%;text-align:center;v-align:middle;'>
		
		</div>
	</body>
</html>
?>