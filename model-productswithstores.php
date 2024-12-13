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
        $stmt = $conn->prepare("SELECT 
    i.inventory_id,
    p.product_name,
    s.store_name,
    i.date,
    i.quantity
FROM 
    inventory i
JOIN 
    products p ON i.product_id = p.product_id
JOIN 
    stores s ON i.store_id = s.store_id
WHERE 
    i.product_id = ?
");
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
