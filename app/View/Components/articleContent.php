<?php

namespace App\View\Components;

use Illuminate\View\Component;

class articlecontent extends Component
{
    public $title;
    public $articles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $articles)
    {
        $this->title = $title;
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
