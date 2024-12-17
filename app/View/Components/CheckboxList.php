<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CheckboxList extends Component
{
    public $items;

    /**
     * Create a new component instance.
     *
     * @param array $items
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.checkbox-list');
    }
}
