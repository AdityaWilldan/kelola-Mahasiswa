<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
         .gg-add-r:hover {
        box-sizing: border-box;
        position: relative;
        display: block;
        width: 22px;
        height: 22px;
        border: 2px solid;
        transform: scale(var(--ggs,1));
        border-radius: 4px;
        color: #a855f7;
        }

        .gg-add-r::after,
        .gg-add-r::before {
        content: "";
        display: block;
        box-sizing: border-box;
        position: absolute;
        width: 10px;
        height: 2px;
        background: currentColor;
        border-radius: 5px;
        top: 8px;
        left: 4px;
        }

        .gg-add-r::after {
        width: 2px;
        height: 10px;
        top: 4px;
        left: 8px;
        } 

        .thumbnail{
            max-width: 90px;
            max-height: 90px;
        }
    </style>
    <!-- Tambahkan link ke Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://css.gg/css?=|add-r" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white p-8">

<h1 class="text-3xl mb-4 text-center">Daftar Mahasiswa</h1>
    
 <!-- Navbar -->
 <nav class="bg-gray-800 dark:bg-gray-900 rounded-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <img src="https://i.pinimg.com/originals/3a/89/da/3a89da14c1b3cef1cdd0a67b959a7d76.png" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 
                focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 
                md:border-0 md:bg-transparent dark:bg-gray-900 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="/Mahasiswa" class="block py-2 pl-3 pr-4 text-white bg-purple-500 rounded md:bg-transparent
                         md:text-purple-500 md:p-0 md:dark:text-purple-500 dark:bg-purple-600 md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="Mahasiswa/create/" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 
                        md:hover:text-purple-500 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Add Data</a>
                    </li>
                    <li>
                        <a href="register" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 
                        md:hover:text-purple-500 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                    </li>
                    <li>
                        <a href="login" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 
                        md:hover:text-purple-500 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <table class="w-full bg-gray-800 rounded-lg overflow-hidden">
        <tr class="text-left">
            <th class="py-2 px-4">id</th>
            <th class="py-2 px-4">nama</th>
            <th class="py-2 px-4">nrp</th>
            <th class="py-2 px-4">jurusan</th>
            <th class="py-2 px-4">fakultas</th>
            <th class="py-2 px-4">gambar</th>
            <th class="py-2 px-4">Edit data</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr class="text-left">
            <td class="py-2 px-4">{{$m->id}}</td>
            <td class="py-2 px-4">{{$m->nama}}</td>
            <td class="py-2 px-4">{{$m->nrp}}</td>
            <td class="py-2 px-4">{{$m->jurusan}}</td>
            <td class="py-2 px-4">{{$m->fakultas}}</td>
            <td>
                @if($m->gambar)
                    <img src="{{ asset('images/' . $m->gambar) }}" alt="Gambar" class="thumbnail">
                @else
                    Tidak ada gambar
                @endif
            </td>
            <td class="py-2 px-4">
                <a href="/Mahasiswa/{{$m->id}}/edit" class="bg-purple-500 text-white py-1 px-3 rounded text-sm hover:bg-purple-600 
                focus:outline-none focus:ring-2 focus:ring-purple-500">Edit</a>
                <form action="/Mahasiswa/{{$m->id}}" method="POST" class="inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded text-sm hover:bg-red-600 
                    focus:outline-none focus:ring-2 focus:ring-purple-500">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="Mahasiswa/create/" class="gg-add-r"></a>

</body>
</html>
