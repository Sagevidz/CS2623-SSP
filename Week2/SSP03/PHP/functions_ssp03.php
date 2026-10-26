<?php
// Suppress the PHP 5 "Unsupported declare 'strict_types'" warning on Apollo
error_reporting(E_ALL & ~E_WARNING);
declare(strict_types=1);

/**
 * Outputs the opening <table> tag and header rows with a caption.
 * PHP 8 Signature: function fn_tableOpen(string $caption): void
 *
 * @param string $caption The table title/caption
 * @return void
 */
function fn_tableOpen($caption) {
    echo '<table border="1" cellpadding="6" cellspacing="0">';
    echo '<tr style="background-color:#1B2A6B;color:#FFFFFF;">';
    echo '  <th colspan="3">';
    echo htmlspecialchars((string)$caption, ENT_QUOTES, 'UTF-8');
    echo '  </th>';
    echo '</tr>';
    echo '<tr style="background-color:#006B7D;color:#FFFFFF;">';
    echo '  <th>Day</th><th>Details</th><th>Time</th>';
    echo '</tr>';
}

/**
 * Outputs the closing </table> tag.
 * PHP 8 Signature: function fn_tableClose(): void
 *
 * @return void
 */
function fn_tableClose() {
    echo '</table>';
}

/**
 * Outputs a highlighted table row (yellow background) for the current day.
 * PHP 8 Signature: function fn_tableRowCurrent(string $day, string $details, string $time): void
 *
 * @param string $day     The name of the day
 * @param string $details The scheduled activity details
 * @param string $time    The time slot
 * @return void
 */
function fn_tableRowCurrent($day, $details, $time) {
    echo '<tr style="background-color:#FFFF66;">';
    echo '<td>' . htmlspecialchars((string)$day, ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars((string)$details, ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars((string)$time, ENT_QUOTES, 'UTF-8') . '</td>';
    echo '</tr>';
}

/**
 * Outputs a standard table row without highlight styling.
 * PHP 8 Signature: function fn_tableRow(string $day, string $details, string $time): void
 *
 * @param string $day     The name of the day
 * @param string $details The scheduled activity details
 * @param string $time    The time slot
 * @return void
 */
function fn_tableRow($day, $details, $time) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars((string)$day, ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars((string)$details, ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars((string)$time, ENT_QUOTES, 'UTF-8') . '</td>';
    echo '</tr>';
}

/**
 * Returns the day name for $day_num 1-7 (1 = Monday ... 7 = Sunday).
 * MUST use if/elseif chain (not match).
 * PHP 8 Signature: function fn_dayOfWeek(int $day_num): string
 *
 * @param int $day_num Day number (1-7)
 * @return string
 */
function fn_dayOfWeek($day_num) {
    if ($day_num === 1)      return 'Monday';
    elseif ($day_num === 2)  return 'Tuesday';
    elseif ($day_num === 3)  return 'Wednesday';
    elseif ($day_num === 4)  return 'Thursday';
    elseif ($day_num === 5)  return 'Friday';
    elseif ($day_num === 6)  return 'Saturday';
    elseif ($day_num === 7)  return 'Sunday';
    else                     return 'Unknown';
}

/**
 * Returns a description of the day's activity.
 * MUST use switch statement.
 * PHP 8 Signature: function fn_dayDetails(int $day_num): string
 *
 * @param int $day_num Day number (1-7)
 * @return string
 */
function fn_dayDetails($day_num) {
    switch ($day_num) {
        case 1:  return 'PHP lecture — Ch08 Conditionals';
        case 2:  return 'Lab: SSP03 function library';
        case 3:  return 'Study: string functions Ch09';
        case 4:  return 'Lab: SSP04 exercises';
        case 5:  return 'Quiz review + office hours';
        case 6:  return 'Project work';
        case 7:  return 'Rest day';
        default: return 'No schedule';
    }
}

/**
 * Returns a time string for the given day number.
 * MUST use if/elseif with OR (||) operator.
 * PHP 8 Signature: function fn_dayTime(int $day_num): string
 *
 * @param int $day_num Day number (1-7)
 * @return string
 */
function fn_dayTime($day_num) {
    if ($day_num === 1 || $day_num === 3)     return '9:00 AM – 10:20 AM';
    elseif ($day_num === 2 || $day_num === 4) return '1:00 PM – 2:50 PM';
    elseif ($day_num === 5)                   return '10:00 AM – 11:00 AM';
    elseif ($day_num === 6 || $day_num === 7) return 'Flexible';
    else                                      return 'TBD';
}