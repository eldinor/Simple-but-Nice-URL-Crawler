<?php
require_once ('header.php'); //  HTML stuff
require_once ('conditions.php'); //  Conditions check


require_once ('crawl.php');

$file = fopen("crawldata.csv","w+"); // clear .csv file content after function from class wrote to it last time
fclose($file);

ini_set('max_execution_time', $exectime); //300 seconds = 5 minutes
// USAGE
$startURL = $siteurl;
$depth = $depth;
$username = 'user';
$password = 'password';
$crawler = new crawler($startURL, $depth);
$crawler->setHttpAuth($username, $password);
// Exclude path with the following structure to be processed
$crawler->addFilterPath($filterpath);
echo '<h3>Results</h3>';
echo '<table class="the-table table table-condensed table-hover table-striped">';
echo '<tr><th width="10%">##</th><th width="10%">Code</th><th width="10%">Time</th><th width="10%">Depth</th><th>URL</th></tr>';
$crawler->run();
echo '</table>'; //  End of class function cycle
?>

</div>
</div> <!-- end row -->
<hr>
<div class="row">
  <div class="col-md-6">

END OF CRAWLING<br>
<br>
<?
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start);

echo '<p><strong>URL: </strong>';
echo '<a href="'.$_GET['siteurl'].'" target="_blank">'.$_GET['siteurl'].'</a><br>';
echo '<strong>Depth:</strong> '.$depth. '<br><strong>FilterPath:</strong> '.$_GET['filterpath'].'</p>';

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' seconds <br>';
?>
</div>
  <div class="col-md-6">
<?php
  if (!$_GET['siteurl'] =='') {
require_once ('csv.php');

$csv = new Csv();
$csv->load('crawldata.csv');
$data = $csv->columns();
$resp = $data [1];
// var_dump($resp);

// Test Data
$exampleArr = $resp;
$exampleArr = array_count_values($exampleArr); // array_count_values to get count
$labelArr = array();
$valueArr = array();



          foreach($exampleArr as $key => $value) {
            array_push($labelArr, $key);
            array_push($valueArr, $value);
          }
  }

 ?>

 <div class="php-chart" style="width: 400px; font-family: arial;"></div>
 <script>

 // Data uses the two PHP arrays created
 var data = {
   labels: <?php echo json_encode($labelArr) ?>,
   series: [
     <?php echo json_encode($valueArr); ?>
   ]
 };

 var options = {
   seriesBarDistance: 10
 };

 var responsiveOptions = [
   ['screen and (max-width: 640px)', {
     seriesBarDistance: 5,
     axisX: {
       labelInterpolationFnc: function (value) {
         return value[0];
       }
     }
   }]
 ];

 new Chartist.Bar('.php-chart', data, options, responsiveOptions);

 </script>



  </div>
<a href="crawldata.csv" class="btn btn-info">Save CSV</a>
</div>
</body>
</html>
