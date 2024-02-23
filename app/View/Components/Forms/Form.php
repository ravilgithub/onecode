<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Form component
 *
 * @property String $action - action attribute value
 * @property String $method - method attribute value
 */
class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $action = '',
        public string $method = 'GET'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.form');
    }
}
