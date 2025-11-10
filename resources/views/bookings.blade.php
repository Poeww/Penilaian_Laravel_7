<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking dolanDjogja</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="text-center py-8">
        <h1 class="text-4xl font-bold text-blue-700 mb-2">Daftar Booking</h1>
        <p class="text-blue-500">Data pemesanan paket wisata dolanDjogja</p>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex justify-center">
        <div class="w-full max-w-6xl bg-white shadow-lg rounded-lg overflow-hidden border border-blue-200 mx-4">
            <table class="min-w-full table-auto text-sm text-gray-700">
                <thead class="bg-blue-600 text-white uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">User</th>
                        <th class="py-3 px-4 text-left">Package</th>
                        <th class="py-3 px-4 text-left">Tanggal</th>
                        <th class="py-3 px-4 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $b)
                    <tr class="border-b hover:bg-blue-50 transition-colors duration-150">
                        <td class="py-3 px-4 font-medium text-blue-800">{{ $b->id }}</td>
                        <td class="py-3 px-4">{{ $b->user_id }}</td>
                        <td class="py-3 px-4">{{ $b->package_id }}</td>
                        <td class="py-3 px-4">{{ $b->booking_date }}</td>
                        <td class="py-3 px-4">
                            @if($b->status == 'confirmed')
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Confirmed</span>
                            @elseif($b->status == 'pending')
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-semibold">Pending</span>
                            @elseif($b->status == 'completed')
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Completed</span>
                            @elseif($b->status == 'cancelled')
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">Cancelled</span>
                            @else
                                <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs font-semibold">{{ $b->status }}</span>
                            @endif
                        </td>
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
