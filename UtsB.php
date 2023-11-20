\
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <style>
        .result-box {
            border: 2px solid #000;
            padding: 10px;
            margin: 10px;
            width: fit-content;
        }
        hr {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h3> Jika ada pembeli membeli dengan total gembelian 200.000 maka akan dapat diskon 10%,
        <h3> jika ada yang membeli dengan total gembelian 300.000 maka ada dapat diskon 20%<h3>
            <hr color="red">
                <?php
                function calculatePayment($totalPurchase)
                {
                    $discountPercentage = 0;

                    if ($totalPurchase >= 200000 && $totalPurchase < 300000) {
                        $discountPercentage = 10;
                    } elseif ($totalPurchase >= 300000) {
                        $discountPercentage = 20;
                    }

                    $discountAmount = ($totalPurchase / 100) * $discountPercentage;
                    $finalPayment = $totalPurchase - $discountAmount;

                    return array(
                        'discountPercentage' => $discountPercentage,
                        'discountAmount' => $discountAmount,
                        'finalPayment' => $finalPayment
                    );
                }

                $totalPurchase = 551000;
                $result = calculatePayment($totalPurchase);
                ?>

                <div class="result-box">
                    <p>Diskon: <?php echo $result['discountPercentage']; ?>%</p>
                    <p>Total Pembayaran: Rp <?php echo number_format($totalPurchase, 2, ',', '.'); ?></p>
                    <p>Total Diskon: Rp <?php echo number_format($result['discountAmount'], 2, ',', '.'); ?></p>
                    <p>Total Pembayaran Setelah Diskon: Rp <?php echo number_format($result['finalPayment'], 2, ',', '.'); ?></p>
                </div>

</body>

</html>