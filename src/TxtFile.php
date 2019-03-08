<?php
/**
 * User: Jack Yang
 * Date: 2019/3/8
 * Time: 12:56
 */

namespace ExportFile;


class TxtFile extends ExportFileInterface
{
    const TXT = '.txt';

    public function export()
    {
        $this->setExtension(self::TXT);
        $this->setFilename();
        // TODO: Implement export() method.
        try {
            $fileHandle = fopen($this->filename, "w");
            foreach ($this->data as $line) {
                $content = implode("-", $line);
                fwrite($fileHandle, $content . "\r\n");
            }
            fclose($fileHandle);
            $this->download();
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), 500);
        }
    }
}