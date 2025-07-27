<?php 
$microsoft_qry = $conn->query("SELECT * FROM accounts WHERE company_name = 'microsoft'");
$microsoft = mysqli_num_rows($microsoft_qry);


$google_qry  = $conn->query("SELECT * FROM accounts WHERE company_name = 'google'");
$google = mysqli_num_rows($google_qry);


$local_qry  = $conn->query("SELECT * FROM accounts WHERE company_name = 'localCompany'");
$local = mysqli_num_rows($local_qry);

$unemployed_qry  = $conn->query("SELECT * FROM accounts WHERE company_name = 'unemployed'");
$unemployed = mysqli_num_rows($local_qry);



$IT_qry = $conn->query("SELECT * FROM accounts WHERE feild = 'IT'");
$IT = mysqli_num_rows($IT_qry);


$Engineering_qry  = $conn->query("SELECT * FROM accounts WHERE feild = 'Engineering'");
$Engineering = mysqli_num_rows($Engineering_qry);


$other_qry  = $conn->query("SELECT * FROM accounts WHERE feild = 'other'");
$other = mysqli_num_rows($other_qry);

?>
<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Prepare the data
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Count', { role: 'style' }],
                ['Google', <?php echo $google; ?>, 'color: #f3b431; opacity: 0.8'],
                ['Microsoft', <?php echo $microsoft; ?>, 'color: #f3b431; opacity: 0.8'],
                ['Local', <?php echo $local; ?>, 'color: #f3b431; opacity: 0.8'],
                ['Unemployed', <?php echo $unemployed; ?>, 'color: #f3b431; opacity: 0.8'],

                ['It', <?php echo $IT; ?>, 'color: #109618; opacity: 0.8'],
                ['Softwar Engineer', <?php echo $Engineering; ?>, 'color: #109618; opacity: 0.8'],
                ['Other', <?php echo $other; ?>, 'color: #109618; opacity: 0.8'],
            ]);

            // Set chart options
            var options = {
                title: 'Graphical view',
                backgroundColor: '#FFFFFF',  // Dark background for modern look
                titleTextStyle: { color: '#000', fontSize: 20, bold: true, italic: false },
                legend: { position: 'none' }, // Hide legend
                hAxis: {
                    title: 'Amount',
                    textStyle: { color: '#000', fontSize: 14 },
                    titleTextStyle: { color: '#000', fontSize: 16, bold: true }
                },
                vAxis: {
                    textStyle: { color: '#000', fontSize: 14 },
                    titleTextStyle: { color: '#000', fontSize: 16, bold: true }
                },
                chartArea: { left: '15%', top: '10%', width: '70%', height: '75%' },
                bars: 'vertical',
                animation: {
                    duration: 3000, 
                    easing: 'out',  
                    startup: true   
                },
                bar: { groupWidth: '85%' }, // Set the width of the bars
                colors: ['#e0440e', '#109618', '#f3b431'] // Define colors for bars directly
            };

            // Draw the chart
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>












<!--     
 
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="multipleBarChart"></canvas>
<script>
    const ctx = document.getElementById('multipleBarChart').getContext('2d');
    const multipleBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2016', '2017', '2018', '2019', '2020', '2021', '2022'],
            datasets: [
                {
                    label: 'USA',
                    data: [10, 20, 30, 40, 50, 60, 90],
                    backgroundColor: 'rgba(255, 99, 132, 0.8)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'UK',
                    data: [15, 25, 35, 45, 55, 65, 85],
                    backgroundColor: 'rgba(255, 159, 64, 0.8)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                },
                {
                    label: 'AU',
                    data: [20, 30, 40, 50, 60, 70, 100],
                    backgroundColor: 'rgba(255, 205, 86, 0.8)',
                    borderColor: 'rgba(255, 205, 86, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#fff',
                        stepSize: 20
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                },
                x: {
                    ticks: {
                        color: '#fff'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#fff'
                    }
                },
                title: {
                    display: true,
                    text: 'Multiple Bar Chart',
                    color: '#fff',
                    font: {
                        size: 18
                    }
                }
            }
        }
    });
</script> -->



<!--  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Companes', 'fields', 'Girls', 'Total'],
    
      ['google Company', <?php echo isset($kg_B) && $kg_B != '' ? $kg_B : 1; ?>, <?php echo isset($kg_G) && $kg_G != '' ? $kg_G : 1; ?>, <?php echo (isset($kg_B) && $kg_B != '' ? $kg_B : 1) + (isset($kg_G) && $kg_G != '' ? $kg_G : 1); ?>],
      
      ['microsoft', <?php echo isset($frst_B) && $frst_B != '' ? $frst_B : 1; ?>, <?php echo isset($frst_G) && $frst_G != '' ? $frst_G : 1; ?>, <?php echo (isset($frst_B) && $frst_B != '' ? $frst_B : 1) + (isset($frst_G) && $frst_G != '' ? $frst_G : 1); ?>],
      
      ['local companies', <?php echo isset($scnd_B) && $scnd_B != '' ? $scnd_B : 1; ?>, <?php echo isset($scnd_G) && $scnd_G != '' ? $scnd_G : 1; ?>, <?php echo (isset($scnd_B) && $scnd_B != '' ? $scnd_B : 1) + (isset($scnd_G) && $scnd_G != '' ? $scnd_G : 1); ?>],
      
      ['3rd', <?php echo isset($thrd_B) && $thrd_B != '' ? $thrd_B : 1; ?>, <?php echo isset($thrd_G) && $thrd_G != '' ? $thrd_G : 1; ?>, <?php echo (isset($thrd_B) && $thrd_B != '' ? $thrd_B : 1) + (isset($thrd_G) && $thrd_G != '' ? $thrd_G : 1); ?>],
   
      ['10th', <?php echo isset($ten_B) && $ten_B != '' ? $ten_B : 1; ?>, <?php echo isset($ten_G) && $ten_G != '' ? $ten_G : 1; ?>, <?php echo (isset($ten_B) && $ten_B != '' ? $ten_B : 1) + (isset($ten_G) && $ten_G != '' ? $ten_G : 1); ?>]
    ]);

    var options = {
      title: 'Student Distribution by Class (Boys, Girls, and Total)',
      backgroundColor: '#191C24',
      titleTextStyle: { color: '#ffffff', fontSize: 18, bold: true },
      legend: { position: 'top', textStyle: { color: '#ffffff', fontSize: 12 } },
      hAxis: { textStyle: { color: '#ffffff' }, title: 'Classes', titleTextStyle: { color: '#ffffff' } },
      vAxis: { textStyle: { color: '#ffffff' }, title: 'Count', titleTextStyle: { color: '#ffffff' }, minValue: 0 },
      chartArea: { left: '10%', top: 50, width: '80%', height: '65%' },
      bar: { groupWidth: '75%' },
      colors: ['#EB1616', '#e717ea', '#188238'], // Colors for Boys, Girls, and Total
      annotations: {
        alwaysOutside: true,
        textStyle: {
          fontSize: 12,
          color: '#ffffff',
          auraColor: 'none'
        }
      },
      animation: {
        duration: 2500,
        easing: 'out',
        startup: true
      }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('barchart'));

    chart.draw(data, options);
  }
</script> -->
<!-- <div id="barchart" style="width: 100%; height: 400px;"></div> -->
