<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class=" overflow-x-auto ml-10 mt-10">
        <h1 class="text-4xl font-mono font-bold pt-2 ">
            <center>List Produk</center>
        </h1>
        <table class="table table-zebra mt-48" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item }}</td>
                    <td>{{ $desc[$index] }}</td>
                    <td>{{ $harga[$index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
