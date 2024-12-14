<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class datacard extends Component
{
    public $rows;
    public $tableID;
    /**
     * Create a new component instance.
     */
    public function __construct($rows = [], $tableID = '')
    {
        $this->rows = $rows;
        $this->tableID = $tableID;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-card');
    }
}
