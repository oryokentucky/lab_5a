<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    
    <!-- Form for input -->
    <form name="form" action="" method="get">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php 
    // Check if 'number' is set in the query string
    if (isset($_GET["number"])) {
        $number = (int)$_GET["number"];
        echo "<h3>Multiplication Table for $number</h3>";
    ?>

    <!-- Multiplication table -->
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        // Generate table rows from 1 to 12
        for ($i = 1; $i <= 12; $i++) {
            $result = $number * $i;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$number x $i</td>";
            echo "<td>$result</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php } ?>

</body>
</html>
