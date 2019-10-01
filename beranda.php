<ol class="breadcrumb">
	<li class="breadcrumb-item">
 	 <a href="#">Beranda</a>
	</li>
</ol>
<div class="card mb-3">
	<div class="card-header">
  		<i class="fa fa-table"> Chart </i> 
	</div>
</div>
<script type="text/javascript" src="Chart.js/Chart.js"></script>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Persiapan", "Pengadaan", "Pelaksanaan", "Selesai"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$persiapan = mysqli_query($konek,"SELECT * FROM proker WHERE rfi = 'v'");
					echo mysqli_num_rows($persiapan);
					?>, 
					<?php 
					$pengadaan = mysqli_query($konek,"SELECT * FROM proker WHERE pengadaan = 'v'");
					echo mysqli_num_rows($pengadaan);
					?>, 
					<?php 
					$pelaksanaan = mysqli_query($konek,"SELECT * FROM proker WHERE po = 'v'");
					echo mysqli_num_rows($pelaksanaan);
					?>, 
					<?php 
					$selesai = mysqli_query($konek,"SELECT * FROM proker WHERE selesai = 'v'");
					echo mysqli_num_rows($selesai);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>