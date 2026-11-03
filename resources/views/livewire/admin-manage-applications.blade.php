<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="mx-auto max-w-7xl px-6 py-10">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Manage Applications
            </h1>
            <p class="mt-2 text-gray-500">
                View student applications and manage their status.
            </p>
        </div>

        @if (session()->has('success'))
            <div class="mb-6 rounded-lg bg-green-100 p-4 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($applications as $application)
            <div class="mb-5 rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">

                <div class="flex flex-wrap items-start justify-between gap-4">

                    <div>
                        <h2 class="text-xl font-bold text-gray-800">
                            {{ $application->user->name }}
                        </h2>

                        <p class="text-sm text-gray-500">
                            {{ $application->user->email }}
                        </p>

                        <p class="mt-4 font-semibold text-indigo-700">
                            {{ $application->jobVacancy->job_title }}
                        </p>

                        <p class="text-sm text-gray-500">
                            {{ $application->jobVacancy->company_name }}
                        </p>

                        <p class="mt-2 text-sm text-gray-400">
                            Applied on: {{ $application->created_at->format('d M Y') }}
                        </p>
                    </div>

                    <div class="text-right">
    @if ($application->status === 'Accepted')
        <span class="rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-700">
            Accepted
        </span>
    @elseif ($application->status === 'Rejected')
        <span class="rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-700">
            Rejected
        </span>
    @else
        <span class="rounded-full bg-yellow-100 px-4 py-2 text-sm font-semibold text-yellow-700">
            Pending
        </span>
    @endif
</div>

                </div>

               <div class="mt-6 flex flex-wrap gap-3">

    <button
        type="button"
        wire:click="updateStatus({{ $application->id }}, 'Accepted')"
        class="rounded-lg bg-green-600 px-5 py-2 text-sm font-semibold text-white hover:bg-green-700">
        Accept
    </button>

    <button
        type="button"
        wire:click="updateStatus({{ $application->id }}, 'Rejected')"
        class="rounded-lg bg-red-600 px-5 py-2 text-sm font-semibold text-white hover:bg-red-700">
        Reject
    </button>

</div>

            </div>

        @empty
            <div class="rounded-2xl bg-white p-10 text-center shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700">
                    No Applications Yet
                </h2>
                <p class="mt-2 text-gray-500">
                    Student applications will appear here.
                </p>
            </div>
        @endforelse

    </div>
</div>
