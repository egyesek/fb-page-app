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
        <script>
		$(document).ready(function() {
    $.getJSON("http://egyesek.hu/csoportlista.php", function(data) {   
		$('body').append(JSON.stringify(data));
	});
		
		})
		</script>
              
    </head>
    <body>
      
    </body>
</html>
