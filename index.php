<html>
	<head>
		<title>Exploration 4</title>
		
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.3/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.js"></script>
	</head>
	<body>
		<h2>2014 NL Central Division Standings</h2>
		<table id="standings" class="display">
			<thead>
				<tr>
					<th>Entry</th>
					<th>Random Number</th>
					<th>Data</th>
					<th>Other Data</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for($i = 0; $i < 150; $i++){
				?>
				<tr>
					<td><? echo ($i + 1); ?> </td>
					<td><? echo rand(0, 50); ?> </td>
					<td><? echo rand(1000, 2000); ?> </td>
					<td><? echo (150 - $i); ?> </td>
				</tr>
				<?
					}
				?>
			</tbody>
		</table>
		
		<script type = 'text/javascript'>
			$(document).ready(function() {
					$('#standings').DataTable();
			});
			$('#standings').DataTable( {
				paging: true,
				scrollY: 400,
				stateSave: true
			} );
		</script>
	</body>
</html>