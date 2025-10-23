<div class="flex flex-row justify-between w-full sm:w-1/2 lg:w-1/3 border-2 border-white relative p-4 @if($authorized && !$bookmaker['active']) border-2 border-red-500 @else border-white @endif" style="background-color: {{$bookmaker['logo_color']}}">
    @if($authorized)
    <a href="{{route('admin.editBookmaker', $bookmaker['key'])}}" title="edit" class="absolute z-20 bottom-0 right-0 text-xs bg-gray-300 w-5 h-5 flex justify-center items-center">&#x270F;</a>
    @endif
    <div class="flex flex-col justify-around self-center w-full">
        <div class="flex justify-between items-center">
            <div class="flex justify-center items-center">
                <p class="text-base font-bold text-white mr-4">{{$iteration}}</p>
                <a href="{{$bookmaker['url']}}" target="_blank" class="flex rounded-sm">
                    <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" class="h-10" alt="{{$bookmaker['name']}} logo" width="100" height="100">
                </a>
            </div>
            <div class="flex justify-center items-center">
                <span data-url="{{$bookmaker['url']}}" class="h-10 w-20 md:w-36 bg-white text-xs md:text-sm text-black rounded-md hover:bg-violet-600 hover:text-white flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400">@lang('index.Claim') &#8594;</span>
            </div>
        </div>
        <div class="flex flex-col justify-center w-full self-stretch rounded-md font-sans text-white h-32">
            <div class="text-sm mb-2 text-justify">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
            <div class="text-sm text-justify">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
        </div>
        <div class="flex justify-between z-10">
            <div class="flex flex-col justify-around flex-shrink-0 self-stretch w-42 md:w-52 p-2">
                <div class="flex justify-between items-center">
                    <p class="text-xs xl:text-base text-white">@lang('index.Rate it')!</p>
                    <div class="flex items-center mx-3">
                        <div class="text-2xl sm:text-4xl text-center text-white" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                        <p class="pt-3 text-white">/5</p>
                    </div>
                    <p class="rate-count text-xs xl:text-base text-white" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
                </div>
                <div class="rate flex mx-auto justify-between w-40" data-rate-id="{{$bookmaker['id']}}">
                    <input name="rate" value="1" type="checkbox" aria-label="One star">
                    <input name="rate" value="2" type="checkbox" aria-label="Two stars">
                    <input name="rate" value="3" type="checkbox" aria-label="Three stars">
                    <input name="rate" value="4" type="checkbox" aria-label="Four stars">
                    <input name="rate" value="5" type="checkbox" aria-label="Five stars">
                </div>
            </div>
            <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md">
                <div class="text-xs sm:text-sm text-center text-white">@lang('index.Promo code'):</div>
                <div class="flex border-2 @if($bookmaker['isLight']) border-black @else border-white @endif rounded w-min pr-2 mx-auto">
                    <p class="p-1 font-bold text-sm sm:text-md text-white">{{$bookmaker['promo_code']}}</p>
                    <span data-url="{{$bookmaker['url']}}" class="@if($bookmaker['isLight']) cope-promo-code-black @else cope-promo-code-white @endif" aria-label="Get promo code"></span>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between">
            <a href="{{route('review', $bookmaker['key'])}}" class="flex text-white h-10 px-4 mt-4 text-xs md:text-sm text-center rounded-md justify-center items-center cursor-pointer shadow-gray-400 border-2 hover:border-white hover:bg-white hover:text-black transition-all duration-500">@lang('index.Read Review')</a>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="flex text-white h-10 px-4 mt-2 text-xs md:text-sm text-center rounded-md justify-center items-center cursor-pointer shadow-gray-400 border-2 hover:border-white hover:bg-white hover:text-black transition-all duration-500">@lang('index.Read Promo Code Review')</a>
            <a href="{{route('mobileapp', $bookmaker['key'])}}" class="flex text-white h-10 px-4 mt-2 text-xs md:text-sm text-center rounded-md justify-center items-center cursor-pointer shadow-gray-400 border-2 hover:border-white hover:bg-white hover:text-black transition-all duration-500">@lang('index.Read Mobile App Review')</a>
        </div>
    </div>
</div>
