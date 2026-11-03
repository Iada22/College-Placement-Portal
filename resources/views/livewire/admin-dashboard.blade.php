
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="mx-auto max-w-7xl px-6 py-10">
<div class="mb-10 flex flex-wrap items-center justify-between gap-4">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">
            Admin Dashboard
        </h1>
        <p class="mt-2 text-gray-500">
            Welcome to the College Placement Portal Admin Panel.
        </p>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit"
            class="rounded-lg bg-red-600 px-5 py-2 font-semibold text-white shadow-md transition hover:bg-red-700">
            Log Out
        </button>
    </form>
</div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

            <!-- Manage Job Vacancies -->
            <a href="{{ route('admin.jobs') }}"
               class="rounded-2xl bg-white p-6 shadow-md transition hover:-translate-y-1 hover:shadow-xl">
                <div class="mb-4 text-4xl">💼</div>
                <h2 class="text-lg font-bold text-gray-800">
                    Manage Job Vacancies
                </h2>
                <p class="mt-2 text-sm text-gray-500">
                    Add and manage job opportunities.
                </p>
            </a>

            <!-- Manage Applications -->
            <a href="{{ route('admin.applications') }}"
               class="rounded-2xl bg-white p-6 shadow-md transition hover:-translate-y-1 hover:shadow-xl">
                <div class="mb-4 text-4xl">📋</div>
                <h2 class="text-lg font-bold text-gray-800">
                    Manage Applications
                </h2>
                <p class="mt-2 text-sm text-gray-500">
                    Review, accept or reject applications.
                </p>
            </a>

            <!-- Manage Students -->
            <div class="rounded-2xl bg-white p-6 shadow-md">
                <div class="mb-4 text-4xl">🎓</div>
                <h2 class="text-lg font-bold text-gray-800">
                    Manage Students
                </h2>
                <p class="mt-2 text-sm text-gray-500">
                    View and manage registered students.
                </p>
                <span class="mt-4 inline-block text-xs font-semibold text-indigo-500">
                    Coming Soon
                </span>
            </div>

            <!-- Placement Reports -->
            <div class="rounded-2xl bg-white p-6 shadow-md">
                <div class="mb-4 text-4xl">📊</div>
                <h2 class="text-lg font-bold text-gray-800">
                    Placement Reports
                </h2>
                <p class="mt-2 text-sm text-gray-500">
                    View placement statistics and reports.
                </p>
                <span class="mt-4 inline-block text-xs font-semibold text-indigo-500">
                    Coming Soon
                </span>
            </div>

        </div>
    </div>
</div>
