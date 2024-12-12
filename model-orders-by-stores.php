<?php
function selectOrdersByStores($oid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT order_id, order_datetime, order_status, customer_id, store_id, quantity, totalamount FROM orders WHERE store_id=?");
        $stmt->bind_param("i", $oid);
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
