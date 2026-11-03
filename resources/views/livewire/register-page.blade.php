<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-indigo-50 to-purple-100 px-4 py-12">

    {{-- Registration Card --}}
    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-2xl">

        {{-- Heading --}}
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-extrabold text-gray-800">
                Create Account
            </h1>

            <p class="mt-2 text-sm text-gray-500">
                Register to get started with our website
            </p>
        </div>

        {{-- Registration Form --}}
       <form wire:submit="register">

            {{-- Name --}}

<input
    type="text"
    id="name"
    name="name"
    wire:model="name"
    placeholder="Enter your full name"
    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
>

@error('name')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror


            {{-- Email --}}

<input
    type="email"
    id="email"
    name="email"
    wire:model="email"
    placeholder="you@example.com"
    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
>

@error('email')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror

            {{-- Password --}}

<input
    type="password"
    id="password"
    name="password"
    wire:model="password"
    placeholder="Create a password"
    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-700 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
>

@error('password')
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
@enderror
Get-Content resources\views\livewire\student-dashboard.blade.php

            {{-- Register Button --}}
            <button
                type="submit"
                class="w-full rounded-lg bg-blue-600 py-3 font-semibold text-white shadow-md transition duration-200 hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2"
            >
                Create Account
            </button>

        </form>

        {{-- Login Link --}}
        <p class="mt-6 text-center text-sm text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}"
               class="font-semibold text-blue-600 hover:text-blue-800 hover:underline">
                Login
            </a>
        </p>

    </div>
</div>
