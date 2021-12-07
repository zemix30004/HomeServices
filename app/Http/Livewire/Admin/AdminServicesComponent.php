<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;

    public function deleteService($service_id)
    {
        $service = Service::find($service_id);
        if ($service->thumbnai) {
            unlink('images/services/thumbnails' . '/' . $service->thumbnail);
        }
        if ($service->image) {
            unlink('images/services' . '/' . $service->image);
        }
        $service->delete();
        session()->flash('Service has been deleted successfully!');
    }
    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-services-component', ['services' => $services])->layout('layouts.base');
    }
}
