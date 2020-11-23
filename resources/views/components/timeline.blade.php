<div class="border border-gray-300 rounded-lg mt-5">

    @forelse ($tweets as $tweet)
        <x-tweet :tweet="$tweet" :loop="$loop" />
    @empty
        <p class="p-4">{{ __('No tweets yet.')}}</p>
    @endforelse

</div>
