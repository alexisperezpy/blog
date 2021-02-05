<x-app-layout>
    <div class="container py-8 px-6">
        <h1 class="text-4xl text-gray-700 font-bold">{{ $post->name }}</h1>
        <div class="text-lg text-gray-400 mb-2 text-justify">
            <h3>{!! $post->extract !!}</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center px-4" src="{{Storage::url($post->image->url)}}">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-600 mt-4 mr-4 text-justify">
                    {!! $post->body !!}
                </div>
            </div>


            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2x1 font-bold mb-2 text-center text-gray-600">Más en la Categoria {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex " href="{{ route('posts.show',$similar) }}">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg">
                                @endif
                                
                                <span class="ml-2 text-gray-600" >{{ $similar->name }} </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>