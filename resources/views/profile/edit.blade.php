<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Information Section -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <div class="flex flex-col items-center space-y-4 mb-8">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#103a57]">
                        <img id="avatar-preview" 
                             src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('images/default-profile.png') }}" 
                             alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <label for="avatar-upload" class="flex items-center gap-2 text-[#103a57] font-medium cursor-pointer hover:text-[#0a2a3a] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        Change Photo
                    </label>
                    <input type="file" id="avatar-upload" name="avatar" class="hidden" form="profile-info-form">
                </div>

                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- Password Update Section -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <h3 class="text-xl font-semibold text-[#172e45] mb-4">Update Password</h3>
                @include('profile.partials.update-password-form')
            </div>

            <!-- Account Deletion Section -->
            <div class="bg-white rounded-xl shadow-sm p-8 border-l-4 border-red-500">
                <h3 class="text-xl font-semibold text-[#172e45] mb-4">Delete Account</h3>
                <p class="text-gray-500 mb-6 text-sm">
                    Once your account is deleted, all of its resources and data will be permanently deleted.
                </p>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>

    <script>
        // Avatar preview script
        document.getElementById('avatar-upload')?.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatar-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>