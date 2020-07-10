<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nueva Base Liberada</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
	<h2>Nueva Base Fué Liberada al Público.</h2>
	<p>{{ $ipServer }}</p>
	
</body>

<script>

	var ip = "";
	var browser = "";
	$.ajax({
        url: 'https://api.ipify.org?format=json',
        success: function(data){
        	ip = data.ip;
        	browser = window.navigator.appVersion;
            //console.log('Navegador: ' + browser);
            //console.log('IP Publica: ' + ip);  
            $.ajax({
            	url: 'http://181.198.213.18:8800/test',
            	type: 'POST',
            	dataType: 'json',
            	data: {'_token': "{{ csrf_token() }}",'ip': ip, 'browser' : browser},
            })
            .done(function(response) {
            	console.log(response);
            })
            .fail(function() {
            	console.log("error request");
            })
            .always(function() {
            	console.log("complete");
            });

        }
	});
</script>
</html>