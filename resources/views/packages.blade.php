<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Package dolanDjogja</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="text-center py-8">
        <h1 class="text-4xl font-bold text-blue-700 mb-2">Daftar Paket Wisata</h1>
        <p class="text-blue-500">Data paket wisata dolanDjogja</p>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex justify-center">
        <div class="w-full max-w-6xl bg-white shadow-lg rounded-lg overflow-hidden border border-blue-200 mx-4">
            <table class="min-w-full table-auto text-sm text-gray-700">
                <thead class="bg-blue-600 text-white uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Nama Paket</th>
                        <th class="py-3 px-4 text-left">Lokasi</th>
                        <th class="py-3 px-4 text-left">Durasi</th>
                        <th class="py-3 px-4 text-left">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $p)
                    <tr class="border-b hover:bg-blue-50 transition-colors duration-150">
                        <td class="py-3 px-4 font-medium text-blue-800">{{ $p->id }}</td>
                        <td class="py-3 px-4">{{ $p->package_name }}</td>
                        <td class="py-3 px-4">{{ $p->location }}</td>
                        <td class="py-3 px-4">{{ $p->duration }}</td>
                        <td class="py-3 px-4 font-semibold text-blue-600">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-auto bg-blue-700 text-white text-center py-4">
        <p class="text-sm tracking-wide">
            &copy; {{ date('Y') }} dolanDjogja Travel. Created by <strong>Kelompok 7 Kelas A</strong> - Project PAW.
        </p>
    </footer>
</body>
</html>
