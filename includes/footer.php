        <a href="map.html"><img id="mapsicon" src="images/gmaps.png" alt="Map"></a>   
        <hr id="datehr">  
        <p id="date">
        <script>
            var d = new Date();
            document.getElementById("date").innerHTML = d.toDateString();
        </script>
        </p>
        <script>
           function myFunction() {
                document.getElementById("dropdown").classList.toggle("show");
            }
        </script>
    </body>
</html>