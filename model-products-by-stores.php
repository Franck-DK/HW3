<?php
function selectProductsByStores($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM products p INNER JOIN orders o ON p.product_id = o.product_id WHERE o.store_id=?;");
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
