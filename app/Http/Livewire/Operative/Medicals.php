<?php

namespace App\Http\Livewire\Operative;

use App\Models\Medical;
use Livewire\Component;
use Livewire\WithPagination;

class Medicals extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $selected_id, $search, $dateFilter;

    public function render()
    {
        $medicals = Medical::paginate(15);

        return view('livewire.operative.medical.component', compact('medicals'));
    }
}
