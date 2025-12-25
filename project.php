<?php
// FORCE PHP TO SHOW ALL ERRORS
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>MySQL FIX - Step by Step</h2>";

// STEP 1: Check if MySQL is running
echo "Step 1: Checking MySQL service...<br>";
exec('tasklist /FI "IMAGENAME eq mysqld.exe" 2>&1', $output);
if (count($output) > 1) {
    echo "✅ MySQL is RUNNING<br>";
} else {
    echo "❌ MySQL is NOT running. Start it from XAMPP Control Panel!<br>";
    die();
}

// STEP 2: Try different connection methods
echo "<br>Step 2: Trying connection methods...<br>";

$methods = [
    ['localhost', 'root', ''],
    ['127.0.0.1', 'root', ''],
    ['localhost', 'root', null],
    ['127.0.0.1:3306', 'root', ''],
    ['localhost', 'root', 'root'],
    ['localhost', 'root', 'password']
];

foreach ($methods as $index => $method) {
    list($host, $user, $pass) = $method;
    echo "Method " . ($index + 1) . " ($host, $user): ";
    
    $conn = @mysqli_connect($host, $user, $pass);
    
    if ($conn) {
        echo "<span style='color:green;font-weight:bold;'>✅ SUCCESS!</span><br>";
        echo "MySQL Version: " . mysqli_get_server_info($conn) . "<br>";
        mysqli_close($conn);
        break;
    } else {
        echo "<span style='color:red;'>❌ Failed</span><br>";
    }
}

// STEP 3: Last resort - use ini file method
echo "<br>Step 3: Using ini file method...<br>";

// Create a temporary config file
$config_content = "[client]
user=root
password=
host=localhost";

file_put_contents('C:/xampp/htdocs/mysql_temp.cnf', $config_content);

// Try connecting using the config file
exec('mysql --defaults-file="C:/xampp/htdocs/mysql_temp.cnf" -e "SELECT 1" 2>&1', $cmd_output);

echo "Command output: <pre>";
print_r($cmd_output);
echo "</pre>";

// Clean up
unlink('C:/xampp/htdocs/mysql_temp.cnf');

// STEP 4: Final test with PDO
echo "<br>Step 4: Trying PDO...<br>";
try {
    $pdo = new PDO("mysql:host=localhost", "root", "");
    echo "<span style='color:green;font-weight:bold;'>✅ PDO CONNECTED!</span><br>";
} catch (PDOException $e) {
    echo "<span style='color:red;'>❌ PDO Failed: " . $e->getMessage() . "</span><br>";
}
?>