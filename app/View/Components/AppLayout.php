<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;

    public function __construct($title = 'AMA')
    {
        $this->title = $title;
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
