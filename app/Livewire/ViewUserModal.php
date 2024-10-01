<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ViewUserModal extends Component
{
    public $isOpen = false;
    public $user;

    protected $listeners = ['openModal' => 'open'];

    public function open(User $user)
    {
        $this->user = $user; 
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.view-user-modal');
    }
}
