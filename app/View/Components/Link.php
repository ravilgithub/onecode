<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

/**
 * Link component.
 *
 * @property String  $to     - route name ( blog.show )
 * @property Array   $params - route params
 * @property String  $class  - CSS classes
 * @property Boolean $area   - HTML area-current attribute
 * @property Boolean $base   - route base name ( blog* )
 */
class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $to,
        public array  $params = [],
        public string $class  = '',
        public bool   $area   = false,
        public string $base   = '',
    ) {
        //
    }

    /**
     * Is active page?
     *
     * @return  Boolean
     */
    public function is_active(): bool
    {
        return Route::is($this->base ?: $this->to);
    }

    /**
     * Is area current?
     *
     * @return  Boolean
     */
    public function is_area(): bool
    {
        return $this->area && $this->is_active();
    }

    /**
     * Get Route URL.
     *
     * @return String
     */
    public function getRouteURL(): string
    {
        if (!empty($this->params))
            return route($this->to, $this->params);

        return route($this->to);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link');
    }
}
