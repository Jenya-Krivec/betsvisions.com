@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>On this page, you can see what the main page with the list of bookmakers will look like.</p>
    <p>To edit a bookmaker, click the pencil icon in the bottom right corner.</p>
    <p>Inactive bookmakers are placed at the bottom and highlighted in red.</p>
    <p>To add a new bookmaker, click the '+' button at the bottom of the list.</p>
@endsection

@section('content')
    <main class="xl:px-20 px-3 py-2 m-auto pt-28 bg-gray-100">
        <h1 class="text-center text-lg px-0 sm:text-2xl sm:px-7 sm:text-left font-bold mb-4">Bookmakers</h1>
        <div class="flex flex-wrap">
            @foreach($bookmakers as $bookmaker)
                @include('inc.component_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => Auth::check()])
            @endforeach
        </div>
        <a href="{{ route('admin.editBookmaker', ' ') }}" class="flex justify-center items-center bg-violet-500 rounded-full hover:bg-white hover:text-black border-2 border-violet-500 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl mx-auto my-4">+</a>
    </main>
@endsection
