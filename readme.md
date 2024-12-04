# Joomla Database Backup

This repository contains a simple PHP script and HTML form to create a backup of a Joomla database.

## Files

- `download.php`: PHP script to handle the database backup process.
- `index.html`: HTML form to input database connection details and trigger the backup.
- `readme.md`: This file.

## Usage

1. Open `index.html` in your web browser.
2. Fill in the database connection details (host, user, password, database).
3. Click the "Backup" button to create a backup of the specified database.

The backup file will be saved as `joomla_backup.sql` in the same directory as `download.php`.

## Requirements

- PHP installed on the server.
- MySQL database.
- `mysqldump` utility available on the server.

## Security Note

Ensure that the `download.php` script is secured and not accessible to unauthorized users, as it handles sensitive database credentials.