<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Product extends Component
{

    public $title;
    public $price;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title='',$price=0,$id=0)
    {
        $this->title=$title;
        $this->price=$price;
        $this->id=$id;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}
