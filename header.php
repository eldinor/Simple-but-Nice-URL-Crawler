<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">
<!-- Latest compiled and minified JavaScript
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<title>Simple but nice URL Crawler</title>
</head>

<body>

<div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="h5">
  <form class="form-inline" method="get" action="">
    <div class="form-group">
      <label for="siteurl">Site URL</label>
      <input type="text" name="siteurl" class="form-control" id="siteurl" placeholder="http://... ">
    </div>

    <div class="form-group">
      <label for="depth">Depth</label>
      <select class="form-control" id="depth" name="depth">
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
      </select>
    </div>

    <div class="form-group">
      <label for="filterpath">Filter Path</label>
      <input type="text" name="filterpath" class="form-control" id="filterpath" placeholder="#, for example, or mailto ">
    </div>

    <div class="form-group">
      <label for="exectime">Max execution time in seconds</label>
      <input type="text" name="exectime" class="form-control" id="exectime" placeholder="Default: 300 ">
    </div>

    <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>

  </form>
</div>
</div>
</div> <!-- end row -->

<div class="row">
  <div class="col-md-12">
