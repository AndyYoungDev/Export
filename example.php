<?php
/**
 * User: Jack Yang
 * Date: 2019/3/3
 * Time: 5:59
 */

use ExportFile\ExcelFile;
use ExportFile\ExportFile;
use ExportFile\TxtFile;

include_once "./vendor/autoload.php";
$data=[
    ['id'=>1],
    ['id'=>2],
];


$obj=new ExportFile(new ExcelFile($data,'./path'));
$obj->export();


$obj=new ExportFile(new TxtFile($data,'./path'));
$obj->export();
