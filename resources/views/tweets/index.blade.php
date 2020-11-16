<x-app-layout>

    <x-publish-tweet-panel />

    <div class="border border-gray-300 rounded-lg mt-5">

        @foreach ($tweets as $tweet)
        <x-tweet :tweet="$tweet" />
        @endforeach

    </div>
</x-app-layout>
