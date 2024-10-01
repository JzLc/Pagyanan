<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowUserModal extends Component
{
    public $isOpen = false;
    public $user;

    protected $listeners = ['openModal' => 'open'];

    public function open($userId)
    {
        $this->user = User::findOrFail($userId);  // Fetch the user details
        $this->isOpen = true;  // Open the modal
    }


    public function close()
    {
        $this->isOpen = false;
        $this->emit('modalClosed'); // Emit a close event if needed
    }

    public function render()
    {
        dd($this->user);
        return view('livewire.show-user-modal');
    }
}
