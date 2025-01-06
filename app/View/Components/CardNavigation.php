<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardNavigation extends Component
{
    public $href;
    public $iconPath;
    public $title;
    public $description;

    public function __construct($href, $iconPath, $title, $description)
    {
        $this->href = $href;
        $this->iconPath = $iconPath;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-navigation');
    }
}
