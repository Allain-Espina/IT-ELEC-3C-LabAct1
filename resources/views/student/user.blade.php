{{-- php artisan make:view user --}}
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>USER</h2>
    <table>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->$name }}</td>
                <td>{{ $user->$age }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
