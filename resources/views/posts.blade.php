<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-10 max-w-screen-md border-b border-gray-900">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#" target="_blank">{{ $post['author'] }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="py-4 font-light">{{ Str::limit($post['body'], 300) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-mb text-blue-500 hover:underline">Read more
                &raquo;</a>
        </article>
    @endforeach

</x-layout>
