<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>P5 - <?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>
<body>
	<div class="ui top menu">
		<div class="ui container">
			<a class="<?=(($title=='Home')?"active":"")?> item" href="/ci/index.php/p5">HOME</a>
			<a class="<?=(($title=='FORM')?"active":"")?> item" href="/ci/index.php/p5">FORM</a>
		</div>
	</div>
	<div class="pusher">
		<div class="ui two column grid">
			<div class="two wide column"></div>
			<div class="eight wide column">
				<table class="ui celled table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="Name">Marie</td>
							<td data-label="Address">1707 Black Oak Hollow Road</td>
							<td data-label="Phone">4087426941</td>
						</tr>
						<tr>
							<td data-label="Name">Jill</td>
							<td data-label="Address">882 Brighton Circle Road</td>
							<td data-label="Phone">4087426941</td>
						</tr>
						<tr>
							<td data-label="Name">Belle</td>
							<td data-label="Address">3594 Bagwell Avenue</td>
							<td data-label="Phone">4087426941</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
