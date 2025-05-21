<form id="profile-info-form" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="profile-form">
    @csrf
    @method('patch')

    <!-- Name -->
    <div class="input-group">
        <label for="name">{{ __('Name') }}</label>
        <input id="name" name="name" type="text" class="profile-input" 
               value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="input-group">
        <label for="email">{{ __('Email') }}</label>
        <input id="email" name="email" type="email" class="profile-input"
               value="{{ old('email', $user->email) }}" required autocomplete="email">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="form-actions">
        <button type="submit" class="save-button">
            {{ __('Save') }}
        </button>
    </div>
</form>