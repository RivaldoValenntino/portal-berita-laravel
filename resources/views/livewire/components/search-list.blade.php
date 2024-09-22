<div>
    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- advertisement -->
        <div class="hidden py-4 bg-gray-50">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="table mx-auto text-sm text-center">
                    <a class="uppercase" href="#">Advertisement</a>
                    <a href="#">
                        <img src="src/img/ads/ads_728.jpg" alt="advertisement area">
                    </a>
                </div>
            </div>
        </div>
        <!-- block news -->
        <div class="py-20 bg-gray-50">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink w-full max-w-full overflow-hidden lg:w-2/3">
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink w-full max-w-full px-3">
                                <div class="w-full py-3 mb-4">
                                    <h2 class="text-3xl font-bold text-gray-800">
                                        <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span> Search
                                        result for:<b>
                                            @if (request('title'))
                                                {{ request('title') }}
                                            @endif
                                            @if (request('category'))
                                                {{ request('category') }}
                                            @endif
                                            @if (request('tag'))
                                                {{ request('tag') }}
                                            @endif

                                        </b>
                                    </h2>
                                </div>
                            </div>

                            @if ($posts->count() > 0)
                                @foreach ($posts as $results)
                                    <div
                                        class="flex-shrink w-full max-w-full px-3 pt-3 pb-3 border-b-2 border-gray-100 border-dotted sm:w-1/3 sm:pt-0 sm:border-b-0">
                                        <div class="flex flex-row sm:block hover-img">
                                            <a href="">
                                                <img class="w-full max-w-full mx-auto"
                                                    src="{{ asset('storage/' . $results->thumbnail) }}" alt="alt title">
                                            </a>
                                            <div class="py-0 pl-3 sm:py-3 sm:pl-0">
                                                <h3 class="mb-2 text-lg font-bold leading-tight">
                                                    <a href="#">{{ $results->title }}</a>
                                                </h3>
                                                <p class="hidden mb-1 leading-tight text-gray-600 md:block">
                                                    {!! Str::limit($results->content, 75) !!}
                                                </p>
                                                <a class="text-gray-500" href="#"><span
                                                        class="inline-block h-3 mr-2 border-l-2 border-red-600"></span>{{ $results->category->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="w-full">
                                    <div class="w-full py-3 mb-4">
                                        <h2 class="text-3xl font-bold text-gray-800">
                                            <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span> No
                                            result found
                                        </h2>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- right -->
                    <div
                        class="flex-shrink order-first w-full max-w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 lg:order-last">
                        <div class="w-full bg-white">
                            <div class="mb-6">
                                <div class="p-4 bg-gray-100">
                                    <h2 class="text-lg font-bold">Most Popular</h2>
                                </div>
                                <ul class="post-number">
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="flex flex-row items-center px-6 py-3 text-lg font-bold"
                                            href="#">Why the world would end without political polls</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="flex flex-row items-center px-6 py-3 text-lg font-bold"
                                            href="#">Meet The Man Who Designed The Ducati Monster</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="flex flex-row items-center px-6 py-3 text-lg font-bold"
                                            href="#">2020 Audi R8 Spyder spy shots release</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="flex flex-row items-center px-6 py-3 text-lg font-bold"
                                            href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="flex flex-row items-center px-6 py-3 text-lg font-bold"
                                            href="#">ZF plans $14 billion autonomous vehicle push, concept
                                            van</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sticky py-6 text-sm">
                            <div class="w-full text-center">
                                <a class="uppercase" href="#">Advertisement</a>
                                <a href="#">
                                    <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end main -->
</div>
