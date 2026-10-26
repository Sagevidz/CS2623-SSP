<?php
// declare(strict_types=1); // Commented out for Apollo PHP 5.x compile-time compatibility

$tz  = new DateTimeZone('America/Chicago');
$now = new DateTime('now', $tz);

$today_name = $now->format('l');       // e.g. "Tuesday"
$today_date = $now->format('F j, Y');  // e.g. "October 10, 2026"
$today_time = $now->format('g:i:s A'); // e.g. "2:35:04 PM"

// Countdown to semester end (adjust date as needed)
$end_date  = new DateTime('2026-12-15', $tz);
$interval  = $now->diff($end_date);
$days_left = $interval->days;

// Parse a date string with createFromFormat()
$birth_str    = '1999-05-14'; // Change to your own birthdate
$birth_date   = DateTime::createFromFormat('Y-m-d', $birth_str, $tz);
$age_interval = $birth_date->diff($now);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSP04 Exercise 2 — Ch10 Date &amp; Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f9f9f9;
            color: #333333;
        }
        section {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            max-width: 600px;
            border-radius: 4px;
        }
        h2 {
            margin-top: 0;
            color: #1B2A6B;
        }
    </style>
</head>
<body>
    <header>
        <h1>SSP04 Exercise 2 — Ch10 Date &amp; Time</h1>
    </header>
    <main>
        <section>
            <h2>Current Date &amp; Time</h2>
            <?php
            echo '<p>Today is: ' . htmlspecialchars($today_name . ', ' . $today_date, ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<p>Current time (CDT): ' . htmlspecialchars($today_time, ENT_QUOTES, 'UTF-8') . '</p>';
            ?>
        </section>

        <section>
            <h2>Semester Countdown</h2>
            <?php
            echo '<p>Days until semester end: ';
            echo htmlspecialchars((string)$days_left, ENT_QUOTES, 'UTF-8');
            echo ' days</p>';
            ?>
        </section>

        <section>
            <h2>Elapsed Time Since Birthdate</h2>
            <?php
            echo '<p>Birthdate parsed: ' . htmlspecialchars($birth_str, ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<p>Age in years: ' . htmlspecialchars((string)$age_interval->y, ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<p>Age in days: ' . htmlspecialchars((string)$age_interval->days, ENT_QUOTES, 'UTF-8') . '</p>';
            ?>
        </section>
    </main>
</body>
</html>