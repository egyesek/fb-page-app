<?php
header('Content-Type: application/json');
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function() {
$.getJSON("http://egyesek.hu/csoportlista.php", function(data) {   
$('body').append(JSON.stringify(data));
});})
</script>