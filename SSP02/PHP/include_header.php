<?php /* include_header.php — CS2623 SSP02 */
$server_name = isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : "Server-Side Programming";
?>
<header>
    <h1>CS2623 <?php echo htmlspecialchars($server_name, ENT_QUOTES, "UTF-8"); ?></h1>
</header>