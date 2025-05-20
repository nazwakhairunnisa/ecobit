<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @section('styles')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Information Section -->
            <div class="profile-card">
                <div class="profile-header">
                    <div class="profile-circle">
                        <img id="avatar-preview" 
                             src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('images/default-profile.png') }}" 
                             alt="Profile Picture">
                    </div>
                    <label for="avatar-upload" class="avatar-upload-label">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        Change Photo
                    </label>
                    <input type="file" id="avatar-upload" name="avatar" style="display: none;" form="profile-info-form">
                </div>

                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- Password Update Section -->
            <div class="profile-card">
                <h3 class="profile-section-title">Update Password</h3>
                @include('profile.partials.update-password-form')
            </div>

            <!-- Account Deletion Section -->
            <div class="profile-card danger-section">
                <h3 class="profile-section-title">Delete Account</h3>
                <p class="profile-section-description">
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