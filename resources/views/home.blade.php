<x-app-layout title='Blog'>
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl py-5 md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Explora tu Camino hacia el Éxito con <span class="text-indigo-500">Kompas</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">La guía para encontrar la universidad perfecta para tu camino.</p>
            <a wire:navigate class="px-3 py-2 text-lg text-white bg-indigo-500 rounded mt-5 inline-block"
                href="{{ route('posts.index') }}">Comienza a Explorar</a>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16 bg-indigo-100 p-8">
            <h2 class="my-5 text-3xl text-indigo-500 font-bold">Publicaciones Recomendadas</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                    @endforeach
                </div>
            </div>

        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-indigo-500font-bold">Publicaciones Recientes</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-indigo-500 font-semibold" href="http://127.0.0.1:8000/blog">Más
            Publicaciones</a>
    </div>
</x-app-layout>
