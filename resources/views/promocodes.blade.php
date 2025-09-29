@extends('app')

@section('title', trans('promocode.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('promocode.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('promocode.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main>
        <!-- Banner -->
        <div class="bg-black gradient overflow-x-hidden">
            <div class="flex justify-between flex-col mx-auto" style="max-width: 2000px;">
                <div class="mx-auto flex justify-center sm:justify-start items-center flex-col sm:flex-row px-4 pt-20">
                    <div class="flex justify-center" style="background-image: radial-gradient(circle at 50% 50%, {{$bookmaker['logo_color']}} 25%, rgba(0,0,0,0) 76%);">
                        <div class="flex flex-col justify-around flex-shrink-0 self-stretch w-full sm:w-auto sm:rounded-md py-10">
                            <div class="flex justify-center items-center">
                                <a href="{{$bookmaker['url']}}" target="_blank" class="flex rounded-sm">
                                    <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" class="h-10" alt="{{$bookmaker['name']}} logo" width="100" height="100">
                                </a>
                            </div>
                            <div class="flex justify-between items-center text-white">
                                <div class="flex items-center mx-3">
                                    <div class="text-2xl sm:text-4xl text-center" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                                    <p class="pt-3">/5</p>
                                </div>
                                <p class="rate-count text-xs xl:text-base" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
                            </div>
                            <div class="rate flex mx-auto justify-between w-40" data-rate-id="{{$bookmaker['id']}}">
                                <input name="rate" value="1" type="checkbox" aria-label="One star">
                                <input name="rate" value="2" type="checkbox" aria-label="Two stars">
                                <input name="rate" value="3" type="checkbox" aria-label="Three stars">
                                <input name="rate" value="4" type="checkbox" aria-label="Four stars">
                                <input name="rate" value="5" type="checkbox" aria-label="Five stars">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between flex-col sm:rounded-md lg:pl-10 lg:pr-2">
                        <div class="text-white mx-4">
                            <h1 class="text-lg sm:text-2xl pl-1 font-bold border-l-8 border-white text-white">{{trans('promocode.Promotions and Bonuses', ['bookmaker' => $bookmaker['name']])}}</h1>
                        </div>
                        <div class="flex flex-col text-white justify-around self-stretch rounded-md my-4 mx-4 font-sans">
                            <div class="text-sm lg:text-base mb-2">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
                            <div class="text-sm lg:text-base">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                        </div>
                        <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 mx-1 md:mx-auto">
                            <div class="flex justify-center items-center">
                                <span data-url="{{$bookmaker['url']}}" class="h-10 w-36 text-sm text-white rounded-md border-2 border-white hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400">@lang('promocode.Registration')</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 animate-list" id="animList">
                        <p class="text-center text-white">@lang('promocode.Contents')</p>
                        <?php $index = 1; ?>
                        @foreach($page as $component)
                            @if($component['component'] === 'h2')
                                <span data-href="{{json_decode($component['value_'.app()->getLocale()], true)[0]}}" class="text-white cursor-pointer anchor text-base sm:text-xs lg:text-base">{{$index++.'. '.json_decode($component['value_'.app()->getLocale()], true)[0]}}</span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--Navigation -->
                <div class="w-full flex justify-center items-center text-blue-700 py-4 text-sm sm:text-base text-center">
                    <a href="{{route('review', $bookmaker['key'])}}" class="text-xs sm:text-lg border-2 border-white text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('promocode.Review', ['bookmaker' => ''])}}</a>
                    <div class="text-xs sm:text-lg border-2 border-white rounded-md bg-white text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">
                        <p>{{trans('promocode.Promotions and Bonuses', ['bookmaker' => ''])}}</p>
                    </div>
                    <a href="" class="text-xs sm:text-lg border-2 border-white text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">@lang('promocode.Mobile App')</a>
                </div>
            </div>
        </div>
        <!--Review-->
        <div class="w-full bg-gray-100 px-0 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white mx-auto" style="max-width: 1200px">
                @foreach($page as $component)
                    @include('inc/component_'.$component['component'], ['key' => $component['key'], 'values' => json_decode($component['value_'.app()->getLocale()], true)])
                @endforeach
            </div>
        </div>
        <div class="w-full bg-gray-100 px-0 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white mx-auto" style="max-width: 1200px">
                <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all w-44 duration-500 my-2 mx-auto px-16 py-2">@lang('promocode.Registration')</span>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/promo/rate.js').'?v='.filemtime('js/promo/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/promo/anchor.js').'?v='.filemtime('js/promo/anchor.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/promo/gradient.js').'?v='.filemtime('js/promo/gradient.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/promo/contents.js').'?v='.filemtime('js/promo/contents.js') }}"></script>
@endsection
