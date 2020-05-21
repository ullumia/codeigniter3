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
			<a class="<?=(($title=='Home')?"active":"")?> item" href="/ci/index.php/p6">HOME</a>
			<a class="<?=(($title=='FORM')?"active":"")?> item" href="/ci/index.php/p6">FORM</a>
		</div>
	</div>
	<div class="pusher">
		<div class="ui two column grid">
			<div class="two wide column"></div>
			<div class="eight wide column">
				<?=form_open("/p5/save")?>
				<table class="ui celled table">
					<tr>
						<td>Nama</td>
						<td><?=form_input( array('name' =>"name", "class"=>"ui input large") )?></td>
					</tr>
					<tr>
						<td>No Hp</td>
						<td><?=form_input( array('name' =>"phone", "class"=>"ui input large") )?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?=form_textarea( array('name' =>"address", "class"=>"ui input large") )?></td>
					</tr>
					<tr>
						<td>Makanan Favorit</td>
						<td>
						<?=form_checkbox( array('name' =>"Es krim", "class"=>"ui input large") )?> Es krim<br>
						<?=form_checkbox( array('name' =>"Es krim", "class"=>"ui input large") )?> Buble tea<br>
						<?=form_checkbox( array('name' =>"Es krim", "class"=>"ui input large") )?> Martabak keju<br>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><?=form_submit('submit','Save', array("class"=>"ui primary button"))?></td>
					</tr>
				</table>
				<?form_close()?>
			</div>
		</div>
	</div>
</body>
</html>