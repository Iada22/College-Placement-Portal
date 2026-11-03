
<div class="min-h-screen bg-gray-50 px-6 py-10">

    <div class="mx-auto max-w-3xl">

        <h1 class="mb-2 text-3xl font-bold text-indigo-700">
            Add Job Vacancy
        </h1>

        <p class="mb-8 text-gray-600">
            Enter the details of the new placement opportunity.
        </p>

        @if (session()->has('success'))
            <div class="mb-5 rounded-lg bg-green-100 p-4 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit="save"
              class="space-y-5 rounded-2xl bg-white p-8 shadow-md">

            <div>
                <label class="mb-1 block font-medium">Job Title</label>
                <input type="text" wire:model="job_title"
                    class="w-full rounded-lg border-gray-300">
                @error('job_title')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="mb-1 block font-medium">Company Name</label>
                <input type="text" wire:model="company_name"
                    class="w-full rounded-lg border-gray-300">
                @error('company_name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="mb-1 block font-medium">Location</label>
                <input type="text" wire:model="location"
                    class="w-full rounded-lg border-gray-300">
                @error('location')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="mb-1 block font-medium">Salary</label>
                <input type="text" wire:model="salary"
                    placeholder="Example: ₹3–5 LPA"
                    class="w-full rounded-lg border-gray-300">
            </div>

            <div>
                <label class="mb-1 block font-medium">Job Description</label>
                <textarea wire:model="description" rows="4"
                    class="w-full rounded-lg border-gray-300"></textarea>
                @error('description')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="mb-1 block font-medium">Qualification</label>
                <input type="text" wire:model="qualification"
                    placeholder="Example: BCA, B.Tech, MCA"
                    class="w-full rounded-lg border-gray-300">
                @error('qualification')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="mb-1 block font-medium">Application Deadline</label>
                <input type="date" wire:model="deadline"
                    class="w-full rounded-lg border-gray-300">
            </div>

            <button type="submit"
                class="w-full rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white hover:bg-indigo-700">
                Add Job Vacancy
            </button>

        </form>
    </div>
</div>
