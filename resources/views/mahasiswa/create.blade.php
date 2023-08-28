<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <!-- Tambahkan link ke Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white p-8">
    <h1 class="text-3xl mb-4 text-center">Buat Data Baru</h1>
    <form action="/Mahasiswa/store" method="POST" class="max-w-sm mx-auto">
        @csrf
        <input type="text" name="nama" placeholder="nama" class="bg-gray-800 text-white p-2 rounded mb-2 w-full">
        <input type="text" name="nrp" placeholder="nrp" class="bg-gray-800 text-white p-2 rounded mb-2 w-full">
        <input type="text" name="jurusan" placeholder="jurusan" class="bg-gray-800 text-white p-2 rounded mb-2 w-full">
        <textarea name="fakultas" placeholder="fakultas" class="bg-gray-800 text-white p-2 rounded mb-2 w-full resize-none"></textarea>
        <input type="submit" name="submit" value="kirim" class="bg-purple-500 hover:bg-purple-600 text-white p-2 rounded w-full">
    </form>
</body>
</html>
