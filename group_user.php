<?php
require_once('Colors.php');
require_once('Sizes.php');

$size = new Sizes();
$colors = new Colors();

 ?>

<body style="background-color:<?php echo $colors->getGray(); ?>">
  <p>Width: <font color="<?php echo $colors->getWhite(); ?>" >
  <?php echo $size->width; ?></font> </p>

  <p>Height: <font color="<?php echo $colors->getWhite(); ?>;" >
  <?php echo $size->height; ?></font> </p>

</body>
