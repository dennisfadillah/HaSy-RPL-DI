<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Produk</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>

</html>
<?php
require_once('db.php');

if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $conn = new Database();
    $conn = $conn->getInstance();
    if ($conn->connect_error) {
        echo "connection Failed: " . $conn->connect_error;
    } else {
        $sql = "SELECT * FROM produk WHERE nama LIKE '%$searchValue%'";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['nama'] . "<br>";
            echo $row['harga'] . "<br>";
        }


    }
}



?>
