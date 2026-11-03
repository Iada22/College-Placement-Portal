
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="mx-auto max-w-7xl px-6 py-10">
        @if (session()->has('success'))
    <div class="mb-5 rounded-lg bg-green-100 p-4 text-green-700">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="mb-5 rounded-lg bg-red-100 p-4 text-red-700">
        {{ session('error') }}
    </div>
@endif
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">
                    Job Opportunities
                </h1>

                <p class="mt-2 text-gray-600">
                    Explore available placement opportunities.
                </p>
            </div>

            <a href="{{ route('dashboard') }}"
               class="rounded-lg bg-indigo-600 px-5 py-2 font-semibold text-white shadow hover:bg-indigo-700">
                Back to Dashboard
            </a>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @forelse ($jobs as $job)

                <div class="rounded-2xl border border-indigo-100 bg-white p-6 shadow-md">

                    <h2 class="text-xl font-bold text-indigo-700">
                        {{ $job->job_title }}
                    </h2>

                    <p class="mt-2 text-gray-700">
                        {{ $job->company_name }}
                    </p>

                    <p class="mt-2 text-sm text-gray-500">
                        Location: {{ $job->location }}
                    </p>

                    <p class="mt-2 text-sm text-gray-500">
                        Salary: {{ $job->salary ?? 'Not specified' }}
                    </p>

                    <p class="mt-2 text-sm text-gray-500">
                        Qualification: {{ $job->qualification }}
                    </p>

                    <p class="mt-3 text-sm text-gray-600">
                        {{ $job->description }}
                    </p>

                    @if ($job->deadline)
                        <p class="mt-3 text-sm text-red-500">
                            Deadline: {{ $job->deadline }}
                        </p>
                    @endif

                   <button
    wire:click="apply({{ $job->id }})"
    wire:loading.attr="disabled"
    class="mt-5 w-full rounded-lg bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700 disabled:opacity-50">

    <span wire:loading.remove wire:target="apply({{ $job->id }})">
        Apply Now
    </span>

    <span wire:loading wire:target="apply({{ $job->id }})">
        Applying...
    </span>
</button>

                </div>

            @empty

                <div class="col-span-full rounded-2xl bg-white p-10 text-center shadow">
                    <h2 class="text-xl font-semibold text-gray-700">
                        No Job Opportunities Available
                    </h2>

                    <p class="mt-2 text-gray-500">
                        Please check back later for new placement opportunities.
                    </p>
                </div>

            @endforelse

        </div>
    </div>
</div>
