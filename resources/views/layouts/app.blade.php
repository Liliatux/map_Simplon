<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<!--Début liens Leaflet à conserver -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet/1.0.2/leaflet.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet.markercluster/1.0.0/MarkerCluster.css"/>
	<!--Fin liens Leaflet à conserver -->
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

	<script src="https://cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
	<!--Début liens Leaflet à conserver -->
	<script src="https://cdn.jsdelivr.net/leaflet/1.0.2/leaflet.js"></script>
	<script src="https://cdn.jsdelivr.net/leaflet.markercluster/1.0.0/leaflet.markercluster.js"></script>
	<!--Fin liens Leaflet à conserver -->
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/mustache.js/2.3.0/mustache.min.js"></script>

	<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>