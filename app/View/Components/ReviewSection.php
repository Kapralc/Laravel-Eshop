<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Review;

class ReviewSection extends Component
{
    public $reviews;

    public function __construct()
    {
        // Zde načteme recenze, nebo použij jiný způsob, jak je chceš načíst
        $this->reviews = Review::all();
    }

    public function render()
    {
        return view('components.review-section');
    }
}
