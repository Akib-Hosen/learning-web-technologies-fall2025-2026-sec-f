<!DOCTYPE html>
<html>
<head>
    <title>Product Search</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <fieldset>
        <legend>SEARCH</legend>
        
        <div class="search-box">
            <input type="text" id="search-input" onkeyup="searchData()" value="">
            <button type="button" onclick="searchData()">Search By Name</button>
        </div>

        <hr style="border: 0; border-top: 1px solid #ccc; margin-bottom: 15px;">

        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                    <th colspan="2"></th> 
                </tr>
            </thead>
            <tbody id="table-data">
                </tbody>
        </table>
    </fieldset>

    <br>
    <a href="add_product.php">Add New Product</a>

    <script>
        function searchData() {
            var input = document.getElementById("search-input").value;
            var xhttp = new XMLHttpRequest();
            
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("table-data").innerHTML = this.responseText;
                }
            };
            
            xhttp.open("GET", "search.php?q=" + input, true);
            xhttp.send();
        }

        window.onload = function() {
            searchData();
        }
    </script>
</body>
</html>