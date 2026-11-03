<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50">

@if (session('success'))
    <div class="fixed top-5 right-5 z-50 rounded-lg bg-green-100 p-4 text-green-800 shadow-lg">
        {{ session('success') }}
    </div>
@endif


    {{-- Navigation bar --}}
    <nav class="flex items-center justify-between bg-white/90 px-8 py-5 shadow-sm border-b border-gray-100">

        {{-- Website name --}}
        <h1 class="text-xl md:text-2xl font-extrabold tracking-tight text-blue-700">
            College Placement Portal
        </h1>

        {{-- Login and Register buttons --}}
        <div class="flex gap-4">

            <a href="{{ route('register.livewire') }}"
               class="rounded-xl bg-blue-600 px-6 py-3 font-semibold text-white shadow-lg shadow-blue-200 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl">
                Register
            </a>

        </div>
    </nav>

    {{-- Homepage content --}}
    <main class="relative flex min-h-[85vh] flex-col items-center justify-center overflow-hidden px-6 py-24 text-center">

        {{-- Background decoration --}}
        <div class="absolute -top-20 right-0 h-72 w-72 rounded-full bg-blue-200/40 blur-3xl"></div>
        <div class="absolute -bottom-20 left-0 h-72 w-72 rounded-full bg-indigo-200/40 blur-3xl"></div>

        <div class="relative z-10 mx-auto max-w-3xl">

            <div class="mb-8 inline-block rounded-full border border-blue-100 bg-blue-50 px-5 py-2 text-sm font-semibold text-blue-700">
                Your Future Starts Here
            </div>

            <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-5xl md:text-7xl">
                College Placement
                <span class="mt-2 block bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                    Portal
                </span>
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-gray-600 sm:text-lg">
                Take the next step toward your professional future.
                Sign in to continue or register to get started.
            </p>

            <div class="mt-10 flex justify-center gap-4">

                <a href="{{ route('login.livewire') }}"
                   class="rounded-xl bg-blue-600 px-8 py-4 font-bold text-white shadow-xl shadow-blue-200 transition duration-300 hover:-translate-y-1 hover:bg-blue-700">
                    Login
                </a>

            </div>

            <div class="mt-12 flex flex-wrap items-center justify-center gap-x-8 gap-y-4 text-sm font-medium text-gray-500">
                <span class="flex items-center gap-2">
                    <span class="text-blue-600">✓</span>
                    Career Opportunities
                </span>

                <span class="flex items-center gap-2">
                    <span class="text-blue-600">✓</span>
                    Student Support
                </span>

                <span class="flex items-center gap-2">
                    <span class="text-blue-600">✓</span>
                    Placement Preparation
                </span>
            </div>

        </div>

    </main>

</div>

