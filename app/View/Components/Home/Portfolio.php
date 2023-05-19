<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Vue', 'Tailwind'],
                'title' => 'E-commerce',
                'image' => '/img/io.png',
                'link' => 'https://ecommerce-laravel.herokuapp.com/'
            ],
            [
                'category' => ['Laravel', 'Alpine.js', 'Bootstrat'],
                'title' => 'E-commerce',
                'image' => '/img/io.png',
                'link' => 'https://ecommerce-laravel.herokuapp.com/'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
