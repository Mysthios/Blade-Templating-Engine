@include('admin.layouts.app')

@section('title', 'contact')
@section('content')

<div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Contact Page</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-gray-600">Name</th>
                    <th class="px-6 py-3 text-left text-gray-600">Role</th>
                    <th class="px-6 py-3 text-left text-gray-600">Email</th>
                    <th class="px-6 py-3 text-left text-gray-600">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Array dummy data
                $people = [
                    ["name" => "John Doe", "role" => "Mahasiswa", "email" => "john@example.com", "phone" => "123-456-7890"],
                    ["name" => "Jane Smith", "role" => "Karyawan", "email" => "jane@example.com", "phone" => "987-654-3210"],
                    ["name" => "David Lee", "role" => "Mahasiswa", "email" => "david@example.com", "phone" => "456-789-1234"],
                    ["name" => "Anna White", "role" => "Karyawan", "email" => "anna@example.com", "phone" => "654-321-9870"]
                ];

                // Looping untuk menampilkan data di dalam tabel
                foreach ($people as $person) {
                    echo "<tr class='bg-white border-b hover:bg-gray-100'>";
                    echo "<td class='px-6 py-4'>{$person['name']}</td>";
                    echo "<td class='px-6 py-4'>{$person['role']}</td>";
                    echo "<td class='px-6 py-4'>{$person['email']}</td>";
                    echo "<td class='px-6 py-4'>{$person['phone']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>