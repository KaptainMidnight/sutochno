<?php

namespace App\Http\Livewire;

use App\Models\Facility;
use Livewire\Component;

class FacilityController extends Component
{
    public $facilities;

    public function mount()
    {
        $this->facilities = Facility::all();
    }

    public function render()
    {
        return view('livewire.facility-controller');
    }
}
