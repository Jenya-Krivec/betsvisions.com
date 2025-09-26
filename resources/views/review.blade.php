@extends('app')

@section('title', trans('review.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('review.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('review.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-16 bg-gray-100">
        <!-- Banner -->
        <div class="w-full flex py-10 flex-col sm:flex-row border-violet-500 border-2 bg-white">
            <div class="w-full sm:w-2/3 flex justify-center items-center flex-col sm:flex-row">
                <div class="w-28 h-28 rounded-full flex justify-center items-center border-2 border-white flex-shrink-0" style="background-color: {{ $bookmaker['logo_color'] }}">
                    <img src="{{asset('img/logo/'.$bookmaker['logo'].'?v='.filemtime('img/logo/'.$bookmaker['logo']))}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                </div>
                <div class="text-gray-500 mx-4">
                    <h1 class="text-sm sm:text-4xl font-bold my-2">{{trans('review.Review', ['bookmaker' => $bookmaker['name']])}}</h1>
                    <div class="rate flex justify-between items-center lg:w-40" data-rate-id="{{$bookmaker['id']}}">
                        <input name="rate" value="1" type="checkbox" aria-label="One star" disabled="disabled">
                        <input name="rate" value="2" type="checkbox" aria-label="Two stars" disabled="disabled">
                        <input name="rate" value="3" type="checkbox" aria-label="Three stars" disabled="disabled">
                        <input name="rate" value="4" type="checkbox" aria-label="Four stars" disabled="disabled">
                        <input name="rate" value="5" type="checkbox" aria-label="Five stars" disabled="disabled">
                        <div class="text-lg" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 flex-col justify-center items-center flex px-2">
                @if($bookmaker['warning_'.app()->getLocale()])
                    <div class="text-xs my-1 text-gray-500 text-center">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</div>
                @endif
                <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-gray-500 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-16 py-2">@lang('review.Claim')</span>
            </div>
        </div>
        <!--Navigation -->
        <div class="w-full flex justify-center items-center text-blue-700 pt-4 text-sm sm:text-base text-center bg-gray-100">
            <div class="text-xs sm:text-lg border-2 border-violet-500 rounded-md bg-gray-100 text-gray-500 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">
                <p>{{trans('review.Review', ['bookmaker' => ''])}}</p>
            </div>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-gray-100 hover:text-gray-500 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('review.Promotions and Bonuses', ['bookmaker' => ''])}}</a>
            <a href="{{route('mobileapp', $bookmaker['key'])}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-gray-100 hover:text-gray-500 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">@lang('review.Mobile App')</a>
        </div>
        <!-- Quick info -->
        <div class="w-full bg-gray-100 pt-4 px-0 lg:px-28" id="quick-info">
            @if($bookmaker['payments'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2 flex-col sm:flex-row">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">@lang('review.Payment Methods'):</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['payments'] as $payment)
                        <img class="w-8 h-8 p-1" style="filter: grayscale(100%);" src="{{ asset('img/payment_icon/'.$payment['icon'].'.png').'?v='.filemtime('img/payment_icon/'.$payment['icon'].'.png')}}" alt="{{$payment['name']}} icon" title="{{$payment['name']}}" width="66" height="66">
                    @endforeach
                </div>
            </div>
            @endif
            @if($bookmaker['currencies'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2 flex-col sm:flex-row">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">@lang('review.Currency'):</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['currencies'] as $currency)
                        <p class="px-1 text-gray-500" title="{{$currency['key']}}">{{$currency['name_'.app()->getLocale()]}}@if($currency != end($bookmaker['currencies'])),@endif</p>
                    @endforeach
                </div>
            </div>
            @endif
            @if($bookmaker['licensed'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2 flex-col sm:flex-row">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">@lang('review.Licensed/Regulated by'):</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    <p class="p-1 text-gray-500">{{$bookmaker['licensed']}}</p>
                </div>
            </div>
            @endif
            @if($bookmaker['sports'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2 flex-col sm:flex-row">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">@lang('review.Sports'):</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['sports'] as $sport)
                        <img class="w-8 h-8 p-1" src="{{asset('img/sport_icon/'.$sport['icon'].'.png').'?v='.filemtime('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name_'.app()->getLocale()]}} icon" title="{{$sport['name_'.app()->getLocale()]}}" width="66" height="66">
                    @endforeach
                </div>
            </div>
            @endif
            @if($bookmaker['restrictions'])
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2 flex-col sm:flex-row">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                    <span class="text-base text-gray-500">@lang('review.Responsible Gambling'):</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @foreach($bookmaker['restrictions'] as $restriction)
                        <p class="px-1 text-gray-500">{{$restriction['name_'.app()->getLocale()]}}@if($restriction != end($bookmaker['restrictions'])),@endif</p>
                    @endforeach
                </div>
            </div>
            @endif
            @if($bookmaker['supports'])
                <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2 flex-col sm:flex-row">
                    <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 w-full justify-center">
                        <span class="text-base text-gray-500">@lang('review.Customer Support'):</span>
                    </div>
                    <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                        @foreach($bookmaker['supports'] as $support)
                            <p class="px-1 text-gray-500">{{$support['name_'.app()->getLocale()]}}@if($support != end($bookmaker['supports'])),@endif</p>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2">
                <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 justify-center">
                    <span class="text-base text-gray-500">@lang('review.Live Streaming'):</span>
                </div>
                <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                    @if($bookmaker['streaming'])
                        <div class="flex-row flex justify-center items-center text-violet-500 border-2 border-violet-500 w-6 h-6 ml-5 rounded-sm">&check;</div>
                    @else
                        <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
                    @endif
                </div>
           </div>
           <div class="w-full flex justify-center items-center p-2 py-4 bg-white border-gray-200 border-b-2">
               <div class="flex sm:justify-end items-center sm:w-48 flex-shrink-0 justify-center">
                   <span class="text-sm text-gray-500">@lang('review.Tested Betting Sites'):</span>
               </div>
               <div class="relative flex-row flex justify-start items-center flex-wrap cursor-pointer sm:pl-4 w-full">
                   @if($bookmaker['tested'])
                       <div class="flex-row flex justify-center items-center text-violet-500 border-2 border-violet-500 w-6 h-6 ml-5 rounded-sm">&check;</div>
                   @else
                       <div class="flex-row flex justify-center items-center cursor-default text-gray-500 border-2 border-gray-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
                   @endif
               </div>
           </div>
        </div>
        <!--Review-->
        <div class="w-full bg-gray-100 px-0 my-4 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white">
                @foreach($review as $component)
                    @include('inc/component_'.$component['component'], ['key' => $component['key'], 'values' => json_decode($component['value_'.app()->getLocale()], true)])
                @endforeach
            </div>
        </div>
        <div class="w-full bg-gray-100 px-0 mt-4 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white">
                <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-gray-500 flex justify-center items-center cursor-pointer transition-all w-44 duration-500 my-2 mx-auto px-16 py-2">@lang('review.Claim')</span>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/review/rate.js').'?v='.filemtime('js/review/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/review/quickInfo.js').'?v='.filemtime('js/review/quickInfo.js') }}"></script>
@endsection
