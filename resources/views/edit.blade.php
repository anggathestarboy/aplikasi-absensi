<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Edit Data</h2>

        <form action="{{ route('absen.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <input type="text" name="nama" value="{{ $data->nama }}" required class="border p-2 rounded w-full">
            </div>
            <div class="mb-4">
                <input type="text" name="nisn" value="{{ $data->nisn }}" required class="border p-2 rounded w-full">
            </div>
            <div class="mb-4">
                <input type="text" name="kelas" value="{{ $data->kelas }}" required class="border p-2 rounded w-full">
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('absen.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
