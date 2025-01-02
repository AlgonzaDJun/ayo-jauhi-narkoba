<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CongratulationsCard extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $message;
    public $subtitle;
    public $stars;
    public $footer;

    public function __construct($title, $message, $subtitle, $stars = 3, $footer = '')
    {
        $this->title = $title;
        $this->message = $message;
        $this->subtitle = $subtitle;
        $this->stars = $stars;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.congratulations-card');
    }
}
