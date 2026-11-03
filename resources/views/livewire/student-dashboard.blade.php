
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="mx-auto max-w-7xl px-6 py-10">

        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">
                    Student Dashboard
                </h1>
                <p class="mt-2 text-gray-600">
                    Welcome to your College Placement Portal!
                </p>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="rounded-lg bg-red-600 px-5 py-2 font-semibold text-white hover:bg-red-700">
                    Log Out
                </button>
            </form>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

           <a href="{{ route('jobs.index') }}"
   class="block cursor-pointer rounded-2xl border border-indigo-100 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-indigo-400 hover:shadow-xl">

    <div class="mb-4 text-3xl">💼</div>

    <h2 class="text-lg font-semibold text-indigo-700">
        Job Opportunities
    </h2>

    <p class="mt-2 text-sm text-gray-600">
        Explore available placement opportunities.
    </p>

</a>
           <a href="{{ route('student.applications') }}"
   class="block cursor-pointer rounded-2xl border border-purple-100 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-purple-400 hover:shadow-xl">

    <div class="mb-4 text-3xl">📄</div>

    <h2 class="text-lg font-semibold text-purple-700">
        My Applications
    </h2>

    <p class="mt-2 text-sm text-gray-600">
        Track your job application status.
    </p>

</a>

        <a href="{{ route('profile.edit') }}"
   class="block cursor-pointer rounded-2xl border border-blue-100 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-blue-400 hover:shadow-xl">

    <div class="mb-4 text-3xl">👤</div>

    <h2 class="text-lg font-semibold text-blue-700">
        My Profile
    </h2>

    <p class="mt-2 text-sm text-gray-600">
        View and update your student profile.
    </p>

</a>

        </div>
    </div>
</div>
