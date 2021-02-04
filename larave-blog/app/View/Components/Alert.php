<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $alertType;
    public $message;
    public function __construct($alertType, $msg)
    {
        //
        $this->alertType = $alertType;
        $this->message = $msg;
    }

    public $calendar = 'blue'; 
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
        // return <<<'blade'
        //     <div {{ $attributes->merge(['class' => 'alert alert-'.$alertType]) }}>
        //         {{ $slot }}
        //     </div>
        // blade;
        // return view('form',['name'=>$this->calendar]);
    }
}
