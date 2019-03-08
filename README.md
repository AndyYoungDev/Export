## PHP导出下载
* PHP导出及下载，支持格式txt和excel(xlsx)
## Author
杨龙飞
## Wechat
ylf283598349
## Example
* composer require yang-longfei/export-file
~~~
$data=[
    ['id'=>1],
    ['id'=>2],
];
$obj=new ExportFile(new ExcelFile($data,$path));
$obj->export();

$obj=new ExportFile(new TxtFile($data,$path));
$obj->export();
~~~
## V1.0
* 添加自定义目录
## 设计思想
* 加入依赖注入，解耦
* 抽象类不再关注数据生成文件的实现