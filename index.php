<!DOCTYPE html>
<html lang="fr">
<head>  
    <title>Facebook_clone</title>
    
<link rel="icon" href="https://s2.qwant.com/thumbr/0x380/6/0/9e22c1b9d6b7c0eb3ad3dc7154ba903d77720da6af7206a58f91676ef5b11a/1200px-Facebook_logo_36x36.svg.png?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Ff%2Fff%2FFacebook_logo_36x36.svg%2F1200px-Facebook_logo_36x36.svg.png&q=0&b=1&p=0&a=1" type="image/gif" sizes="16x16">
</head>
<body>
  <?php 
   include("link.html");
  ?>
  </div>
<div id="body"   @mouseover="position_mouse"> 

<?php    
 include("model/class/php/Class.php");  
?>
<header>
    <?php        
        include("view/header.php");
    ?>
</header>
<section>
    <?php       
        include("view/section.php");
    ?>
</section>
<footer>
    <?php       
         include("view/footer.php");          
    ?>
</footer>

</div>
<script src="vue.js"></script>
<script src="model/class/js/bdd_exe_test.js"></script>
<?php 
if($config_==false){ 
echo '<link rel="stylesheet" href="model/css/remove_body.css">';
 }
?>
 

 <style>
     .taille-s {
         font-size:15px;
     }
 </style>
</body>
</html>