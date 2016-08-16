<?php
namespace App\View;


use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder{

    protected $activeTheme;

    protected $basePath;

    /**
     * @param mixed $basePath
     */
    public function setBasePath($path)
    {
        $this->basePath = $path;
    }

    /**
     * @param mixed $activeTheme
     */
    public function setActiveTheme($theme)
    {
        $this->activeTheme = $theme;

        array_unshift($this->paths, $this->basePath.'/'.$theme.'/views');
    }
}
