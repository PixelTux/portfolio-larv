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
                'category' => ['php', 'Laravel', 'JavaScript', 'CSS', 'Tailwind', 'Livewire', 'Alpinejs', 'TailGrids', 'Linux', 'Apache'],
                'title' => 'Portfolio',
                'image' => '/img/portfolio/PixelTux.png',
                'link' => 'https://github.com/PixelTux/portfolio-larv'
            ],
            [
                'category' => ['Java', 'SpringBoot', 'Bootstrat', 'JavaScript', 'JQuery', 'CSS', 'Tomcat', 'Jetty', 'Eclipse', 'Linux'],
                'title' => 'E-commerce',
                'image' => '/img/portfolio/NotEatYet.jpg',
                'link' => 'https://github.com/laura960/not-eat-yet/'
            ],
            [
                'category' => ['Python', 'Tkinter', 'Linux'],
                'title' => 'PDF compressor',
                'image' => '/img/portfolio/reducedPDF.png',
                'link' => 'https://github.com/PixelTux/reducedPDF-python'
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
