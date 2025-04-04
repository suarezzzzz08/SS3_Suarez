<?php
$pizza_prices = [
    'Cheese Mania' => 150,
    'Ham & Cheese' => 169,
    'Hawaiian Classic' => 180,
    'Pepperoni' => 200,
    'Bacon & Mushroom' => 250,
];

$drink_prices = [
    'Coke' => 70,
    'Sprite' => 70,
    'Coke Zero' => 70,
    'Orange Juice' => 50,
    'Sparkling Water' => 40,
];

function get_item_price($item, $prices) {
    return isset($prices[$item]) ? $prices[$item] : 0;
}

function calculate_tax($total_amount, $is_takeout) {
    return $is_takeout ? $total_amount * 0.12 : 0;
}

function calculate_total($order, $pizza_prices, $drink_prices, $is_takeout) {
    $total_amount = 0;

    foreach ($order['pizza'] as $item => $quantity) {
        $total_amount += get_item_price($item, $pizza_prices) * $quantity;
    }

    foreach ($order['drink'] as $item => $quantity) {
        $total_amount += get_item_price($item, $drink_prices) * $quantity;
    }

    $tax = calculate_tax($total_amount, $is_takeout);

    return $total_amount + $tax;
}

$total_due = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order = [
        'pizza' => [],
        'drink' => [],
    ];

    foreach ($pizza_prices as $pizza => $price) {
        if (isset($_POST[$pizza]) && $_POST[$pizza] > 0) {
            $order['pizza'][$pizza] = (int)$_POST[$pizza];
        }
    }

    foreach ($drink_prices as $drink => $price) {
        if (isset($_POST[$drink]) && $_POST[$drink] > 0) {
            $order['drink'][$drink] = (int)$_POST[$drink];
        }
    }

    $is_takeout = isset($_POST['dine_in']) && $_POST['dine_in'] === 'takeout';

    $total_due = calculate_total($order, $pizza_prices, $drink_prices, $is_takeout);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            text-align: center;
            color: #0c009a;
        }

        form {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }

        .menu-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .menu-section {
            flex: 1;
            margin-right: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="number"] {
            width: 300px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #c70007;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 400px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #a70006;
        }

        .total {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Domino's Pizza</h1>
    <h2>MENU</h2>
    <form action="" method="POST">
        <div class="menu-container">
            <div class="menu-section">
                <h3>Pizza</h3>
                <?php
                foreach ($pizza_prices as $pizza => $price) {
                    echo "<label for='$pizza'>" . ucfirst($pizza) . " (Price: ₱" . number_format($price, 2) . ") </label>";
                    echo "<input type='number' name='$pizza' id='$pizza' value='" . (isset($_POST[$pizza]) ? $_POST[$pizza] : 0) . "' min='0'><br>";
                }
                ?>
            </div>

            <div class="menu-section">
                <h3>Beverage</h3>
                <?php
                foreach ($drink_prices as $drink => $price) {
                    echo "<label for='$drink'>" . ucfirst($drink) . " (Price: ₱" . number_format($price, 2) . ") </label>";
                    echo "<input type='number' name='$drink' id='$drink' value='" . (isset($_POST[$drink]) ? $_POST[$drink] : 0) . "' min='0'><br>";
                }
                ?>
            </div>
        </div>

        <h3>Order Type</h3>
        <label for="dine_in">Dine-in <input type="radio" name="dine_in" value="dinein" <?php echo (isset($_POST['dine_in']) && $_POST['dine_in'] == 'dinein') ? 'checked' : ''; ?>></label>

        <label for="takeout">Take-out <input type="radio" name="dine_in" value="takeout" <?php echo (isset($_POST['dine_in']) && $_POST['dine_in'] == 'takeout') ? 'checked' : ''; ?>></label>

        <button type="submit" name="submit">Calculate</button>

        <?php if ($total_due > 0): ?>
            <div class="total">Total Due: ₱<?php echo number_format($total_due, 2); ?></div>
        <?php endif; ?>
    </form>
</body>
</html>