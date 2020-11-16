<x-app-layout>

    <header class="mb-6" style="position: relative">

        <img
            src="/images/profile-banner.jpg"
            alt="banner"
            class="rounded-xl mb-4"
            style="max-height: 280px; width: 100%; object-fit: cover">

        <img
            src="/images/avatar-default.jpg"
            class="rounded-full shadow"
            style="width:150px; height:150px; object-fit:cover; position:absolute; left: 38%; bottom:10px" alt="">

        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500">Joined: {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border py-2 px-5 text-xs">{{__('Edit Profile')}}</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-5 text-white text-xs font-bold">{{__('Follow Me')}}</a>
            </div>
        </div>

    </header>

    <x-timeline :tweets="$user->tweets" />

</x-app-layout>
