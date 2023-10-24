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
    public $name;
    public $img;
    public $location;
    public $price;
    public $handover;
    public $propertyreference;
    public $type;
    public $slug;
    public $projtype;
    public $developer;

    public function __construct($id, $name, $img, $location, $price, $handover, $propertyreference, $type, $slug, $projtype, $developer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->location = $location;
        $this->price = $price;
        $this->handover = $handover;
        $this->propertyreference = $propertyreference;
        $this->type = $type;
        $this->slug = $slug;
        $this->projtype = $projtype;
        $this->developer = $developer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-project');
    }
}
