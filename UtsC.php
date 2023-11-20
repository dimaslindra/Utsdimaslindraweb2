<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .teks {
            font-size: 40px;
            text-align: justify;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <div>
        <div class="teks">
            <?php
            $table = [
                array("Minyak telon", "20", "30.000"),
                array("Diapres", "25", "51.000"),
                array("Baby Oil", "15", "16.000"),
                array("Sampo Baby", "20", "20.000"),
                array("Bedak", "15", "15.000"),
                array("Baju bayi", "20", "35.000"),
                array("Jumper", "25", "50.000")
            ];

            $array_multidimensi = array();
            foreach ($table as $item) {
                $produk = $item[0];
                $stok = $item[1];
                $harga = $item[2];
                $array_multidimensi[] = array("produk" => $produk, "stok" => $stok, "harga" => $harga);
            }

            echo '<table border= "4">';
            echo '</tr><th>Produk</th><th>stok</th><th>harga</th></tr>';

            foreach ($array_multidimensi as $row) {
                echo '<tr><td>' . $row['produk'] . '</td><td>' . $row['stok'] . '</td><td>' . $row['harga']  . '</td></tr>';
            }
            echo '</table>';
            ?>
        </div>
</body>

</html>