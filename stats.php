<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculations & Categories</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Inventory Analytics & Categorization (Price Column)</h2>
    <button onclick="loadStats()">Calculate Stats</button>
    <div id="stats-container"></div>

    <script>
        function loadStats() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "stats_backend.php", true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("stats-container").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
        window.onload = loadStats;
    </script>

</body>
</html>
