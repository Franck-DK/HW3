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

function selectStoresByProducts($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.store_id, s.store_name, s.location, SUM(o.quantity) AS total_quantity FROM stores s JOIN orders o ON s.store_id = o.store_id WHERE o.product_id=?
GROUP BY s.store_id, s.store_name, s.location");
        $stmt->bind_param("i", $sid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
