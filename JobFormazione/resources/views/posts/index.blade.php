@extends ('layouts.app')
@section ('content')
<div class="grid grid-cols-5 h-full space-y-2 items-center justify-center max-w-7xl"></div>
@foreach ($posts as $post )

<div class="flex flex-col items-center p-4 rounded-lg bg-gray-200 w-full justify-center ">
    <li class="p-1 rounded-md bg-red-400 border border-gray-400 ">{{$post->title}}</li>
    <li class="p-1 rounded-md bg-blue-400 border border-gray-400 ">{{$post->content}}</li>
    <li class="p-1 rounded-md bg-green-400 border border-gray-400 ">{{$post->user_id}}</li>
</div>

@endforeach
</div>
@endsection