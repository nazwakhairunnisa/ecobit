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

    <div class="flex justify-end">
        <button type="submit" class="px-6 py-2 bg-[#103a57] text-white font-medium rounded-lg hover:bg-[#0a2a3a] transition-colors">
            Save
        </button>
    </div>
</form>