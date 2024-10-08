@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Content') }}
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
                    <form method="POST" action="{{ route('storePost') }}">
                        {{-- <form method="POST" action="/posts/storePost"> --}}
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" id="title"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="post_content" class="form-label">Content</label>
                            <textarea name="post_content" class="form-control @error('post_content') is-invalid @enderror" id="post_content"
                                value="{{ old('post_content') }}"></textarea>
                            @error('post_content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3" hidden>
                            <label for="Author" class="form-label">Author</label>
                            <input type="text" name="user_id" class="form-control" id="Author"
                                value="{{ Auth::user()->name }}">
                        </div> --}}
                        {{-- <div class="mb-3" hidden>
                            <label for="Creation Date" class="form-label">Creation Date</label>
                            <input type="date" name="created_at" class="form-control" id="Creation Date"
                                aria-describedby="emailHelp" value="{{ $now = now()->format('YYYY-MM-DD HH:MM:SS') }}">
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
