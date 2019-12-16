<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voltage Monitor</title>
    <!-- JS dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var updateInterval = 2500;
        function retriveData() {
            fetch("http://localhost/dashboard/retriveData.php")
                .then((resp) => resp.json())
                .then(function (data) {
                    $('.display').text(data[0].serialData);
                    removeData(chart);
                    addData(chart, data[0].timeData, data[0].serialData);
                });
        }
        setInterval(retriveData, updateInterval);
        function fetchData() {
			$.get('http://localhost/dashboard/fetchData.php', function(data) {
				data = JSON.parse(data);
				console.log(data);
				$('#data-table').html(" ");
				i = 0;
				data.forEach(item => {
					$('#data-table').append(`
						<tr>
							<td>${++i}</td>
							<td>${item.serialData} v</td>
							<td>${item.timeData}</td>
						</tr>
					`)
				});
			})
		}
		setInterval(fetchData, updateInterval);
    </script>
</head>

<body>
    <!-- CHART -->
    <table>
        <tr>
            <td width="85%"><canvas id="myChart" style=""></canvas></td>
            <td>
            <h1>Histori</h1>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data Tegangan</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody id="data-table">					
                </tbody>
            </table>
            </td>
        </tr>
    </table>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['data', 'data', 'data', 'data', 'data', 'data', 'data', 'data', 'data', 'data', 'data'],
                datasets: [
                {
                    label: 'Voltage Monitor',
                    backgroundColor: 'rgb(0, 255, 251, 0.2)',
                    borderColor: 'rgb(0, 140, 255)',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                }
                ]
            },
            options: {
                scales : {
                    yAxes : [{
                        ticks: {
                            suggestedMax: 5,
                            suggestedMin:0,
                            stepSize: 0.5
                        }
                    }]
                },
                animation: {
                    duration: 4000,
                    easing: 'easeOutSine'
                }
            }
        });
        function addData(chart, label, data , avg) {
            chart.data.labels.push(label);
            chart.data.datasets.forEach((dataset) => {
                dataset.data.push(data);
            });
            chart.update();
        }
        function removeData(chart) {
            chart.data.labels.shift();
            chart.data.datasets.forEach((dataset) => {
                dataset.data.shift();
            });
            chart.update();
        }
    </script>
</body>

</html>