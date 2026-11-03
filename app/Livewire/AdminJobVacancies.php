<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\JobVacancy;

class AdminJobVacancies extends Component
{
    public $job_title = '';
    public $company_name = '';
    public $location = '';
    public $salary = '';
    public $description = '';
    public $qualification = '';
    public $deadline = '';

    public function mount()
{
    abort_unless(auth()->user()->role === 'admin', 403);
}
    public function save()
    {
        $validated = $this->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
            'description' => 'required|string',
            'qualification' => 'required|string|max:255',
            'deadline' => 'nullable|date',
        ]);
    $validated['deadline'] = $validated['deadline'] ?: null;

        JobVacancy::create($validated);

        $this->reset();

        session()->flash('success', 'Job vacancy added successfully!');
    }

    public function render()
    {
        return view('livewire.admin-job-vacancies');
    }
}
