<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewProject extends Component
{
    /**
     * Create a new component instance.
     */

    public $id;
    public $title;
    public $titlear;
    public $sluglink;  
    public $thumbnail;

    public function __construct($id, $title, $titlear, $sluglink, $thumbnail)
    {
        $this->$id = $id;
        $this->$title = $title;
        $this->$titlear = $titlear;
        $this->$sluglink = $sluglink;
        $this->$thumbnail = $thumbnail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-project');
    }
}
