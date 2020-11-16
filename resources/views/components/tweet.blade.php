
<div class="flex p-4 border-b border-b-gray-400">

    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->author)}}">
            <img src="{{ $tweet->author->avatar}}" alt="" class="rounded-full mr-4">
        </a>
    </div>

    <div>
        <a href="{{ route('profile', $tweet->author)}}">
            <h5 class="font-bold mb-4">{{ $tweet->author->name }}</h5>
        </a>
        <p class="text-sm">
            {{ $tweet->body}}
        </p>
    </div>

</div>
