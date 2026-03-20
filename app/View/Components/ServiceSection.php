<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceSection extends Component
{
    /**
     * Create a new component instance.
     */
   public $services;

    public function __construct($services)
    {
        $this->services = $services;
    }

    public function render()
    {
        return view('components.service-section');
    }
}
