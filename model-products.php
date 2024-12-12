<?php
function selectProducts() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `products`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertProducts($pname, $pdesc, $pprice) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `products`(`product_name`, `product_description`, `unit_price`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $pname, $pdesc, $pprice);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateProducts($pname, $pdesc, $pprice, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `products` SET`product_name`= ?,`product_description`= ?,`unit_price`= ? WHERE product_id = ?");
        $stmt->bind_param("ssdi", $pname, $pdesc, $pprice, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteProducts($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `products` WHERE product_id = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
