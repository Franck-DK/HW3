<?php
function selectOrders() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `orders`");
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
