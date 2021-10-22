<?php
/*
Template name: Главная
*/
require_once('header.php');


?>
<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();

?>



<?php
  }
} else {
  require('404.php');
}
?>
<?php
require_once('footer.php');
