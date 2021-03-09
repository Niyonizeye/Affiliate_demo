<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Livewire\Component;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request as HttpRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Laravel\Fortify\Contracts\CreatesNewUsers;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public $sponsor = [];
    public $test;

    public function GetSponsorOnRegister(){
         $url = new HttpRequest();
         return $url->fullUrl();

    }

    public function GenerateRefee(){

        $config = ['table' => 'users', 'length'=> 9, 'prefix'=>date('ym')];
        $myRefferId = IdGenerator::generate($config);
        return $myRefferId;

    }

    public function getReferedUser(){
        $data_input =  Request::all();
        $refree = $data_input['sponsor'];
        $user_ref = User::where(['sponsor'=>$refree])->get()->find(1);
        return $user_ref;
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'sponsor' => ['required','exists:users,referee_id'],
            'country' => 'required',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'sponsor' => $input['sponsor'],
            'referee_id' => $this->GenerateRefee(),
            'under_user_email' => $this->getReferedUser()['email'],
            'side' => 'right',
            'country_id' => $input['country'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

