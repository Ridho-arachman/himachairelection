<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CandidateCard extends Component
{
    public $name;
    public $image;
    public $description;

    public function __construct($name, $image, $description)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.candidate-card');
    }
}
