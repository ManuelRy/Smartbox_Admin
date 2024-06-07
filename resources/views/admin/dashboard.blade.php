@extends('layouts.app')

@section('content')
<div class="min-h-screen p-6" style="background-color: #FFEDD5;">
    <h1 class="text-3xl mb-6 text-yellow-600 font-bold">ADMIN DASHBOARD</h1>
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-yellow-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h2 class="text-xl font-bold text-orange-600">Users</h2>
            <p class="text-4xl font-bold">{{ $userCount }}</p>
        </div>
        <div class="bg-yellow-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h2 class="text-xl font-bold text-orange-600">Lockers</h2>
            <p class="text-4xl font-bold">{{ $lockerCount }}</p>
        </div>
    </div>
       </div>
@endsection
