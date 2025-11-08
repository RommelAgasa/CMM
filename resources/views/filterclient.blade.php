<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center flex-col">

    <div class="w-full max-w-5xl">
        <div class="flex justify-between items-center mb-4 px-4">
            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Client List</h2>
            <div>
                <label for="statusFilter" class="sr-only">Filter by Status</label>
                <form method="GET" action="{{ route('filter.index') }}" class="mb-4 flex justify-end">
                    <select name="status" onchange="this.form.submit()" class="border border-gray-300 rounded-md px-3 py-2 text-sm">
                        <option value="" {{ $status === null ? 'selected' : '' }}>All</option>
                        <option value="active" {{ $status === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </form>
            </div>
        </div>

        <div class="shadow-lg rounded-lg overflow-x-auto">
            <table class="min-w-full table-auto border border-gray-200 dark:border-gray-700">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-900">
                    @forelse ($clients as $client)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $client->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 truncate">{{ $client->email }}</td>
                            <td class="px-6 py-4 text-sm">
                                @if ($client->status === 'active')
                                    <span class="bg-green-500 text-white py-1 px-3 rounded-full text-xs">Active</span>
                                @else
                                    <span class="bg-red-500 text-white py-1 px-3 rounded-full text-xs">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-sm text-center text-gray-500 dark:text-gray-400">No clients found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>