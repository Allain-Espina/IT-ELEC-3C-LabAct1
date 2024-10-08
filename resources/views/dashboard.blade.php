@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Posts') }}
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
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
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
                        @foreach ($userPosts as $userPost)
                            <tr>
                                <th scope="row">{{ $userPost->id }}</th>
                                <td>{{ $userPost->title }}</td>
                                <td>{{ $userPost->created_at->format('M j, Y') }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary"
                                        href="{{ route('showPost', $userPost->id) }}">View</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary"
                                        href="{{ route('modifyPostView', $userPost->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form method="Post" action="{{ route('destroyPost', $userPost->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <th scope="row">1</th>
                            <td>Laravel</td>
                            <td>Allain</td>
                            <td>August 22, 2024</td>
                            <td>22,000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jetstream</td>
                            <td>Daniel</td>
                            <td>August 23, 2024</td>
                            <td>23,000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>PHP</td>
                            <td>Espina</td>
                            <td>August 24, 2024</td>
                            <td>24,000</td>
                        </tr> --}}
                    </tbody>
                </table>
                <div class="container">
                    {{ $userPosts->links() }}
                    <br />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
