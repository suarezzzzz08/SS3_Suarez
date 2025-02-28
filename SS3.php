<!DOCTYPE html>
<html>
<head>
    <title>Recommended Calories</title>

    <style type="text/css">
        form {
            margin: 50px;
            margin-left: 22%;
            padding: 30px;
            width: 50%;
            height: 180px;
            background-color: #eecfd7;
            border: 1px solid #dfa2b1;
        }

        label {
            font-size: 23px;
        }

        form input {
            margin: 10px;
            margin-left: 105px;
            padding: 6px;
            font-size: 20px;
            border: 1px solid #A35C7A;
            border-radius: 3px;
        }

        button {
            margin: 13px;
            margin-left: 71%;
            padding: 10px;
            width: 173px;
            font-size: 22px;
            border: 0px solid;
            border-radius: 10px;
            background-color: #be4161;
            color: white;
        }

        .kg {
            margin-left: 46.3%;
        }

        h1 {
            color: #7D1C4A;
            margin-left: 22%;
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            font-family: monospace;
            text-align: center;
            border: 1px solid #dfa2b1;
            width: 53.2%;;
            height: 30px;
            padding: 5px;
            margin-left: 22%;
            color: white;
            background-color: #D17D98;
        }

        body {
            margin-top: 3%;
        }

        .result{
            text-align: center;
            color: #e96cb5;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Calorie Calculator</h1>
    <h2>Enter the values and click 'Calculate' to use.</h2>
    <form method="POST">
        <label for="weight">Weight (kg)</label>
        <input class="kg" type="number" step="0.1" name="weight" id="weight" required>
        <br>
        <label for="lifestyle">Lifestyle (A for Active, S for Sedentary)</label>
        <input type="text" name="lifestyle" id="lifestyle" maxlength="1" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>
<br>
    <?php
    function calculate_calories($weight, $lifestyle) {
        if ($lifestyle === 'A') {
            $activity_factor = 15;
        } elseif ($lifestyle === 'S') {
            $activity_factor = 13;
        } else {
            echo "Invalid lifestyle selection. Please enter 'A' for active or 'S' for sedentary.";
        }

        $recommended_calories = $activity_factor * $weight;
        echo '<div class="result"> You should eat about ' . $recommended_calories . ' calories each day! </div>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['weight']) && isset($_POST['lifestyle'])) {
            $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);
            $lifestyle = strtoupper(trim($_POST['lifestyle']));

            if ($weight === false || $weight <= 0) {
                echo '<div class="result"> Invalid input. </div>';
            } else {
                echo calculate_calories($weight, $lifestyle);
            }
        } else {
            echo "No input. Please try again.";
        }
    }
    ?>
</body>
</html>