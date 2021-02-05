<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase font-bold text-center text-3xl">Categoria: {{ $category->name }}</h1>
        @foreach ($postscategory as $item)
           <x-card-post :item="$item"/>       
        @endforeach

        <div>
            {{ $postscategory->links() }}
        </div>
    </div>

</x-app-layout>