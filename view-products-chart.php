<h1>Products Chart</h1>
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
                  while ($product = $products->fetch_assoc()) {
                  echo $product['product_name'].", ";
                  }
                  ?>

      ],
      datasets: [{
        label: 'Total Quantity',
        data: [
                  <?php
                  $products = selectProducts();
                  while ($product = $products->fetch_assoc()) {
                  echo "'".$product['total_quantity']."', ";
                  }
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
 
