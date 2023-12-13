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

    public $img;
    public $logo;
    public $name;
    public $location;  
    public $id;

    public function __construct($img, $logo, $name, $location, $id)
    {
        $this->img = $img;
        $this->logo = $logo;
        $this->name = $name;
        $this->location = $location;  
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-project');
    }
}
