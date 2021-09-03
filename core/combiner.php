<?php
class Combiner
{
    public function combineScript($scripts = null)
    {
        foreach ($scripts as $script) {
            echo '<script type="text/javascript" src="/js/' . $script . '.js"></script>';
        }
    }
    public function combineStyle($styles = null)
    {
        foreach ($styles as $style) {
            echo '<link rel="stylesheet" href="/css/' . $style . '.css">';
        }
    }
}

