<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-10 max-w-screen-md">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <div class="text-base text-gray-500">
            <a href="https://www.kompas.tv/" target="_blank">{{ $post['author'] }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>

        <p class="py-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-mb text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>

</x-layout>
