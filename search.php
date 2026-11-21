<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Search</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Live Search Records</h2>
    <input type="text" id="searchBox" placeholder="Type to search books..." onkeyup="liveSearch(this.value)">

    <div id="search-results"></div>

    <script>
        function liveSearch(str) {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "live_search_backend.php?q=" + encodeURIComponent(str), true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("search-results").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
        
        // Initial load
        window.onload = () => liveSearch("");
    </script>

</body>
</html>
