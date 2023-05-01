<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ETFButton extends Component
{

    public $offsetLeft;
    public $clientWidth;

    public function mount()
    {
        $this->dispatchBrowserEvent('buttonMounted');
    }

    public function updatedOffsetLeft($value)
    {
        $this->offsetLeft = $value;
    }

    public function updatedClientWidth($value)
    {
        $this->clientWidth = $value;
    }

    public function render()
    {
        return view('livewire.e-t-f-button', [
            'class' => 'pt-2 pb-3 border-0 bg-transparent',
        ]);
    }
}
