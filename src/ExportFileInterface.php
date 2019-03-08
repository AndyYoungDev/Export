<?php
/**
 * Created by PhpStorm.
 * User: Yii
 * Date: 2019/3/2
 * Time: 12:46
 */

namespace ExportFile;


abstract class ExportFileInterface
{
    protected $extension;
    protected $filename;
    protected $data;
    protected $path;
    public abstract function export();
    public function __construct($data,$path="./")
    {
        $this->data = $data;
        $this->path = $path;
    }
    public function setExtension($extension)
    {
        $this->extension=$extension;
    }
    public function setFilename(){
        $this->filename=$this->path.DIRECTORY_SEPARATOR.$this->generate().$this->extension;
    }
    public function generate(){
        return uniqid();
    }
    public function download(){
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length: " . filesize($this->filename));
        Header("Content-Disposition: attachment; filename=" . basename($this->filename));
        readfile($this->filename);
        exit();
    }
}