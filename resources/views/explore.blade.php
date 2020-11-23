<x-app-layout>
    @foreach ($users as $user)

        <a href="{{ $user->path() }}" class="flex items-center mb-4">
            <img
                class="mr-4 rounded-full"
                src="{{ $user->avatar }}"
                alt="{{ $user->username }}{{__('s avatar')}}"
                width="60">
            <div>
                <h4 class="font-bold">{{ $user->username }}</h4>
            </div>
        </a>

    @endforeach

    {{ $users->links() }}
</x-app-layout>
