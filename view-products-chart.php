
<?php
// Fetch data once and store it in an array
$products = selectProducts();
$product_data = [];
while ($row = $products->fetch_assoc()) {
    $product_data[] = $row; // Store each row in the array
}
?>

<h1>Make-Model Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
        // Generate labels
        $labels = array_map(fn($product) => "'" . addslashes($product['product_name']) . "'", $product_data);
        echo implode(", ", $labels);
        ?>
      ],
      datasets: [{
        label: 'Total Quantity',
        data: [
          <?php
          // Generate data
          $data = array_map(fn($product) => $product['total_quantity'], $product_data);
          echo implode(", ", $data);
          ?>
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

