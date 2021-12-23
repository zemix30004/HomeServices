<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;


    public function render()
    {
        $contacts = Contact::paginate(15);
        return view('livewire.admin.admin-contact-component', ['contacts' => $contacts])->layout('layouts.base');
    }
}
