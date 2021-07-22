<?php

namespace App\Http\Livewire;

use App\Models\Facility;
use Livewire\Component;

class FacilityFilterComponent extends Component
{
    public $price;
    public $city;

    public function render()
    {
        return view('livewire.facility-filter-component');
    }

    public function search()
    {
        $facilities = Facility::where('price', '<', $this->price)->where('city', $this->city)->get();
        $this->emit('facility-search', $facilities);
    }
}
