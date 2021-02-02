<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center rounded-lg overflow-hidden" style="background-image: url(@if($post->image){{asset('storage/posts/'.$post->image->url)}} @else https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg @endif)">
                                            
                     <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag',$tag) }}"class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">
                                    {{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                        
                        <h1 class="text-4xl leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show',$post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                     </div>
                     
                </article>
            @endforeach

        </div>

        <div class="mt-4">
           {{ $posts->links() }} 
        </div>
    </div>
</x-app-layout>