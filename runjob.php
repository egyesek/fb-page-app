<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="egyesekscript.js"></script>
        <link rel="stylesheet" href="style.css"/>        
		<script>
$(document).ready(function() {
    $.getJSON("http://egyesekscript.php", function(adatok) {
		
		var data = { data: JSON.stringify( adatok ) };
		$.ajax({
			type: "POST",
			url: 'writejson.php',
			data: data,
			dataType: 'text',
			success:function(){
				alert('siker');			
			},
			error:function(){
				alert('bukó');
			}
		});
	
        }
    );
});

</script>
<body>
        <h1>GAWD</h1>
        
    </body>
</html>
