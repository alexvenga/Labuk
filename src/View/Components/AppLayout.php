<?php

namespace AlexVenga\Labuk\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{

    public function render(): View
    {
        return view('labuk::components.layouts.app');
    }

}
