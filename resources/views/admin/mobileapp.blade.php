@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>To add a new element to the page:</p>
    <p>1. Click the + button on the left</p>
    <p>2. Select an element from the list that appears on the left</p>
    <p>3. Choose the location where you want to add it</p>
    <p>4. Fill in all fields in English, Spanish, French, and Portuguese (on the right side of the element, there is a language switch menu)</p>
    <p>5. Click the ✓ button on the right to save all your edits</p>
    <br>
    <p>Image upload is done in two steps:</p>
    <p>1.Upload a .webp image for the desktop version of the website (recommended aspect ratio – 900x450)</p>
    <p>2. Upload a .webp image for the mobile version of the website (recommended aspect ratio – 360x360)</p>
    <p>Once uploaded successfully, the image will be displayed.</p>
    <p>Attention! Files for the desktop and mobile versions of the website must have the same file extension.</p>
    <br>
    <p>To delete an element, click the X button located on the right next to each element.</p>
    <p>In some elements, such as the Pros & Cons table, there are + buttons at the bottom that allow you to add new rows to the table.</p>
    <p>If you need to delete a row in the table, simply leave it empty for all languages.</p>
@endsection

@section('content')
    <main class="bg-gray-100 font-serif">
        <div>
            @if($errors->any())
                <ul class="list-disc pl-5 my-4">
                    @foreach($errors->all() as $error)
                        <li class="text-base text-red-700">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
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
                            <h1 class="text-lg sm:text-2xl pl-1 font-bold border-l-8 border-white text-white">@lang('mobileapp.Mobile App')</h1>
                        </div>
                        <div class="flex flex-col text-white justify-around self-stretch rounded-md my-4 mx-4 font-sans">
                            <p class="text-sm lg:text-base">{{$bookmaker['warning_'.app()->getLocale()]}}</p>
                        </div>
                        <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 mx-1 md:mx-auto">
                            <div class="flex flex-row sm:flex-col lg:flex-row justify-center items-center">
                                <span data-url="{{$bookmaker['url']}}" class="h-10 w-36 m-2 text-sm text-white rounded-md border-2 border-white hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400 download-btn">
                                    <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                                    <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/android.png'.'?v='.filemtime('img/mobileapp/android.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                                </span>
                                <span data-url="{{$bookmaker['url']}}" class="h-10 w-36 m-2 text-sm text-white rounded-md border-2 border-white hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400 download-btn">
                                    <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                                    <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/ios.png'.'?v='.filemtime('img/mobileapp/ios.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around flex-shrink-0 self-stretch rounded-md p-2 animate-list" id="animList">
                        <p class="text-center text-white">@lang('mobileapp.Contents')</p>
                        <?php $index = 1; ?>
                        @foreach($page as $component)
                            @if($component['component'] === 'h2')
                                <span data-href="{{json_decode($component['value_'.app()->getLocale()], true)[0]}}" class="text-white cursor-pointer anchor text-base sm:text-xs lg:text-base">{{$index++.'. '.json_decode($component['value_'.app()->getLocale()], true)[0]}}</span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--Navigation -->
                <div class="w-full flex justify-center items-center text-blue-700 py-4 text-sm sm:text-base text-center relative">
                    <a href="{{route('review', $bookmaker['key'])}}" class="text-xs sm:text-lg border-2 border-white text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('mobileapp.Review', ['bookmaker' => ''])}}</a>
                    <a href="{{route('promocode', $bookmaker['key'])}}" class="text-xs sm:text-lg border-2 border-white text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('mobileapp.Promotions and Bonuses', ['bookmaker' => ''])}}</a>
                    <div class="text-xs sm:text-lg border-2 border-white rounded-md bg-white text-black flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">
                        <p>{{trans('mobileapp.Mobile App', ['bookmaker' => ''])}}</p>
                    </div>
                    <button class="flex items-center text-white bg-violet-500 rounded-full cursor-pointer absolute hidden add-after border-2 border-white" data-id="0" title="add component after" style="left:8.5rem; bottom:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
                            <path d="M12 18l-4-4h8l-4 4z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Content -->
        <form method="POST" action="{{route('admin.storeMobileApp', ['key' => $bookmaker['key']])}}" enctype="multipart/form-data" class="w-full bg-gray-100 px-0 lg:px-28 pt-4 form">
            <div class="px-2 sm:px-10 py-4 bg-white">
                @csrf
                @foreach($page as $component)
                    @include('admin/inc/edit_'.$component['component'], ['id' => $component['id'], 'key' => $component['key'], 'values' => ['en' => $component['value_en'], 'es' => $component['value_es'], 'fr' => $component['value_fr'], 'pt' => $component['value_pt']]])
                @endforeach
            </div>
            <div class="w-full bg-gray-100 px-0 mt-4">
                <div class="px-2 sm:px-10 py-4 bg-white flex justify-center">
                <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all duration-500 my-2 mx-auto px-4 sm:px-16 py-2 download-btn">
                    <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                    <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/android.png'.'?v='.filemtime('img/mobileapp/android.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                </span>
                    <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-black flex justify-center items-center cursor-pointer transition-all duration-500 my-2 mx-auto px-4 sm:px-16 py-2 download-btn">
                    <span data-url="{{$bookmaker['url']}}">@lang('mobileapp.Download')</span>
                    <img data-url="{{$bookmaker['url']}}" src="{{asset('img/mobileapp/ios.png'.'?v='.filemtime('img/mobileapp/ios.png'))}}" alt="android" width="32" height="32" class="w-4 ml-1">
                </span>
                </div>
            </div>
            <input id="save-btn" class="flex justify-center items-center bg-violet-500 rounded-full cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 right-1 hover:bg-white hover:text-black border-2 border-violet-500" title="Save all" type="submit" value="&#x2713;">
        </form>
        <div id="add-section-btn" class="flex justify-center items-center bg-violet-500 rounded-full cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 left-1 hover:bg-white hover:text-black border-2 border-violet-500" title="Add Component">+</div>
        <div id="add-section" class="fixed border-2 border-violet-500 bg-white rounded-md flex justify-center items-center -left-52 p-2 flex-col bottom-1/2 transition-all duration-500 z-30" style="transform: translateY(50%);">
            <button id="close-add-section-btn" class="text-white bg-violet-500 text-xs rounded-full cursor-pointer transition-all duration-500 h-5 w-5 absolute -top-2 -right-2 pb-1 hover:bg-white hover:text-black border-2 border-violet-500" title="Close">x</button>
            <script>
                const bookmakerName = '{{$bookmaker['name']}}';
                const bookmakerPhone = '{{$bookmaker['phone']}}';
                const bookmakerEmail = '{{$bookmaker['email']}}';
                const sports = {en: [], es: [], fr: [], pt: []};
                const payments = [];
                const bookmakers = [];
                @foreach(['en', 'es', 'fr', 'pt'] as $lang)
                    @foreach($bookmaker['sports'] as $sport)
                    sports['{{$lang}}'].push('{{$sport['name_'.$lang]}}');
                @endforeach
                @endforeach
                @for($i = 0; $i < count($bookmaker['payments']); $i++)
                @if($i < 16)
                payments.push('{{$bookmaker['payments'][$i]['name']}}');
                @endif
                @endfor
                @foreach($bookmaker['bookmakers'] as $bookmaker)
                bookmakers.push('{{$bookmaker['name']}}');
                @endforeach
            </script>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Caption">Add Caption</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Subtitle">Add Subtitle</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Paragraph">Add Paragraph</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Picture">Add Picture</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="List">Add List</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="ProsCons">Add Pros & Cons</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Sports">Add Sports</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Payments">Add Payments</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Support">Add Support</button>
            <button class="w-full text-white border-2 border-violet-500 bg-violet-500 hover:bg-white hover:text-black text-xs rounded-full flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Comparison">Add Comparison</button>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/mobileapp/rate.js').'?v='.filemtime('js/mobileapp/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/mobileapp/contents.js').'?v='.filemtime('js/mobileapp/contents.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/textarea.js').'?v='.filemtime('js/admin/mobileapp/textarea.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/delete.js').'?v='.filemtime('js/admin/mobileapp/delete.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/language.js').'?v='.filemtime('js/admin/mobileapp/language.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/caption.js').'?v='.filemtime('js/admin/mobileapp/caption.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/subtitle.js').'?v='.filemtime('js/admin/mobileapp/subtitle.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/paragraph.js').'?v='.filemtime('js/admin/mobileapp/paragraph.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/picture.js').'?v='.filemtime('js/admin/mobileapp/picture.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/list.js').'?v='.filemtime('js/admin/mobileapp/list.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/prosCons.js').'?v='.filemtime('js/admin/mobileapp/prosCons.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/sports.js').'?v='.filemtime('js/admin/mobileapp/sports.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/payments.js').'?v='.filemtime('js/admin/mobileapp/payments.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/support.js').'?v='.filemtime('js/admin/mobileapp/support.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/comparison.js').'?v='.filemtime('js/admin/mobileapp/comparison.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/mobileapp/addSection.js').'?v='.filemtime('js/admin/mobileapp/addSection.js') }}"></script>
@endsection
