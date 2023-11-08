<?php

namespace App\Livewire;

use Livewire\Component;

class SliderComponent extends Component
{
    public $slide = 1;
    public $totalSlides = 4;

    // public function nextSlide()
    // {
    //     $this->slide = ($this->slide === $this->totalSlides) ? 1 : $this->slide + 1;
        
    // }

    // public function previousSlide()
    // {
    //     $this->slide = ($this->slide === 1) ? $this->totalSlides : $this->slide - 1;
        
    // }

    public function nextSlide()
    {
        if ($this->slide < $this->totalSlides) {
            $this->slide++;
        }
    }

    public function previousSlide()
    {
        if ($this->slide > 1) {
            $this->slide--;
        }
    }

    public function render()
    {
        return view('livewire.slider-component');
    }
}

// class SliderComponent extends Component
// {
//     public $count = 0;

//     public function increment()
//     {
//         $this->count++;
//     }

//     public function decrement()
//     {
//         $this->count--;
//     }

//     public function render()
//     {
//         return view('livewire.slider-component');
//     }
// }

