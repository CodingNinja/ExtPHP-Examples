<?php

/*
 * ExtPHP - ExtJS PHP Wrapper
 * 
 * (c) David Mann <ninja@codingninja.com.au>
 *
 * This file is part of the ExtPHP library.
 * For the full license. Please see the license file bundled
 * with the source code
 */
namespace PHPJs;
use \PHPJs\Manager\Storage;
include('bootstrap.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="David Mann" />
  <link rel="stylesheet" href="/bin/assets/css/ext-all.css" type="text/css" />

	<title>Untitled 1</title>
  <script type="text/javascript" src="/bin/assets/js/ext-base.js"></script>
  <script type="text/javascript" src="/bin/assets/js/ext-all-debug.js"></script>
</head>

<body>
<?php echo Storage::output(array('dashboard' => array('after' => $component->getUuid() . '.show();'))); ?>
</body>
</html>