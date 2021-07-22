<?php

namespace App\Http\Livewire;

use App\Models\Facility;
use App\Models\View;
use Livewire\Component;

class FacilityShowController extends Component
{
    public $facility;

    public function mount(Facility $facility)
    {
        $views = View::where('facility_id', $facility->id)->where('user_id', auth()->id())->count();
        if ($views === 0) {
            View::create([
                'user_id' => auth()->id(),
                'facility_id' => $facility->id,
                'time' => now()
            ]);
        }
        $this->facility = $facility;
    }

    public function render()
    {
        return view('livewire.facility-show-controller');
    }
}
