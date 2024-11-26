<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book now</title>

    <link rel="stylesheet" href="../user/./css/book.css">


    <link rel="stylesheet" href="../user/css/book.css">
    <style>
    /* #table {
        border-collapse: collapse;
        width: 100%;
        font-size: 14px;
        font-family: Arial, sans-serif;
    }

    #table th, #table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    #table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #table tr:hover {
        background-color: #f5f5f5;
    }

    .book {
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    .book:hover {
        background-color: #45a049;
    } */
</style>

</head>

<body>
    <div class="container">
        <div class="headermain">
    
            <div class="logo">
                <a href="./das.php"><img src="../img/logo.png" alt="" height="50px" width="50px"></a>
            </div>
            <div class="header">
                <input type="search" class="search-input" placeholder="Search Nearby">
            </div>
        </div>

        <div class="ambtable">
            <table id="table" border="2px solid white">
                <thead>
                    <tr>
                        <th>SN.No</th>
                        <th>Organization/Personal Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Location</th>
                        
                        <th>Book Now</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "../includes/database.php";

                    $sql = "SELECT * FROM admin";
                    $query = mysqli_query($conn, $sql);
                    $data = mysqli_num_rows($query);

                    if ($data != 0) {
                        while ($result = mysqli_fetch_assoc($query)) {
                            echo "
                            <tr>
                                <td>" . $result['id'] . "</td>
                                <td>" . $result['oname'] . "</td> 
                                <td>" . $result['oaddress'] . "</td>
                                <td>" . $result['ophone'] . "</td>
                                <td>" . $result['oemail'] . "</td>
                                
                                <td><input type='submit' value='book' class='book'></td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
<script>
    const searchInput = document.querySelector('.search-input');
    const tableRows = document.querySelectorAll('table tbody tr');

    function filterTableRows() {
        const query = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const cells = row.querySelectorAll('td');

            let foundMatch = false;
            cells.forEach(cell => {
                const cellValue = cell.textContent.toLowerCase();
                if (cellValue.includes(query)) {
                    foundMatch = true;
                }
            });

            if (foundMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterTableRows);
    // searchInput.addEventListener('input', filterTableRows);
</script>