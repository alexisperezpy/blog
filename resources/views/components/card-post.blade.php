@props(['item'])

<article class="mb-8 bg-white shadow-xl rounded-lg overflow-hidden">
    @if($item->image)
        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($item->image->url)}}">
    @else
        <img class=" w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg " alt="">
    @endif

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show',$item) }}">{{ $item->name }}</a>
        </h1>
        <div class="text-base text-gray-800">
            {!! $item->extract !!}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($item->tags as $tag)
            <a href="{{ route('posts.tag',$tag) }}" class="inline-block bg-{{ $tag->color }}-300 rounded-full py-1 px-2 text-sm mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>          