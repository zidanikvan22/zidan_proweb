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
            <center>List Produk Yang Telah Ditambahkan</center>
        </h1>
        <table
            class="table table-zebra rounded mt-8 max-w-6xl table-auto mx-auto border-separate border border-slate-500">
            <thead class="bg-success">
                <tr class="text-lg text-center">
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $item }}</td>
                    <td>{{ $desc[$index] }}</td>
                    <td>{{ $harga[$index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <h1 class="text-4xl font-mono font-bold mt-10 ">
            <center>Input Produk</center>
        </h1>
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <table class="table table-zebra rounded mt-6 max-w-xl table-auto mx-auto border-separate border border-slate-500">
                <tr>
                    <td class="bg-secondary">Nama :</td>
                    <td colspan="3"><input type="text" class="input input-bordered input-accent w-full max-w-xs" id="nama" name="nama" placeholder="Nama Produk"></td>
                </tr>
                <tr>
                    <td class="bg-secondary">Deskripsi :</td>
                    <td colspan="3"><textarea class="textarea textarea-accent w-full" placeholder="Deskripsi" id="deskripsi" name="deskripsi"></textarea></td>
                </tr>
                <tr>
                    <td class="bg-secondary">Harga :</td>
                    <td><input type="number" class="input input-bordered input-accent w-full max-w-xs" placeholder="Harga yang kamu ingin berikan " id="harga" name="harga"></td>
                    <td></td>
                    <td></td>
                </tr>
             
                
                
            </table>
            
            <center><button type="submit" class="btn btn-outline btn-success mt-3 w-36  ">Simpan</button></center>
            <br>
            <br>

        </form>
    </div>
    

</body>

</html>
