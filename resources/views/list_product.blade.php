@extends('layout.list')

@section('title', 'Ini adalah judul pada meta')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <table class="table-auto border-separate border-spacing-2 border border-slate-500 ...">
        <thead>
            <tr>
                <th class="border border-slate-600 ...">Id</th>
                <th class="border border-slate-600 ...">Produk</th>
                <th class="border border-slate-600 ...">Size</th>
                <th class="border border-slate-600 ...">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr>
                <td class="border border-slate-700 ...">
                    {{ $post['id'] }}
                </td>
                <td class="border border-slate-700 ...">
                    {{ $post['produk'] }}
                </td>
                <td class="border border-slate-700 ...">
                    {{ $post['size'] }}
                </td>
                <td class="border border-slate-700 ...">
                    {{ $post['harga'] }}
                </td>
                <!-- Data lainnya -->
            </tr>

            @endforeach
        </tbody>
    </table>

</body>

</html>


@endsection
