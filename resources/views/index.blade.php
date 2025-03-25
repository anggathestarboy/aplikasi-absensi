<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Data Absensi</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('absen.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="flex space-x-2">
                <input type="text" name="nama" placeholder="Nama" required class="border p-2 rounded w-1/3">
                <input type="text" name="nisn" placeholder="NISN" required class="border p-2 rounded w-1/3">
                <input type="text" name="kelas" placeholder="Kelas" required class="border p-2 rounded w-1/3">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah</button>
            </div>
        </form>

        <table class="w-full border-collapse border border-gray-300">
            <tr class="bg-gray-200">
                <th class="border p-2">Nama</th>
                <th class="border p-2">NISN</th>
                <th class="border p-2">Kelas</th>
                <th class="border p-2">Aksi</th>
            </tr>
            @foreach ($data as $item)
            <tr class="text-center">
                <td class="border p-2">{{ $item->nama }}</td>
                <td class="border p-2">{{ $item->nisn }}</td>
                <td class="border p-2">{{ $item->kelas }}</td>
                <td class="border p-2">
                    <a href="{{ route('absen.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('absen.destroy', $item->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
