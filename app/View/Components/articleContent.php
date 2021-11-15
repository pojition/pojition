<?php

namespace App\View\Components;

use Illuminate\View\Component;

class articlecontent extends Component
{
    public $title_slot;
    public $articles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($articles, $titleslot)
    {
        $this->title_slot = $titleslot;
        $this->articles = $articles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.articlecontent');
    }
}
