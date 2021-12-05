<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-services-component', ['services' => $services])->layout('layouts.base');
    }
}
