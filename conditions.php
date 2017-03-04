<?php
if (isset ($_GET['submit'])) {

   if ($_GET['siteurl'] =='') {
      echo '<div class ="enterurl bg-danger">Enter Site URL</div>';
   }
   else { $siteurl = $_GET['siteurl']; }

 if ($_GET['depth'] =='') {
      $depth = 3;
}
else {$depth = $_GET['depth'];}

   if (!$_GET['filterpath'] =='') {
      $filterpath = $_GET['filterpath'];
   }
   else {$filterpath = 'juststring'; }

   if ($_GET['exectime'] =='') {
    $exectime = 300;
   }
   else { $exectime = $_GET['exectime']; }
}
//$exectime = $_GET['exectime'];


?>
