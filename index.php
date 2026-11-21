<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Book Inventory Records</h2>
    <button onclick="fetchRecords()">Load Records</button>
    
    <div id="table-container"></div>

    <script>
        function fetchRecords() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch.php", true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("table-container").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Load automatically on page load
        window.onload = fetchRecords;
    </script>

</body>
</html>
