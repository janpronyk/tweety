<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="lg:flex lg:justify-between">

            <div class="lg:w-1/6">
                <x-sidebar-links />
            </div>

            <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

                <x-publish-tweet-panel />

                <div class="border border-gray-300 rounded-lg mt-5">
                    @foreach ($tweets as $tweet)
                        <x-tweet :tweet="$tweet" />
                    @endforeach
                </div>

            </div>

            <div class="lg:w-1/6">
                <x-friends-list />
            </div>

        </div>

    </div>
</x-guest-layout>
