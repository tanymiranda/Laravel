<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component; 

class Panel extends Component
{
     public $title;
    
    public function __construct($title = null)
    {
        $this->title = $title;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.panel');
    }
}
