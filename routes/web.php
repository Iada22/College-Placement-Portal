
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\RegisterPage;
use App\Livewire\HomePage;
use App\Livewire\Login;
use App\Livewire\AdminJobVacancies;

Route::middleware('auth')->group(function () {

    Route::get('/admin/job-vacancies', AdminJobVacancies::class)
        ->name('admin.jobs');

      Route::get('/admin/manage-applications', \App\Livewire\AdminManageApplications::class)
    ->name('admin.applications');

    Route::get('/admin/dashboard', \App\Livewire\AdminDashboard::class)
    ->name('admin.dashboard');

    Route::get('/dashboard', \App\Livewire\StudentDashboard::class)
        ->name('dashboard');

    Route::get('/my-applications', \App\Livewire\StudentApplications::class)->name('student.applications');

    Route::get('/job-opportunities', \App\Livewire\JobOpportunities::class)
        ->name('jobs.index');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

Route::get('/', HomePage::class);

Route::get('/register-livewire', RegisterPage::class)
    ->name('register.livewire');

Route::get('/login-livewire', Login::class)
    ->name('login.livewire');

require __DIR__.'/auth.php';

