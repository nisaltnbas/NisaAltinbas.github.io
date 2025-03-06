<?php
$exchangeRates = [
    "USD" => ["CAD" => 1.43, "EUR" => 0.93, "USD" => 1],
    "CAD" => ["USD" => 0.70, "EUR" => 0.65, "CAD" => 1],
    "EUR" => ["USD" => 1.08, "CAD" => 1.54, "EUR" => 1]
];

$amount = "";
$from = "USD";
$to = "EUR";
$convertedAmount = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["value"]) && isset($_GET["from_currency"]) && isset($_GET["to_currency"])) {
    $amount = floatval($_GET["value"]);
    $from = $_GET["from_currency"];
    $to = $_GET["to_currency"];

    if ($from == $to) {
        $convertedAmount = $amount;
    } else {
        $convertedAmount = $amount * $exchangeRates[$from][$to];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currency Calculation</title>
    <meta name="description" content="CENG 311 Inclass Activity 5" />
</head>
<body>
    <form action="" method="GET">
        <table>
            <tr>
                <td>From:</td>
                <td><input type="text" name="value" value="<?= htmlspecialchars($amount) ?>" required/></td>
                <td>Currency:</td>
                <td>
                    <select name="from_currency">
                        <option value="USD" <?= $from == "USD" ? "selected" : "" ?>>USD</option>
                        <option value="CAD" <?= $from == "CAD" ? "selected" : "" ?>>Canadian Dollar</option>
                        <option value="EUR" <?= $from == "EUR" ? "selected" : "" ?>>Euro</option>
                    </select>
                </td>    
            </tr>
            <tr>
                <td>To:</td>
                <td><input type="text" name="converted_value" value="<?= htmlspecialchars($convertedAmount) ?>" readonly/></td>
                <td>Currency:</td>
                <td>
                    <select name="to_currency">
                        <option value="USD" <?= $to == "USD" ? "selected" : "" ?>>USD</option>
                        <option value="CAD" <?= $to == "CAD" ? "selected" : "" ?>>Canadian Dollar</option>
                        <option value="EUR" <?= $to == "EUR" ? "selected" : "" ?>>Euro</option>
                    </select>
                </td>    
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="Convert"/>
                </td>    
            </tr>
        </table>
    </form>

    <?php if ($convertedAmount !== ""): ?>
        <h2>Conversion Result:</h2>
        <p><?= htmlspecialchars($amount) ?> <?= htmlspecialchars($from) ?> is equal to <?= htmlspecialchars($convertedAmount) ?> <?= htmlspecialchars($to) ?></p>
    <?php endif; ?>
</body>
</html>
