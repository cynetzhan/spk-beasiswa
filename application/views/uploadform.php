<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>
<?php echo $data;?>
<?php echo form_open_multipart('Publik/uploadfile');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>