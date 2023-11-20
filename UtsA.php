<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
    <style>
        body {
            background-color: gray;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
            margin: auto;
        }

        th {
            background-color: #f2f2f2;
            text-align: justify;
        }
    </style>
</head>

<body>

    <h2>Tabel Harga Barang</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $barang = array(
                array("01", "Minyak telon", "20", "30.000", "200.000"),
                array("02", "Diapres", "25", "51.000", "250.000"),
                array("03", "Baby Oil", "15", "16.000", "450.000"),
                array("04", "Shampo baby", "20", "20.000", "700.000"),
                array("05", "Bedak", "15", "15.000", "225.000"),
                array("06", "Baju bayi", "20", "35.000", "700.000"),
                array("06", "jumper", "25", "50.000", "1.250.000"),
            );

            foreach ($barang as $item) {
                echo "<tr>";
                foreach ($item as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>