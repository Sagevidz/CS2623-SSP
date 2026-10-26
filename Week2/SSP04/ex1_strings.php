<?php
// Suppress the PHP 5 "Unsupported declare 'strict_types'" warning on Apollo
error_reporting(E_ALL & ~E_WARNING);
declare(strict_types=1);

// Polyfill for str_contains() so PHP 8 code runs on Apollo's older PHP 5 server
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle === '' || strpos($haystack, $needle) !== false;
    }
}

// Sample product data
$description = 'Learning PHP 8 string functions is fun and powerful!';
$replaced    = str_replace('fun', 'essential', $description);

// Use str_contains() to check if $description contains "PHP"
$has_php     = str_contains($description, 'PHP') ? 'true' : 'false';

$upper_str   = strtoupper($description);
$lower_str   = strtolower($description);
$char_count  = (string)strlen($description);

$raw_price   = 29.9;
$fmt_price   = sprintf('$%.2f', $raw_price);

$raw_number  = 1250000;
$fmt_number  = number_format($raw_number);

$sub_str     = substr($description, 0, 14);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSP04 Exercise 1 — Ch09 String Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f9f9f9;
            color: #333333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #cccccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #1B2A6B;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>SSP04 Exercise 1 — Ch09 String Functions</h1>
    </header>
    <main>
        <p><strong>Original String:</strong> <?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p>

        <table>
            <thead>
                <tr>
                    <th><?php echo htmlspecialchars('Function', ENT_QUOTES, 'UTF-8'); ?></th>
                    <th><?php echo htmlspecialchars('Input', ENT_QUOTES, 'UTF-8'); ?></th>
                    <th><?php echo htmlspecialchars('Output', ENT_QUOTES, 'UTF-8'); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars('str_replace("fun", "essential", $str)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($replaced, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('str_contains($str, "PHP")', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($has_php, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('strtoupper($str)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($upper_str, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('strtolower($str)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($lower_str, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('strlen($str)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($char_count, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('sprintf("$%.2f", 29.9)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars((string)$raw_price, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($fmt_price, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('number_format(1250000)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars((string)$raw_number, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($fmt_number, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars('substr($str, 0, 14)', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($sub_str, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>