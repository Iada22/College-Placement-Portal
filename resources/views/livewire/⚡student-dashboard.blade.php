<h1 style="color: red; font-size: 30px;">TEST DASHBOARD</h1>
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
                    class="rounded-lg bg-red-600 px-5 py-2 font-semibold text-white shadow-sm hover:bg-red-700">
                    Log Out
                </button>
            </form>
        </div>

       php artisan view:clear

    <p class="mt-2 text-sm text-gray-600">
        Explore available placement opportunities.
    </p>

</a>

            <div class="rounded-2xl border border-purple-100 bg-white p-6 shadow-md">
                <div class="mb-4 text-3xl">📄</div>
                <h2 class="text-lg font-semibold text-purple-700">
                    My Applications
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Track your job application status.
                </p>
            </div>

            <div class="rounded-2xl border border-blue-100 bg-white p-6 shadow-md">
                <div class="mb-4 text-3xl">👤</div>
                <h2 class="text-lg font-semibold text-blue-700">
                    My Profile
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    View and update your student profile.
                </p>
            </div>

        </div>
    </div>
</div>


