<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Application;

class AdminManageApplications extends Component
{
    public function mount()
    {
        abort_unless(auth()->user()->role === 'admin', 403);
    }

    public function updateStatus($applicationId, $status)
    {
        $validated = validator(
            ['status' => $status],
            ['status' => 'required|in:Pending,Accepted,Rejected']
        )->validate();

        $application = Application::findOrFail($applicationId);

        $application->update([
            'status' => $validated['status'],
        ]);

       if ($validated['status'] === 'Accepted') {
    session()->flash('success', 'Application accepted successfully!');
} else {
    session()->flash('success', 'Application rejected successfully!');
}
    }

    public function render()
    {
        $applications = Application::with(['user', 'jobVacancy'])
            ->latest()
            ->get();

        return view('livewire.admin-manage-applications', compact('applications'));
    }
}
