<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <!-- Site Title-->
    <title>Grupo Coser</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo IMAGES; ?>logos/dos.jpg" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo FONTS; ?>font.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>style.css">
</head>
<body>
<!-- Page-->
<div class="page text-center">

    <?php require_once TEMPLATE . 'top_menu.php'; ?>

    <?php echo $yield; ?>

    <?php require_once TEMPLATE . 'footer.php'; ?>

</div>
<!-- Java script-->
<script src="<?php echo JS; ?>core.min.js"></script>
<script src="<?php echo JS; ?>script.js"></script>
<!-- begin olark code-->
</body>
</html>
