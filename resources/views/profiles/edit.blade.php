<x-app-layout>

    <x-jet-validation-errors class="mb-4" />

    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div>
            <x-jet-label for="username" value="{{ __('Username') }}" />
            <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="$user->username ? $user->username : old('username')" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-jet-label for="avatar" value="{{ __('Avatar') }}" />
            <div class="flex">
                <img src="{{ $user->avatar}}" alt="{{ __('avatar')}}" width="80">
                <x-jet-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" />
            </div>
        </div>

        <div class="mt-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name ? $user->name : old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email ? $user->email : old('email')" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Submit') }}
            </x-jet-button>
        </div>

    </form>
</x-app-layout>
