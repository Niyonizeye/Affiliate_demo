<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PackageComponent extends Component
{
    public function render()
    {
        dd(Auth::user());
         $user = Auth::user();

        return view('livewire.package-component', ['user'=>$user])->layout('layouts.user-base');
    }
}
