<form id="profile-info-form" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('patch')

    <!-- Name -->
    <div class="space-y-2">
        <label for="name" class="block text-sm font-medium text-[#172e45]">Name</label>
        <input id="name" name="name" type="text" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]"
               value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="space-y-2">
        <label for="email" class="block text-sm font-medium text-[#172e45]">Email Address</label>
        <input id="email" name="email" type="email"
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]"
               value="{{ old('email', $user->email) }}" required autocomplete="email">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Profile Picture -->
    <div class="space-y-2 mt-4">
        <label for="profile_pict" class="block text-sm font-medium text-[#172e45]">{{ __('Profile Picture') }}</label>
        
        <div class="relative">
            <label for="profile_pict" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white cursor-pointer flex justify-between items-center">
                <span id="file-name" class="text-gray-500">No file chosen</span>
                <span class="text-sm text-[#19344f] font-medium">Choose File</span>
            </label>
            <input id="profile_pict" name="profile_pict" type="file" class="absolute inset-0 opacity-0 cursor-pointer" accept="image/*" onchange="updateFileName(this)">
        </div>
        @error('profile_pict')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end mt-6">
        <button type="submit" class="px-6 py-2 bg-[#103a57] text-white font-medium rounded-lg hover:bg-[#0a2a3a]">
            {{ __('Save') }}
        </button>
    </div>
</form>

<script>
    function updateFileName(input) {
        const fileName = input.files[0]?.name || 'No file chosen';
        document.getElementById('file-name').textContent = fileName;
    }
</script>