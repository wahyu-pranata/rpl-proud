<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    public $tabs;
    public $dbtop;
    public $dbbottom;
    /**
     * Create a new component instance.
     */
    public function __construct($tabs = [], $dbtop = 'deni', $dbbottom = '23056')
    {
        $this->tabs = $tabs;
        $this->dbtop = $dbtop;
        $this->dbbottom = $dbbottom;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
};
