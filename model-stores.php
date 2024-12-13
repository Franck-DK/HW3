<?php
function selectStores() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `stores`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertStores($sname, $slocation) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `stores`(`store_name`, `location`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sname, $slocation);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateStores($sname, $slocation, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `stores` SET`store_name`= ?,`location`= ? WHERE store_id = ?");
        $stmt->bind_param("ssi", $sname, $slocation, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteStores($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `stores` WHERE store_id = ?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
