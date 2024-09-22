<div>
    <!-- slider news -->
    <div class="relative bg-gray-50">
        <div class="bg-black bg-opacity-70">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <div class="flex-shrink w-full max-w-full py-12 overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-2xl font-bold text-white text-shadow-black">
                                <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span>Entertaiment
                            </h2>
                        </div>
                        <div id="post-carousel" class="splide post-carousel">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($entertaiments as $item)
                                        <li class="splide__slide">
                                            <div class="w-full pb-3">
                                                <div class="bg-white hover-img">
                                                    <a href="{{ route('news.show', $item->slug) }}">
                                                        <img class="w-full max-w-full mx-auto"
                                                            src="{{ asset('storage/' . $item->thumbnail) }}"
                                                            alt="alt title" />
                                                    </a>
                                                    <div class="px-6 py-3">
                                                        <h3 class="mb-2 text-lg font-bold leading-tight">
                                                            <a href="#">{{ $item->title }}</a>
                                                        </h3>
                                                        <a class="text-gray-500" href="#"><span
                                                                class="inline-block h-3 mr-2 border-l-2 border-red-600"></span>{{ $item->category->name }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
