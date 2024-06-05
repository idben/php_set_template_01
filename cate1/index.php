<?php
  include "../vars.php";
  $cateNum = 0;
  $pageTitle = "{$cate_ary[$cateNum]} 管理";
  include "../template_top.php";
  include "../template_nav.php";
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
  啟動放在樣版中的 Modal
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
  啟動放在樣版中的 Modal
</button>
<!-- Modal -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-primary-subtle">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer border-top-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
  include "../template_btm.php";
?>