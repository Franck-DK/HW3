<?php
function selectCustomers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `customers`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertCustomers($cfname, $clname, $cphone, $cemail) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `customers`(`customer_firstname`, `customer_lastname`, `phone`, `email`) VALUES  (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $cfname, $clname, $cphone, $cemail);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateCustomers($cfname, $clname, $cphone, $cemail, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `customers` SET `customer_firstname`=?,`customer_lastname`=?,`phone`=?,`email`=? WHERE customer_id=?");
        $stmt->bind_param("ssssi", $cfname, $clname, $cphone, $cemail, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteCustomers($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `customers` WHERE customer_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
