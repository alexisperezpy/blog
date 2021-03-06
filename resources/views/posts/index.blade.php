<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="max-w-lg overflow-hidden shadow-lg rounded-lg">
                    <div class="px-2 py-2">    
                        <h2 class="text-xl leading-8 font-bold mt-0 mb-0 text-center">
                            <a class="text-black" href="{{ route('posts.show',$post) }}">
                                {{ $post->name }}
                            </a>
                        </h2>
                    </div>
                    
                    <article class="bg-cover w-90 h-80  bg-center rounded-lg overflow-hidden mt-2 mb-2" style="background-image: url(@if($post->image){{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/10/22/17/46/mountains-1761292_960_720.jpg @endif)">        
                    
                    </article> 
                    
                    <div class="px-6 pt-2 pb-2 items-stretch">
                        {{-- <div class="w-full h-full px-9 flex flex-col justify-center">  --}}
                            <p class="text-center mt-0 mb-0">Tecnologías</p>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag',$tag) }}"class="inline-block px-3 mb-1 h-6 bg-{{ $tag->color }}-500 text-black rounded-full ">
                                    {{ $tag->name }}
                                </a>
                            @endforeach                        
                        {{-- </div> --}}
                    </div>
                   {{-- aca va el fin de article --}}
                </div>
            @endforeach
        </div>
            <div class = "mt-4"> 
                {{ $posts->links() }} 
            </div>    
    </div>
</x-app-layout>