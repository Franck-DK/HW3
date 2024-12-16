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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make-Model Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Styling to add margin and center the chart */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #chart-container {
            margin: 30px auto;
            padding: 20px;
            max-width: 800px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
        }
        p {
            text-align: justify;
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<h1>Make-Model Chart</h1>
<p>
    The availability of cars at auctions can vary due to several key factors. These include the condition and age of vehicles, market demand, seasonality, and economic trends. For example, vehicles from **fleet turnovers**, insurance companies, or lease expirations can contribute to auction availability. Moreover, **natural disasters** or recalls may result in sudden surges of cars entering the auction market. Buyers should also note that higher demand for specific models can reduce availability while increasing competition.
</p>

<div id="chart-container">
    <canvas id="myChart"></canvas>
</div>

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
      },
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        }
      }
    }
  });
</script>
</body>
</html>
