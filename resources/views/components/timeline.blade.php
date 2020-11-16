<div class="border border-gray-300 rounded-lg mt-5">

    @foreach ($tweets as $tweet)
    <x-tweet :tweet="$tweet" />
    @endforeach

</div>
