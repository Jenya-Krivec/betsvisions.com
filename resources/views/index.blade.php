@extends('app')

@section('title', trans('index.title').' '.date('Y'))

@section('description', trans('index.description'))

@section('keywords', trans('index.keywords'))

@section('content')
    <main class="font-serif">
        <div class="bg-black gradient">
            <div class="mx-auto flex justify-center sm:justify-start items-center flex-col sm:flex-row px-4 sm:px-0 py-10" style="max-width: 2000px;">
                <div class="hidden sm:block relative overflow-hidden self-end mx-2 lg:mx-12 w-1/4" style="max-width: 300px;">
                    <div class="vertical-slider slider flex flex-col">
                        @foreach($topSites as $site)
                            <a href="" target="_blank" class="slide flex justify-center items-center border-2 border-white flex-shrink-0 p-10 xl:px-28" style="background-color: {{$site['logo_color']}}; height: calc(100% / 3)">
                                <img class="block" src="{{ asset('img/logo/'.$site['logo']).'?v='.filemtime('img/logo/'.$site['logo'])}}" alt="{{$site['name']}} logo">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="self-center w-full sm:w-3/4 sm:mr-2 lg:mr-12 mt-10 small-container">
                    <div class="relative">
                        <h1 class="text-lg sm:text-2xl ml-10 sm:ml-14 pl-1 font-bold border-l-8 border-white text-white">@lang('index.Bookmakers')</h1>
                    </div>
                    <div class="text-justify my-4">
                        <p class="text-sm sm:text-base text-white text-justify indent-10 sm:indent-14 mb-4 font-sans">@lang('index.paragraph1')</p>
                    </div>
                    <div class="text-justify my-4">
                        <p class="text-sm sm:text-base text-white text-justify indent-10 sm:indent-14 mb-4 font-sans">@lang('index.paragraph2')</p>
                    </div>
                    <div class="text-justify my-4">
                        <p class="text-sm sm:text-base text-white text-justify indent-10 sm:indent-14 mb-4 font-sans">@lang('index.paragraph3')</p>
                    </div>
                </div>
                <div class="block sm:hidden relative w-full overflow-hidden my-4 mx-auto">
                    <div class="horizontal-slider slider flex">
                        @foreach($topSites as $site)
                            <a href="" target="_blank" class="slide flex justify-center items-center border-2 border-white" style="background-color: {{$site['logo_color']}}">
                                <img class="block w-full p-4" src="{{ asset('img/logo/'.$site['logo']).'?v='.filemtime('img/logo/'.$site['logo'])}}" alt="{{$site['name']}} logo" width="100" height="100">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr class="border-t-2 border-gray-200">
        <div class="xl:px-20 m-auto bg-gray-100">
            <div class="md:p-2 bg-white mx-auto flex flex-wrap" style="max-width: 1200px">
                @foreach($bookmakers as $bookmaker)
                    @include('inc.component_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => false])
                @endforeach
            </div>
            <div class="bg-white px-4 sm:px-10 md:px-20 mx-auto py-4" style="max-width: 1200px">
                <div class="text-justify my-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-6 sm:indent-14 mb-4 font-sans font-bold">@lang('index.paragraph4')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph5')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/bonus.png').'?v='.filemtime('img/index/bonus.png')}}" alt="bonus" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph6')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph7')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/promotions.png').'?v='.filemtime('img/index/promotions.png')}}" alt="promotions" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph8')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph9')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/payment.png').'?v='.filemtime('img/index/payment.png')}}" alt="payment" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph10')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph11')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/security.png').'?v='.filemtime('img/index/security.png')}}" alt="security" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph12')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph13')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/odds.png').'?v='.filemtime('img/index/odds.png')}}" alt="odds" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph14')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph15')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/streaming.png').'?v='.filemtime('img/index/streaming.png')}}" alt="streaming" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph16')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph17')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/betting.png').'?v='.filemtime('img/index/betting.png')}}" alt="betting" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph18')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph19')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/statistics.png').'?v='.filemtime('img/index/statistics.png')}}" alt="statistics" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph20')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph21')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/support.png').'?v='.filemtime('img/index/support.png')}}" alt="support" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph22')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl px-10 pl-1 font-bold border-l-8 border-violet-500">@lang('index.paragraph23')</h2>
                </div>
                <div class="flex text-justify my-4 pr-3">
                    <img class="block mx-auto w-14 h-14 my-auto mr-2" src="{{asset('img/index/responsible.png').'?v='.filemtime('img/index/responsible.png')}}" alt="responsible gaming" width="56" height="56">
                    <p class="text-base text-gray-700 text-justify my-2 font-sans">@lang('index.paragraph24')</p>
                </div>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/index/rate.js').'?v='.filemtime('js/index/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/index/slider.js').'?v='.filemtime('js/index/slider.js') }}"></script>
@endsection
