<form method="POST" action="/follow/{{ $user->name }}">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-5 text-white text-xs font-bold">
        {{ auth()->user()->following($user) ?  __('Unfollow Me') : __('Follow Me')}}
    </button>

</form>
