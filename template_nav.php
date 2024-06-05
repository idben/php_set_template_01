<style>
  nav{
    position: fixed;
    top: 100px;
    left: 0;
    ul{
      list-style-type: none;
      padding: 0;
      margin: 0;
      li{
        width: 100px;
        margin-bottom: 4px;
        i {
          margin-right: 5px;
        }
        a {
          display: block !important;
        }
      }
    }
  }
</style>
<nav>
  <ul>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==0?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/cate1"><i class="fa-solid fa-house"></i><?=$cate_ary[0]?></a></li>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==1?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/cate2"><i class="fa-solid fa-magnifying-glass"></i><?=$cate_ary[1]?></a></li>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==2?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/cate3"><i class="fa-solid fa-user"></i><?=$cate_ary[2]?></a></li>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==3?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/cate4"><i class="fa-regular fa-user"></i><?=$cate_ary[3]?></a></li>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==4?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/cate5"><i class="fa-brands fa-facebook"></i><?=$cate_ary[4]?></a></li>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==5?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/cate6"><i class="fa-brands fa-twitter"></i><?=$cate_ary[5]?></a></li>
    <li><a class="btn btn-primary rounded-0 rounded-end <?=$cateNum==-1?"btn-danger":""?>" href="<?=$cateNum==-1?".":".."?>/"><i class="fa-solid fa-cloud"></i>首頁</a></li>
  </ul>
</nav>