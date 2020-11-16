<div class="bg-blue-100 px-4 py-5 rounded-xl shadow-md">

    <h2 class="font-bold text-xl mb-4">{{ __('Following') }}</h2>

    <hr class="my-4">

    <ul>
        @foreach (auth()->user()->follows as $user)

        <li class="mb-4">
            <a href="{{ route('profile', $user)}}" class="flex items-center">
                <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-4" style="width: 50px; height: 50px">
                <span>{{ $user->name }}</span>
            </a>
        </li>

        @endforeach
    </ul>

</div>
