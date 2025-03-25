<!DOCTYPE html>
<html lang="en">
<head>
    <title>BMI Calculator</title>
    <style text="style/css">
        body {
            background-color: #f6eaee;
            margin-top: 3%;
        }

        h1 {
            color: #7D1C4A;
            text-align: center;
        }

        .form {
            background-color: #eecfd7; 
            margin-left: 36%;
            padding: 40px;
            width: 25%;
            box-shadow: 0px 5px 15px gray;
            border-radius: 8px;
            text-align: center;
        }

        label {
            font-size: 28px;
            font-family: monospace, monaco;
        }

        input {
            font-size: 23px;
            border: 1px solid #A35C7A;
            border-radius: 3px;
            padding: 5px;
        }

        button {
            font-size: 23px;
            width: 30%;
            border: 3px outset white;
            border-radius: 3px;
            background-color: #be4161;
            color: white;
            padding: 5px;
        }

        form [type="submit"]:hover {
            background-color: #aa3760;
        }

        .r {
            color: #ca3577;
            font-size: 25px;
            font-family: arial;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>BMI Calculator</h1>
<div class="form">
    <form action="" method="POST">
        <label for="weight">Weight:</label>
        <input type="number" name="weight" placeholder="kg">
        <br><br>
        <label for="height">Height:</label>
        <input type="number" name="height" placeholder="cm">
        <br><br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>
</div>
    <?php
    if (isset($_POST['submit'])) {
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bmi = $weight / (($height / 100) ** 2);

        echo "<br>";
        echo "<br>";
        echo '<div class="r"><p>BMI: '. number_format ($bmi, 2) .' kg/m<sup>2</sup></p>';

        if ($bmi <= 18.5) {
            echo "<p>Classification: Underweight</p>";
            echo "<p>Risk of Comorbidities: Low</p>";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "<p>Classification: Normal</p>";
            echo "<p>Risk of Comorbidities: Average</p>";
        } elseif ($bmi >= 25.0 && $bmi < 29.9) {
            echo "<p>Classification: Overweight (pre obese)</p>";
            echo "<p>Risk of Comorbidities: Mildly Increased</p>";
        } elseif ($bmi <= 30.0) {
            echo "<p>Classification: Obese</p>";
        } elseif ($bmi >= 30.0 && $bmi < 34.9) {
            echo "<p>Classification: Class I</p>";
            echo "<p>Risk of Comorbidities: Moderate</p>";
        } elseif ($bmi >= 35.0 && $bmi < 39.9) {
            echo "<p>Classification: Class II</p>";
            echo "<p>Risk of Comorbidities: Severe</p>";
        } elseif ($bmi >= 40.0) {
            echo "<p>Classification: Class III</p>";
            echo "<p>Risk of Comorbidities: Very Severe</p>";
        }
    }
    ?>

</body>
</html>
