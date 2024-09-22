<div>
    <!-- block news -->
    <div class="py-6 bg-gray-50">
        <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
            <div class="flex flex-row flex-wrap">
                <!-- Left -->
                <div class="flex-shrink w-full max-w-full overflow-hidden lg:w-2/3">
                    <div class="w-full py-3">
                        <h2 class="text-2xl font-bold text-gray-800">
                            <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span>Asian
                        </h2>
                    </div>
                    <div class="flex flex-row flex-wrap -mx-3">
                        <div class="flex-shrink w-full max-w-full px-3 pb-5">
                            <div class="relative overflow-hidden hover-img max-h-98">
                                <!--thumbnail-->
                                <a href="#">
                                    <img class="w-full h-auto max-w-full mx-auto" src="{{ asset('img/img1.jpg') }}"
                                        alt="Image description" />
                                </a>
                                <div class="absolute bottom-0 w-full px-5 pt-8 pb-5 bg-gradient-cover">
                                    <!--title-->
                                    <a href="#">
                                        <h2 class="mb-3 text-3xl font-bold text-white capitalize">
                                            Amazon Shoppers Are Ditching Designer Belts for This
                                            Best-Selling
                                        </h2>
                                    </a>
                                    <p class="hidden text-gray-100 sm:inline-block">
                                        This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This very
                                        helpfull for generate default content..
                                    </p>
                                    <!-- author and date -->
                                    <div class="pt-2">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 mr-2 border-l-2 border-red-600"></div>
                                            Europe
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach (range(1, 3) as $articles)
                            <div
                                class="flex-shrink w-full max-w-full px-3 pt-3 pb-3 border-b-2 border-gray-100 border-dotted sm:w-1/3 sm:pt-0 sm:border-b-0">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="w-full max-w-full mx-auto" src="{{ asset('img/img3.jpg') }}"
                                            alt="alt title" />
                                    </a>
                                    <div class="py-0 pl-3 sm:py-3 sm:pl-0">
                                        <h3 class="mb-2 text-lg font-bold leading-tight">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden mb-1 leading-tight text-gray-600 md:block">
                                            This is a wider card with supporting text below as a
                                            natural lead-in to additional content.
                                        </p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 mr-2 border-l-2 border-red-600"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- right -->
                <div class="flex-shrink order-first w-full max-w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 lg:order-last">
                    <div class="w-full bg-white">
                        <div class="mb-6">
                            <div class="p-4 bg-gray-100">
                                <h2 class="text-lg font-bold">Most Popular</h2>
                            </div>
                            <ul class="post-number">
                                <li class="border-b border-gray-100 hover:bg-gray-50">
                                    <a class="flex flex-row items-center px-6 py-3 text-lg font-bold" href="#">Why
                                        the world would end without political polls</a>
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
                                    <a class="flex flex-row items-center px-6 py-3 text-lg font-bold" href="#">ZF
                                        plans $14 billion autonomous vehicle push, concept
                                        van</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sticky py-6 text-sm">
                        <div class="w-full text-center">
                            <a class="uppercase" href="#">Advertisement</a>
                            <a href="#">
                                <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- block news -->
    <div class="py-6 bg-gray-50">
        <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
            <div class="flex flex-row flex-wrap">
                <!-- post -->
                <div class="flex-shrink w-full max-w-full overflow-hidden lg:w-2/3">
                    <div class="w-full py-3">
                        <h2 class="text-2xl font-bold text-gray-800">
                            <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span>Latest news
                        </h2>
                    </div>
                    <div class="flex flex-row flex-wrap -mx-3">
                        <div class="flex-shrink w-full max-w-full px-3 pb-5">
                            <div class="relative overflow-hidden hover-img max-h-98">
                                <!--thumbnail-->
                                <a href="#">
                                    <img class="w-full h-auto max-w-full mx-auto" src="{{ asset('img/img4.jpg') }}"
                                        alt="Image description" />
                                </a>
                                <div class="absolute bottom-0 w-full px-5 pt-8 pb-5 bg-gradient-cover">
                                    <!--title-->
                                    <a href="#">
                                        <h2 class="mb-3 text-3xl font-bold text-white capitalize">
                                            Amazon Shoppers Are Ditching Designer Belts for This
                                            Best-Selling
                                        </h2>
                                    </a>
                                    <p class="hidden text-gray-100 sm:inline-block">
                                        This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This very
                                        helpfull for generate default content..
                                    </p>
                                    <!-- author and date -->
                                    <div class="pt-2">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 mr-2 border-l-2 border-red-600"></div>
                                            Europe
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach (range(1, 6) as $latestArticles)
                            <div
                                class="flex-shrink w-full max-w-full px-3 pt-3 pb-3 border-b-2 border-gray-100 border-dotted sm:w-1/3 sm:pt-0 sm:border-b-0">
                                <div class="flex flex-row sm:block hover-img">
                                    <a href="">
                                        <img class="w-full max-w-full mx-auto" src="{{ asset('img/img5.jpg') }}"
                                            alt="alt title" />
                                    </a>
                                    <div class="py-0 pl-3 sm:py-3 sm:pl-0">
                                        <h3 class="mb-2 text-lg font-bold leading-tight">
                                            <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                        </h3>
                                        <p class="hidden mb-1 leading-tight text-gray-600 md:block">
                                            This is a wider card with supporting text below as a
                                            natural lead-in to additional content.
                                        </p>
                                        <a class="text-gray-500" href="#"><span
                                                class="inline-block h-3 mr-2 border-l-2 border-red-600"></span>Europe</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- sidebar -->
                <div class="flex-shrink order-first w-full max-w-full lg:w-1/3 lg:pr-8 lg:pt-14 lg:pb-8">
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
                                <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
