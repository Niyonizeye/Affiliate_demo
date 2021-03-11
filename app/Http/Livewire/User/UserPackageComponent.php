<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserPackageComponent extends Component
{
    public function ChangeIsPay()
    {

        $loggedUser = User::where('id',Auth::user()->id)->first();
        $loggedUser->has_paid_package = 'yes';
        $loggedUser->save();
        return redirect()->route('user.dashboard')->with('welcome_msg','thank  you for trading with Muhahe-Affiliate');

    }

    public function render()
    {

        return view('livewire.user.user-package-component')->layout('layouts.user-dashboard-base');
    }
}
