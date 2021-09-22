<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MeetupCard extends Component
{
    public string $languageA;
    public string $languageB;
    public int $max;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($languageA, $languageB, $max)
    {
        $this->languageA = $languageA;
        $this->languageB = $languageB;
        $this->max = $max;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.meetup-card');
    }
}