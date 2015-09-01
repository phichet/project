<html>
    <head></head>
    <body>
      
<div>
<?php//echo $error;?>

<?php echo form_open_multipart('index.php/upload_controller/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Upload" />
</div>
 
</body>

</html>

