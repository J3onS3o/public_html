<?php
// Read the optional "num" value from the query string.
$num = isset($_GET['num']) ? (int)$_GET['num'] : 10;
// Make sure the number is never less than 1 so the table stays valid.
$num = max(1, $num);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character encoding for the page. -->
    <meta charset="UTF-8">
    <!-- Make the page responsive on mobile devices. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Show the browser tab title. -->
    <title>Multiplication Table</title>
    <style>
        /* Style the overall page body. */
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        /* Add space below the form. */
        form {
            margin-bottom: 20px;
        }
        /* Remove spacing between table cells so borders appear cleanly. */
        table {
            border-collapse: collapse;
            text-align: center;
        }
        /* Add borders and padding to table headers and cells. */
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            min-width: 40px;
        }
        /* Give header cells a light background color. */
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- Page heading. -->
    <h2>Multiplication Table</h2>

    <!-- Form for entering a table size and submitting it via GET. -->
    <form method="get">
        <!-- Label for the input field. -->
        <label for="num">Enter a number:</label>
        <!-- Number input with a minimum value of 1 and current value from PHP. -->
        <input type="number" id="num" name="num" min="1" value="<?php echo htmlspecialchars($num); ?>">
        <!-- Submit button to generate the table. -->
        <button type="submit">Generate</button>
    </form>

    <!-- Main multiplication table. -->
    <table>
        <!-- First row contains the column numbers. -->
        <tr>
            <!-- Empty top-left corner cell. -->
            <th></th>
            <?php for ($col = 1; $col <= $num; $col++): ?>
                <!-- Display the column number. -->
                <th><?php echo $col; ?></th>
            <?php endfor; ?>
        </tr>

        <!-- Loop through each row of the table. -->
        <?php for ($row = 1; $row <= $num; $row++): ?>
            <tr>
                <!-- Display the row number on the left. -->
                <th><?php echo $row; ?></th>
                <?php for ($col = 1; $col <= $num; $col++): ?>
                    <!-- Calculate and print the product of the current row and column. -->
                    <td><?php echo $row * $col; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
