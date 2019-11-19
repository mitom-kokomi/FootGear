<?php
if ($currentpage > 3) {
  $firstpage = 1;
  ?>
  <li class="page-item"><a href="?perpage=<?=$perpage?>&page=<?=$firstpage?> " class="page-link">First</a></li>
  <?php
}
if ($currentpage > 1) {
  $prevpage = $currentpage - 1;
  ?>
  <li class="page-item"><a href="?perpage=<?= $perpage ?>&page=<?=$prevpage?> " class="page-link">Prev</a></li>

<?php }
 ?>
 <?php
    for ($num = 1 ; $num <= $totalpage ; $num ++){ ?>
      <?php if ($num != $currentpage){?>
        <?php if ($num > $currentpage - 3 && $num < $currentpage +3) {?>
          <li class="page-item"><a href="?perpage=<?= $perpage ?>&page=<?=$num?> " class="page-link"><?=$num?></a></li>

        <?php } ?>
      <?php } else { ?>
        <li class="page-item"><strong class="current-page page-link"><?=$num?></strong></li>

      <?php } ?>
<?php } ?>
<?php
if ($currentpage < $totalpage -1){
  $nextpage = $currentpage + 1;
  ?>
  <li class="page-item"><a href="?perpage =<?= $perpage ?>&page=<?=$nextpage?> " class="page-link">Next</a></li>

  <?php
}
if ($currentpage < $totalpage -3){
  $lastpage = $totalpage;
  ?>
  <li class="page-item"><a href="?perpage = <?= $perpage ?>&page=<?=$lastpage?> " class="page-link">Last</a></li>

  <?php
}
?>
