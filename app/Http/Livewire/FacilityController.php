<?php

namespace App\Http\Livewire;

use App\Models\Facility;
use App\Models\Favorite;
use Livewire\Component;
use Livewire\WithPagination;

class FacilityController extends Component
{
    use WithPagination;

    public $facilities;

    protected $listeners = ['facility-search' => 'facilitySearch'];

    public function mount()
    {
        $this->facilities = Facility::all();
    }

    public function render()
    {
        return view('livewire.facility-controller');
    }

    public function setFavorite($facilityId)
    {
        $favorite = Favorite::where('facility_id', $facilityId)->where('user_id', auth()->id())->count();
        if ($favorite === 0) {
            Favorite::create([
                'user_id' => auth()->id(),
                'facility_id' => $facilityId,
            ]);
        }
    }

    public function facilitySearch($facilities)
    {
        $this->facilities = $facilities;
    }
}
