@extends('layouts.app')

@section('content')
<div class="min-h-screen p-6" style="background-color: #FFEDD5;">
    <h1 class="text-3xl mb-6 text-yellow-600 font-bold">Users</h1>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <table class="w-full">
            <thead class="bg-yellow-100 text-yellow-600">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">First Name</th>
                    <th class="p-3 text-left">Last Name</th>
                    <th class="p-3 text-left">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b border-gray-200">
                        <td class="p-3">{{ $user->id }}</td>
                        <td class="p-3">{{ $user->first_name }}</td>
                        <td class="p-3">{{ $user->last_name }}</td>
                        <td class="p-3">{{ $user->phone_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
