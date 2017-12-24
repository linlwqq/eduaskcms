<?php
namespace app\common\controller;

class Assign
{
    public $VarsReturned = false;
    public $js = array();
    public $css = array();
    public $defer_js = array();

    public function addJs($path, $defer = false)
    {
        if ($defer) {
            array_push($this->defer_js, $path);
            $this->defer_js = array_unique($this->defer_js);
        } else {
            array_push($this->js, $path);
            $this->js = array_unique($this->js);
        }
    }

    public function removeJs($path, $defer = false)
    {
        if ($defer) {
            $this->defer_js = array_diff($this->defer_js, [$path]);
        } else {
            $this->js = array_diff($this->js, [$path]);
        }
    }

    public function addCss($path)
    {
        array_push($this->css, $path);
    }

    public function removeCss($path)
    {
        $this->css = array_diff($this->css, [$path]);
    }

}
