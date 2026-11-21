<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Record Form</title>
</head>
<body>

    <h2>Add New Book Record</h2>
    <form id="bookForm" onsubmit="submitForm(event)">
        <label>Book Name: <input type="text" id="book_name" required></label><br><br>
        
        <label>Author:</label>
        <input type="radio" name="author" value="Paulo Coelho" checked> Paulo Coelho
        <input type="radio" name="author" value="Robert C. Martin"> Robert C. Martin<br><br>
        
        <label>Category (List box): 
            <select id="category">
                <option value="Fiction">Fiction</option>
                <option value="Tech">Tech</option>
                <option value="Self-Help">Self-Help</option>
            </select>
        </label><br><br>

        <!-- Hidden element -->
        <input type="hidden" id="status_flag" value="active">

        <label>Price: <input type="number" step="0.01" id="price" required></label><br><br>
        <label>Stock: <input type="number" id="stock" required></label><br><br>

        <button type="submit">Submit</button>
    </form>

    <h3 id="response-msg"></h3>

    <script>
        function submitForm(event) {
            event.preventDefault();

            const book_name = document.getElementById("book_name").value;
            const author = document.querySelector('input[name="author"]:checked').value;
            const price = document.getElementById("price").value;
            const stock = document.getElementById("stock").value;
            const status_flag = document.getElementById("status_flag").value;

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "insert.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("response-msg").innerHTML = xhr.responseText;
                    document.getElementById("bookForm").reset();
                }
            };
            xhr.send(`book_name=${encodeURIComponent(book_name)}&author=${encodeURIComponent(author)}&price=${encodeURIComponent(price)}&stock=${encodeURIComponent(stock)}&status_flag=${encodeURIComponent(status_flag)}`);
        }
    </script>

</body>
</html>
