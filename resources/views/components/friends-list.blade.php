<div class="bg-blue-100 px-4 py-5 rounded-xl shadow-md">

    <h2 class="font-bold text-xl mb-4">{{ __('Friends') }}</h2>
    <hr class="my-4">
    <ul>
        @foreach (range(1,8) as $item)

        <li class="mb-4">
            <div class="flex items-center">
                <img src="https://i.pravatar.cc/40" alt="" class="rounded-full mr-4">
                <span>Jon Doe</span>
            </div>
        </li>

        @endforeach
    </ul>
</div>
