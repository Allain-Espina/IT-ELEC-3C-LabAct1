@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($post->title) }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                {{-- <div class="col-md-8"> --}}
                <h1 class="pb-2 mb-2 border-bottom text-4xl">
                    {{ $post->title }}
                </h1>
                <article class="blog-post">
                    {{-- <h2 class="display-5 link-body-emphasis mb-1">Another blog post</h2> --}}
                    <p class="blog-post-meta pb-4">{{ $post->created_at->format('M j, Y') }} by <a
                            href="#">{{ $post->user_id }}</a>
                    </p>

                    <p>{{ $post->post_content }}</p>
                    <br />
                    {{-- <blockquote>
                        <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space
                        and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
                        demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example table</h3>
                    <p>And don't forget about tables in these posts:</p> --}}

                    <p>
                        <a type="button" class="btn btn-outline-secondary"
                            href="{{ Auth::user()->role == 'User' ? route('dashboard') : route('allPosts') }}">Return</a>
                    </p>
                </article>
            </div>
        </div>
    </div>

</x-app-layout>
