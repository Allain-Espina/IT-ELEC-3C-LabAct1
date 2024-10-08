@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.alert').alert();
        });
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('success'))
                    <br />
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br />
                @endif
                <table class="table table-hover">
                    <thead style="text-align:left">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date Published</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        // $now = now();
                        ?>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>

                                <td>{{ $post->user->name }}</td>
                                {{-- <td>{{ $post->user_id }}</td> --}}
                                {{-- <td>{{ $post->user ? $post->user->name : 'Unknown' }}</td> --}}

                                <td>{{ $post->created_at->format('M j, Y') }}</td>
                                {{-- <td>{{ $post->created_at->diffForHumans() }}</td> --}}

                                <td>
                                    <a type="button" class="btn btn-primary"
                                        href="{{ route('showPost', $post->id) }}">View</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary"
                                        href="{{ route('modifyPostView', $post->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form method="Post" action="{{ route('destroyPost', $post->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- FOR PAGINATION --}}
                <div class="container">
                    {{ $posts->links() }}
                    <br />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
