<?php
require_once '../database/db_connection.php';

// spl to delete a record
$sql = "DELETE FROM users WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);