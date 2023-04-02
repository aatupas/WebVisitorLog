        $(document).ready(function () {
            getLocation();
        });

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            var date = new Date().toLocaleString('en-US', {
                timeZone: 'Asia/Jakarta' /* change this timezone if needed */
            });
            var url = "https://www.google.com/maps?q=" + lat + "," + lng;
            $.post("save_log.php", {
                date: date,
                url: url,
                device: navigator.userAgent
            });
        }
