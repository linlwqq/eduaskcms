<?php
namespace app\common\helper;

class Html
{

    private $root;
    private $absroot;
    public $cssDir = 'css';
    public $jsDir = 'js';


    public function __construct()
    {
        $this->root = (substr(request()->root(), -10) != '/index.php' ? request()->root() : substr(request()->root(), 0, -10));
        $this->absroot = (substr(request()->root(true), -10) != '/index.php' ? request()->root(true) : substr(request()->root(true), 0, -10));
    }

    ##加载css文件
    public function css($css, $abs = false)
    {
        if (!$css) {
            return false;
        }

        $links = '';
        foreach ((array)$css as $file) {
            $file = strval($file);
            if (strpos($file, 'http://') === false && strpos($file, 'https://') === false) {
                $links .= sprintf("\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"%s%s%s%s\" />", $abs ? $this->absroot : $this->root, strpos($file, '/') === 0 ? '' : '/' . $this->cssDir . '/', $file, $this->getExt($file) == 'css' ? '' : '.css');
            } else {
                $links .= sprintf("\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"%s%s\" />", $file, $this->getExt($file) == 'css' ? '' : '.css');
            }
        }
        return $links;
    }

    ##加载js文件
    public function script($js, $abs = false)
    {
        if (!$js) {
            return false;
        }

        $scripts = '';
        foreach ((array)$js as $file) {
            $file = strval($file);
            if (strpos($file, 'http://') === false && strpos($file, 'https://') === false) {
                $scripts .= sprintf("\r\n<script type=\"text/javascript\" src=\"%s%s%s%s\"></script>", $abs ? $this->absroot : $this->root, strpos($file, '/') === 0 ? '' : '/' . $this->jsDir . '/', $file, $this->getExt($file) == 'js' ? '' : '.js');
            } else {
                $scripts .= sprintf("\r\n<script type=\"text/javascript\" src=\"%s%s\"></script>", $file, $this->getExt($file) == 'js' ? '' : '.js');
            }
        }
        return $scripts;
    }

    private function getExt($file)
    {
        $fileArr = explode('.', $file) ;
        return strtolower(array_pop($fileArr));
    }

}
