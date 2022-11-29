@extends('layouts.app', ['title' => 'Asset'])
@section('content')
    <div class="flex">
        <x-sidebar></x-sidebar>
        <div class="mt-20 px-5">
            <button type="submit"
                class="bg-blue-500 px-3 rounded-md text-white hover:bg-green-600 ease-in-out duration-500">New Item</button>
            <x-table></x-table>
        </div>
    </div>
@endsection
