<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sum of the Squares and Cubes</title>

    <style type="text/css">
        body {
            margin-left: 33%;
            margin-top: 3%;
            background-color: #f6eaee;
        }

        h1 {
            color: #7D1C4A;
        }

        .form {
            background: #eecfd7;
            border: 3px solid #dfa2b1;
            padding: 40px;
            width: 40%;
        }

        label {
            font-size: 28px;
            font-family: monospace, monaco
        }

        input {
            margin-left: 25%;
            font-size: 23px;
            border: 1px solid #A35C7A;
            border-radius: 3px;
        }

        button {
            font-size: 23px;
            width: 40px;
            border-radius: 3px;
            background-color: #be4161;
            color: white;
        }

        form [type="submit"]:hover {
            background-color: #f00f7b;
        }

        .r {
            color: #ca3577;
            font-size: 20px;
            font-family: arial;
        }
    </style>
</head>
<body>
    <h1>Calculate Sum of Squares and Cubes</h1>

    <div class="form"><form method="POST">
        <label for="n">Enter a positive integer <strong>N</strong></label> <br><br><br>
        <input type="text" id="n" name="n" min="1" required>
        <button type="submit">=</button>
    </form> </div><br><br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $N = $_POST['n'];

        if (is_numeric($N) && $N > 0) {
            function calculate_squares_and_cubes($N) {
                $square_sum = 0;
                $cube_sum = 0;
                $i = 1;

                while ($i <= $N) {
                    $square_sum += $i * $i;
                    $cube_sum += $i * $i * $i;
                    $i++;
                }

                return array($square_sum, $cube_sum);
            }

            list($square_sum, $cube_sum) = calculate_squares_and_cubes($N);

            echo '<div class="r"><h3>Results:</h3></div>';
            echo '<div class="r"><p>Sum of <strong>SQUARES</strong> from 1 to '.$N.' is '.$square_sum.'</p></div>';
            echo '<div class="r"><p>Sum of <strong>CUBES</strong> from 1 to '.$N.' is '.$cube_sum.'</p></div>';
        } else {
            echo '<div class="r"><p>Please enter a valid positive integer.</p></div>';
        }
    }
    ?>

</body>
</html>