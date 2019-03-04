<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Bookstore Receipt</title>
    </head>
    <body>
        <h1>Rainy Day Bookstore</h1>
        <h3>Thanks for shopping with Rainy Day Books! Here is your receipt:</h3><br>
        <?php
            $userPass = $_POST["userpass"];
            $userEmail = $_POST["username"];
            $murakami = $_POST["murakami"];
            $gaiman = $_POST["gaiman"];
            $tolkein = $_POST["tolkein"];
            $shipping = $_POST["shipping"];
            $shippingStatus = "";
            $shippingCost = 0;
            $grandTotal = 0;


            if ($shipping == free) {
                $shippingStatus = "free 7 day shipping";
            }
            else if ($shipping == overnight) {
                $shippingStatus = "over night shipping";
                $shippingCost = 50;

            }
            else if ($shipping == three) {
                $shippingStatus = "three day shipping";
                $shippingCost = 5;
            }
            
            $grandTotal = ($gaiman * 21.99) + ($tolkein * 29.99) + ($murakami * 11.99) + $shippingCost;
            
            echo "Username: " . $userEmail . "<br>";
            echo "Password: " . $userPass . "<br><br>";
            echo "<table class='receipt'>";
            echo "<tr><td>Books</td><td>Quantity</td><td>Cost</td><td>Sub Total</td></tr>";
            echo "<tr><td>American Gods</td><td>" . $gaiman . "</td><td>$" . 21.99 . "</td><td>$" . $gaiman * 21.99 . "</td>";
            echo "<tr><td>Kafka on the Shore</td><td>" . $murakami . "</td><td>$" . 11.99 . "</td><td>$" . $murakami * 21.99 . "</td>";
            echo "<tr><td>Lord of the Rings</td><td>" . $tolkein . "</td><td>$" . 29.99 . "</td><td>$" . $tolkein * 21.99 . "</td>";
            echo "<tr><td>Shipping Method</td><td>" . $shippingStatus . "</td><td>$" . $shippingCost . "</td><td>$" . $shippingCost . "</td>";
            echo "<tr><td>TOTAL</td><td></td><td></td><td>$" . $grandTotal . "</td>";
            echo "</table>";
        ?>


    </body>
</html>
