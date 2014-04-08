<!-- JS libraries files -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- JS main file -->
<script src="assets/js/main.js"></script>

<!-- Grunt Browser Sync - Intégration uniquement -->
<script src='//localhost:3000/socket.io/socket.io.js'></script>
<script>var ___socket___ = io.connect('http://localhost:3000');</script>
<script src='//localhost:3001/client/browser-sync-client.0.7.4.js'></script>