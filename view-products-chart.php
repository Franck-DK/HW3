<?php
// Fetch data once and store it in an array
$products = selectProducts();
$product_data = [];
while ($row = $products->fetch_assoc()) {
    $product_data[] = $row; // Store each row in the array
}

// Generate a unique color for each bar
function generateColors($count) {
    $colors = [];
    for ($i = 0; $i < $count; $i++) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $colors[] = "rgba($r, $g, $b, 0.7)";
    }
    return $colors;
}

$unique_colors = generateColors(count($product_data));
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
        backgroundColor: [
          <?php
          // Assign unique colors
          echo implode(", ", array_map(fn($color) => "'$color'", $unique_colors));
          ?>
        ],
        borderColor: [
          <?php
          // Generate border colors with higher opacity
          $borderColors = array_map(fn($color) => str_replace('0.7', '1', $color), $unique_colors);
          echo implode(", ", array_map(fn($color) => "'$color'", $borderColors));
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
