<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ViewCustomers extends Component
{
    public $getRecord = [];
    
    public function mount($id)
    {
        $this->getRecord = User::find($id);
    }
    public function render()
    {
        return view('livewire.view-customers');
    }
}
