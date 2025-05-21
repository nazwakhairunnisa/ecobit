<section>
    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div class="space-y-2">
            <label for="update_password_current_password" class="block text-sm font-medium text-[#172e45]">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]" 
                   autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="space-y-2">
            <label for="update_password_password" class="block text-sm font-medium text-[#172e45]">New Password</label>
            <input id="update_password_password" name="password" type="password" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]" 
                   autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="space-y-2">
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-[#172e45]">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]" 
                   autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-[#103a57] text-white font-medium rounded-lg hover:bg-[#0a2a3a] transition-colors">
                Save
            </button>
        </div>
    </form>
</section>