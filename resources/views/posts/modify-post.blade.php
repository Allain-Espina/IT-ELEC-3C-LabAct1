@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modify Content') }}
        </h2>
    </x-slot>

    <script>
        $(document).ready(function() {
            $('.alert').alert();
        });
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid">
                    <br />
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    {{-- <form method="POST" action="{{ route('updatePost', ['id' => $post['id']]) }}"> --}}
                    <form method="POST" action="{{ route('updatePost', $post->id) }}">
                        {{ csrf_field() }} {{-- RESOLUTION: THIS instead of @csrf --}}
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Modified Post Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title', $post->title) }}">
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="post_content" class="form-label">Modified Content</label>
                            <textarea class="form-control @error('post_content') is-invalid @enderror" id="post_content" name="post_content">{{ old('post_content', $post->post_content) }}</textarea>
                            {{-- <input type="text" class="form-control @error('post_content') is-invalid @enderror"
                                id="post_content" value="{{ $post->post_content }}"> --}}
                        </div>
                        @error('post_content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <a type="button" class="btn btn-outline-secondary"
                            href="{{ Auth::user()->role == 'User' ? route('dashboard') : route('allPosts') }}">Return</a>&emsp;
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
