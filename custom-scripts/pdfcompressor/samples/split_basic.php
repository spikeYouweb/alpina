<?php
//include the autoloader
require_once('../vendor/autoload.php');

use Ilovepdf\Ilovepdf;
use Ilovepdf\SplitTask;

// or you can call task class directly, this set the same tool as before
$myTask = new SplitTask("PUBLIC_KEY", "SECRET_KEY");

// file var keeps info about server file id, name...
// it can be used latter to cancel file
$file = $myTask->addFile('/path/to/file/document.pdf');

// set ranges to split the document
$myTask->setRanges("2-4,6-8");

// process files
// time var will have info about time spent in process
$time = $myTask->execute();

// and finally download file. If no path is set, it will be donwloaded on current folder
$myTask->download();