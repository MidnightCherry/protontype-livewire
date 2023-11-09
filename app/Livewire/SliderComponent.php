<?php

namespace App\Livewire;

use Livewire\Component;

class SliderComponent extends Component
{
    public $sliders = [
        1 => ['currentSlide' => 1],
        2 => ['currentSlide' => 1],
    ];
    public $totalSlides = 4;
    public $activeSlider = 1;

    public $buttons = [
        ['bgColor' => 'white', 'textColor' => 'white'],
        ['bgColor' => 'gray-400', 'textColor' => 'gray-400'],
        ['bgColor' => 'gray-700', 'textColor' => 'gray-700'],
        ['bgColor' => 'blue-600', 'textColor' => 'blue-600'],
        ['bgColor' => 'yellow-600', 'textColor' => 'yellow-600'],
        ['bgColor' => 'red-600', 'textColor' => 'red-600'],
    ];
    

    public function switchSlider($sliderNumber)
    {
        if ($sliderNumber != 0) {
            $this->activeSlider = $sliderNumber;
            $this->sliders[$sliderNumber]['currentSlide'] = 1;
        } else 
        $this->sliders[$this->activeSlider]['currentSlide'] = 1;
    }

    public function goToSlide($sliderNumber, $slide)
    {
        $this->sliders[$sliderNumber]['currentSlide'] = $slide;
    }

    public function changeSlide($sliderNumber, $direction)
    {
        $currentSlide = &$this->sliders[$sliderNumber]['currentSlide'];
        $currentSlide = $direction === 'next' 
            ? ($currentSlide % $this->totalSlides) + 1 
            : ($currentSlide === 1 ? $this->totalSlides : $currentSlide - 1);
    }

    public function render()
    {
        return view('livewire.slider-component');
    }
}
