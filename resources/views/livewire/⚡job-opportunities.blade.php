 <escape><div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50">
    <div class="mx-auto max-w-7xl px-6 py-10">

        <!-- Header -->
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
               class="rounded-lg bg-indigo-600 px-5 py-2 font-semibold text-white hover:bg-indigo-700">
                Back to Dashboard
            </a>
        </div>

        <!-- Search -->
        <div class="mt-8">
            <input type="text"
                   placeholder="Search jobs or companies..."
                   class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Job Listings -->
        <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            <!-- Job 1 -->
            <div class="rounded-2xl border border-indigo-100 bg-white p-6 shadow-md transition hover:-translate-y-1 hover:shadow-lg">
                <h2 class="text-xl font-bold text-indigo-700">
                    Software Developer
                </h2>

                <p class="mt-2 font-medium text-gray-700">
                    ABC Technologies
                </p>

                <p class="mt-3 text-sm text-gray-600">
                    Location: Shillong
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    Salary: ₹3–5 LPA
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    Eligibility: B.Tech / BCA / MCA
                </p>

                <button class="mt-6 w-full rounded-lg bg-indigo-600 px-4 py-2 font-semibold text-white hover:bg-indigo-700">
                    Apply Now
                </button>
            </div>

            <!-- Job 2 -->
            <div class="rounded-2xl border border-purple-100 bg-white p-6 shadow-md transition hover:-translate-y-1 hover:shadow-lg">
                <h2 class="text-xl font-bold text-purple-700">
                    Web Developer
                </h2>

                <p class="mt-2 font-medium text-gray-700">
                    XYZ Solutions
                </p>

                <p class="mt-3 text-sm text-gray-600">
                    Location: Guwahati
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    Salary: ₹2.5–4 LPA
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    Eligibility: B.Tech / BCA
                </p>

                <button class="mt-6 w-full rounded-lg bg-purple-600 px-4 py-2 font-semibold text-white hover:bg-purple-700">
                    Apply Now
                </button>
            </div>

            <!-- Job 3 -->
            <div class="rounded-2xl border border-blue-100 bg-white p-6 shadow-md transition hover:-translate-y-1 hover:shadow-lg">
                <h2 class="text-xl font-bold text-blue-700">
                    Data Analyst
                </h2>

                <p class="mt-2 font-medium text-gray-700">
                    TechVision Pvt Ltd
                </p>

                <p class="mt-3 text-sm text-gray-600">
                    Location: Remote
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    Salary: ₹4–6 LPA
                </p>

                <p class="mt-2 text-sm text-gray-600">
                    Eligibility: B.Tech / B.Sc IT
                </p>

                <button class="mt-6 w-full rounded-lg bg-blue-600 px-4 py-2 font-semibold text-white hover:bg-blue-700">
                    Apply Now
                </button>
            </div>

        </div>
    </div>
</div></escape>
