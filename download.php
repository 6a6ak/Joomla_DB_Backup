<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $host = $_POST['host'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $db = $_POST['db'];

    
    $backup_file = __DIR__ . '/joomla_backup.sql';

    
    $command = "mysqldump --user=$user --password=$password --host=$host $db > $backup_file";

   
    $output = [];
    $return_var = null;
    exec($command . ' 2>&1', $output, $return_var);

    if ($return_var !== 0) {
        echo "Error creating backup. Please check permissions and database connection.\n";
        echo "Command output:\n" . implode("\n", $output);
        die();
    }

    echo "Backup created successfully: $backup_file";
} else {
    echo "Invalid request method.";
}
?>