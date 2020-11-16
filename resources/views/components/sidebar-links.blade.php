<ul>
    <li>
        <a href="{{ route('home')}}" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('Home') }}</a>
    </li>

    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block hover:text-gray-500 ">{{ __('Explore') }}</a>
    </li>

    <li>
        <a href="/notifications" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('Notifications') }}</a>
    </li>

    <li>
        <a href="/messages" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('Messages') }}</a>
    </li>

    <li>
        <a href="/bookmarks" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('Bookmarks') }}</a>
    </li>

    <li>
        <a href="/lists" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('Lists') }}</a>
    </li>

    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('Profile') }}</a>
    </li>

    <li>
        <a href="/more" class="font-bold text-lg mb-4 block hover:text-gray-500">{{ __('More') }}</a>
    </li>

</ul>
