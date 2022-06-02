<?php

namespace App\Http\Livewire\User\Learnjapan;

use Livewire\Component;

class FeaturedFactsComponent extends Component
{
    public function render()
    {
        return view('livewire.user.learnjapan.featured-facts-component')->layout('layouts.app');
    }
}
