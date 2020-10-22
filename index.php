
<?php 
include "inc/config.php";
include "classe/page.php";
$ma_page=new Page();

$ma_page->prepare();

echo $ma_page;

?>