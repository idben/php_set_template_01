<?php
  include "../vars.php";
  $cateNum = 1;
  $cssList = ["./cate2/cate2.css"];
  $jsList = ["./cate2/cate2.js"];
  $pageTitle = "{$cate_ary[$cateNum]} 管理";
  include "../template_top.php";
  include "../template_nav.php";
?>
<div class="myBtn">按鈕</div>
<?php
  include "../template_btm.php";
?>