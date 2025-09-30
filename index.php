<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Deployer with Github Actions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>Hello, world!</h1>
        <p>
            Intinya kalau pake Github Actions itu kita minta si gha buat ssh ke server dan running command deploy di server.
        </p>

        <?php
        // show error reporting
        error_reporting(E_ALL);

        // include connection
        include_once("connection.php");

        // Get data from mahasiswa
        $sql = "SELECT * FROM mahasiswa";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Name: " . $row["nama"] . " - NIM: " . $row["nim"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>