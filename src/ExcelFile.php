<?php
/**
 * User: Jack Yang
 * Date: 2019/3/8
 * Time: 12:56
 */

namespace ExportFile;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelFile extends ExportFileInterface
{
    const XLSX = '.xlsx';
    public function export()
    {
        $this->setExtension(self::XLSX);
        $this->setFilename();
        // TODO: Implement export() method.
        try {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            foreach ($this->data as $key => $item) {
                $character = "A";
                $item = array_values($item);
                for ($i = 0; $i < count($item); $i++) {
                    $sheet->setCellValue($character . ($key + 1), $item[$i]);
                    $character++;
                }
            }
            $writer = new Xlsx($spreadsheet);
            $writer->save($this->filename);
            $this->download();
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), 500);
        }
    }
}