<html>
<head>
<title>Upload Form</title>
</head>
<body>

<form action="<?php echo site_url('welcome/doupload')?>" enctype="multipart/form-data" method="post">

<input type="file" name="image"/>
<br /><br />

<input type="submit" value="upload" />


</form>

</body>
</html>