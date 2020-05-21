<html>
<head>
<title>Upload Form</title>
</head>

<?php echo $error;?>

<?php echo form_open_multipart('p9/do_upload');?>
<input type="file" name="userfile" size="20"/>
<br/><br/>
<input type="submit" value="upload"/>
<?php form_close();?>

</body>
</html>