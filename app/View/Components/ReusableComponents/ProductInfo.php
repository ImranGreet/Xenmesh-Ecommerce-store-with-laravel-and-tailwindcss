<?php

namespace App\View\Components\ReusableComponents;

use Illuminate\View\Component;

class ProductInfo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $productInfo;
    public function __construct($productInfo)
    {
        $this->productInfo = $productInfo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reusable-components.product-info');
    }
}