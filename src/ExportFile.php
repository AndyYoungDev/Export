<?php
/**
 *
 * PHP导出数据
 * 1.txt格式、xlsx格式
 *
 * ---------------
 * 默认下载到downloads文件夹
 * $export=new ExportFile($data,ExportFile::XLSX);
 * $export->export();
 * ---------------
 *
 * User: Jack Yang
 * Date: 2019/3/2
 * Time: 8:39
 *
 */

namespace ExportFile;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportFile
{
    private $exportObj;

    public function __construct(ExportFileInterface $exportObj)
    {
        $this->exportObj = $exportObj;
    }
    public function export()
    {
        $this->exportObj->export();
    }
}