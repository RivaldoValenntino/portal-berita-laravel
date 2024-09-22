<div>
    <!-- hero big grid -->
    <div class="py-20 bg-white">
        <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
            <!-- big grid 1 -->
            <div class="flex flex-row flex-wrap">
                <!--Start left cover-->
                <div class="flex-shrink w-full max-w-full pb-1 lg:w-1/2 lg:pb-0 lg:pr-1">
                    <div class="relative overflow-hidden hover-img max-h-98">
                        <a href="{{ route('news.show', $latestMetropolitan->slug) }}">
                            <img class="w-full h-auto max-w-full mx-auto brightness-50"
                                src="{{ asset('storage/' . $latestMetropolitan->thumbnail) }}" alt="Image description" />
                        </a>
                        <div class="absolute bottom-0 w-full px-5 pt-8 pb-5 bg-gradient-cover">
                            <a href="{{ route('news.show', $latestMetropolitan->slug) }}">
                                <h2 class="mb-3 text-3xl font-bold text-white capitalize">
                                    {{ $latestMetropolitan->title }}
                                </h2>
                            </a>
                            <div class="pt-2">
                                <div class="text-gray-100">
                                    <div class="inline-block h-3 mr-2 border-l-2 border-red-600"></div>
                                    {{ $latestMetropolitan->category->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start box news-->
                <div class="flex-shrink w-full max-w-full lg:w-1/2">
                    <div class="flex flex-row flex-wrap box-one">
                        @foreach ($metropolitans as $item)
                            <article class="flex-shrink w-full max-w-full sm:w-1/2">
                                <div class="relative overflow-hidden hover-img max-h-48">
                                    <a href="{{ route('news.show', $item->slug) }}">
                                        <img class="w-full h-auto max-w-full mx-auto brightness-75"
                                            src="{{ asset('storage/' . $item->thumbnail) }}"
                                            alt="{{ $item->title }}" />
                                    </a>
                                    <div class="absolute bottom-0 w-full px-4 pb-4 pt-7 bg-gradient-cover">
                                        <a href="{{ route('news.show', $item->slug) }}">
                                            <h2 class="mb-1 text-lg font-bold leading-tight text-white capitalize">
                                                {{ $item->title }}
                                            </h2>
                                        </a>
                                        <div class="pt-1">
                                            <div class="text-gray-100">
                                                <div class="inline-block h-3 mr-2 border-l-2 border-red-600"></div>
                                                {{ $item->category->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
