<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'frankdko_hw3user', 'LXF38qf4.,Pm', 'frankdko_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
