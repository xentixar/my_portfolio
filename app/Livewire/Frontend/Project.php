<?php

namespace App\Livewire\Frontend;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Project extends Component
{
    public $repos;

    public function render()
    {
        $request = Http::get('https://api.github.com/users/xentixar/repos');
        $this->repos = $request->json();
        return view('livewire.frontend.project', ['repos' => $this->repos]);
    }
}
