<div>


    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- advertisement -->
        <div class="hidden py-4 bg-gray-50">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="table mx-auto text-sm text-center">
                    <a class="uppercase" href="#">Advertisement</a>
                    <a href="#">
                        <img src="src/img/ads/ads_728.jpg" alt="advertisement area" />
                    </a>
                </div>
            </div>
        </div>

        @livewire('components.hero')

        <!-- block news -->
        <div class="bg-white">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink w-full max-w-full overflow-hidden lg:w-2/3">
                        <div class="w-full py-3">
                            <h2 class="text-2xl font-bold text-gray-800">
                                <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span>International News
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            @foreach ($international as $item)
                                <div
                                    class="flex-shrink w-full max-w-full px-3 pt-3 pb-3 border-b-2 border-gray-100 border-dotted sm:w-1/3 sm:pt-0 sm:border-b-0">
                                    <div class="flex flex-row sm:block hover-img">
                                        <a href="">
                                            <img class="w-full max-w-full mx-auto"
                                                src="{{ asset('storage/' . $item->thumbnail) }}" alt="alt title" />
                                        </a>
                                        <div class="py-0 pl-3 sm:py-3 sm:pl-0">
                                            <h3 class="mb-2 text-lg font-bold leading-tight">
                                                <a href="#">{{ $item->title }}</a>
                                            </h3>
                                            {{-- <p class="hidden mb-1 leading-tight text-gray-600 md:block">
                                            </p> --}}
                                            <a class="text-gray-500" href="#"><span
                                                    class="inline-block h-3 mr-2 border-l-2 border-red-600"></span>{{ $item->category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- right -->
                    <div
                        class="flex-shrink order-first w-full max-w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 lg:order-last">
                        <div class="w-full h-full bg-gray-50">
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

        @livewire('components.article-slider')
        @livewire('components.article-list')
        @livewire('components.article-list-ads')
    </main>
    <!-- end main -->


</div>
