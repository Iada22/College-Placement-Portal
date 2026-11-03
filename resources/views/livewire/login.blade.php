
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-indigo-50 to-purple-100 px-4 py-12">
@if (session()->has('success'))
    <div class="mb-4 rounded-lg bg-green-100 px-4 py-3 text-green-800">
        {{ session('success') }}
    </div>
@endif
    {{-- Login Card --}}
    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-2xl">

        {{-- Heading --}}
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-extrabold text-gray-800">
                Welcome Back!
            </h1>

            <p class="mt-2 text-sm text-gray-500">
                Login to your College Placement Portal
            </p>
            @if ($errors->any())
    <div class="mt-4 rounded-lg bg-red-100 px-4 py-3 text-sm text-red-700">
        {{ $errors->first() }}
    </div>
@endif
        </div>

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-5">
                <label for="email"
                       class="mb-2 block text-sm font-semibold text-gray-700">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email address"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                >
            </div>

            {{-- Password --}}
            <div class="mb-6">
                <label for="password"
                       class="mb-2 block text-sm font-semibold text-gray-700">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                >
            </div>

            {{-- Login Button --}}
            <button
                type="submit"
                class="w-full rounded-lg bg-blue-600 py-3 font-semibold text-white shadow-md transition duration-200 hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2"
            >
                Login
            </button>

        </form>

        {{-- Register Link --}}
        <p class="mt-6 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="{{ route('register.livewire') }}"
               class="font-semibold text-blue-600 hover:text-blue-800 hover:underline">
                Register
            </a>
        </p>

    </div>
</div>
