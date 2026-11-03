<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\JobVacancy;
use App\Models\Application;

class JobOpportunities extends Component
{
    public function apply($jobId)
    {
        $job = JobVacancy::findOrFail($jobId);

        $user = auth()->user();

        $alreadyApplied = $user->applications()
            ->where('job_vacancy_id', $job->id)
            ->exists();

        if ($alreadyApplied) {
            session()->flash('error', 'You have already applied for this job.');
            return;
        }

        $user->applications()->create([
            'job_vacancy_id' => $job->id,
            'status' => 'Pending',
        ]);

        session()->flash('success', 'Your application has been submitted successfully!');
    }

    public function render()
    {
        $jobs = JobVacancy::latest()->get();

        return view('livewire.job-opportunities', compact('jobs'));
    }
}
