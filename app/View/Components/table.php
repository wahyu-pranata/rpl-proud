<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class table extends Component
{
    public $headers;
    public $rows;
    public $tableID;
    /**
     * Create a new component instance.
     */
    public function __construct($headers = [], $rows = [], $tableID = '')
    {
        $this->headers = $headers;
        $this->rows = $rows;
        $this->tableID = $tableID;
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
