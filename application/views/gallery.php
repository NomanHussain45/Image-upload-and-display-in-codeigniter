<!DOCTYPE html>
<html>
<head>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>
<?php foreach($list as $u):?>
<div class="img">
  <a>
    <img src="<?php echo base_url()?>uploads/<?php echo $u->imagename?>" alt="<?php echo $u->imagename?>" height="auto" width="auto" style="height:200px;width:180px;">
  </a>
  
</div>
<?php endforeach?>



</body>
</html>
