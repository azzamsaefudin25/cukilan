<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Header extends Component
{
    public $menuTerbuka = false;

    public function render()
    {
        return view('livewire.partials.header');
    }

    public function toggleMenu()
    {
        $this->menuTerbuka = !$this->menuTerbuka;
        $this->dispatch('menuToggled', $this->menuTerbuka);
    }
}
