<?php
namespace App\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function mount()
    {
        abort_unless(auth()->user()?->role === 'admin', 403);
    }

    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
