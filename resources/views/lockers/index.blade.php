@extends('layouts.app')

@section('content')
<div class="min-h-screen p-6" style="background-color: #FFEDD5;">
    <h1 class="text-3xl mb-6 text-yellow-600 font-bold">Lockers</h1>
    <div class="mb-6 flex space-x-4">
        <button onclick="filterLockers('Small')" class="p-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-200">Small</button>
        <button onclick="filterLockers('Medium')" class="p-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-200">Medium</button>
        <button onclick="filterLockers('Large')" class="p-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-200">Large</button>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <table class="w-full">
            <thead class="bg-yellow-100 text-yellow-600">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Locker Number</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">User</th>
                    <th class="p-3 text-left">PIN</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lockers as $locker)
                    <tr class="border-b border-gray-200">
                        <td class="p-3">{{ $locker->id }}</td>
                        <td class="p-3">{{ $locker->locker_number }}</td>
                        <td class="p-3">{{ $locker->status }}</td>
                        <td class="p-3">{{ $locker->user ? $locker->user->first_name . ' ' . $locker->user->last_name : '' }}</td>
                        <td class="p-3">{{ $locker->pin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function filterLockers(size) {
        window.location.href = '{{ route('lockers.index') }}' + '?size=' + size;
    }
</script>
@endsection
