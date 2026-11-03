<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="mx-auto max-w-7xl px-6 py-10">

        <div class="mb-8">
            <a href="{{ route('dashboard') }}"
               class="text-indigo-600 hover:text-indigo-800 font-medium">
                ← Back to Dashboard
            </a>

            <h1 class="mt-4 text-3xl font-bold text-gray-800">
                My Applications
            </h1>

            <p class="mt-2 text-gray-600">
                View the status of your job applications.
            </p>
        </div>

        @forelse ($applications as $application)
            <div class="mb-5 rounded-xl bg-white p-6 shadow-md">
                <h2 class="text-xl font-bold text-gray-800">
                    {{ $application->jobVacancy->job_title ?? 'Job Vacancy' }}
                </h2>

                <p class="mt-2 text-gray-600">
                    {{ $application->jobVacancy->company_name ?? 'Company' }}
                </p>

                <p class="mt-2 text-sm text-gray-500">
                    Applied on:
                    {{ $application->created_at->format('d M Y') }}
                </p>

                <p class="mt-3 font-semibold">
                    Status:
                    <span class="text-indigo-600">
                        {{ $application->status }}
                    </span>
                </p>
            </div>
        @empty
            <div class="rounded-xl bg-white p-8 text-center shadow-md">
                <p class="text-gray-600">
                    You have not applied for any jobs yet.
                </p>

                <a href="{{ route('jobs.index') }}"
                   class="mt-4 inline-block rounded-lg bg-indigo-600 px-5 py-2 text-white hover:bg-indigo-700">
                    Explore Jobs
                </a>
            </div>
        @endforelse

    </div>
</div>
