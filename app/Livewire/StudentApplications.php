<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Application;

class StudentApplications extends Component
{
    public function render()
    {
        $applications = Application::with('jobVacancy')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('livewire.student-applications', [
            'applications' => $applications
        ]);
    }
}
