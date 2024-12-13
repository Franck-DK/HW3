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

function insertInventory($pid, $sid, $date, $quantity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `inventory`(`product_id`, `store_id`, `date`, `quantity`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisi", $pid, $sid, $date, $quantity);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateInventory($pid, $sid, $date, $quantity, $iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `inventory` SET `product_id`=?,`store_id`=?,`date`=?,`quantity`=? WHERE inventory_id=?");
        $stmt->bind_param("iisii", $pid, $sid, $date, $quantity, $iid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteInventory($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `inventory` WHERE inventory_id = ?");
        $stmt->bind_param("i", $iid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
