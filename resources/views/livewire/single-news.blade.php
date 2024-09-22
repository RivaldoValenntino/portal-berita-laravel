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
                        <div class="w-full py-3 mb-3">
                            <h2 class="text-3xl font-bold text-gray-800">
                                {{-- <span class="inline-block h-5 mr-2 border-red-600 border-l-3"></span> --}}
                                {{ $news->title }}
                            </h2>
                            <h6 class="py-2 text-gray-800 text-md">{{ $news->created_at->format('d F Y, H:i') }}</h6>
                        </div>
                        <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="" class="pb-8">
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="w-full max-w-full px-4">
                                <!-- Post content -->
                                <div class="pb-4">
                                    {!! html_entity_decode($news->content) !!}
                                </div>


                                <!-- author -->
                                <div class="flex flex-row flex-wrap justify-center py-4 -mx-4">
                                    <div class="flex-shrink w-1/3 max-w-full px-4 sm:w-1/4 md:w-1/6">
                                        <a href="#"><img
                                                class="h-auto max-w-full border rounded-full dark:border-gray-700"
                                                src="{{ asset('img/avatar.jpg') }}" alt="author"></a>
                                    </div>
                                    <div class="flex-shrink w-2/3 max-w-full px-4 sm:w-3/4 md:w-10/12">
                                        <!--name-->
                                        <p
                                            class="mb-2 text-lg font-semibold leading-normal text-gray-800 dark:text-gray-100">
                                            <span class="font-semibold">{{ $news->user->name }}</span>
                                        </p>
                                        <!-- website -->
                                        <p class="mb-1"><a target="_blank" class="text-red-700"
                                                href="javascript:void(0)">{{ $news->user->username }}</a></p>
                                        <!--description-->
                                        {{-- <p>Programmer, Father, Husband, I design and develop Bootstrap template</p> --}}
                                    </div>
                                </div>

                                <!-- Comments -->
                                {{-- <div id="comments" class="pt-16">
                                    <!--title-->
                                    <h3
                                        class="mb-2 text-2xl font-semibold leading-normal text-gray-800 dark:text-gray-100">
                                        5 Comments</h3>

                                    <!--comment list-->
                                    <ol class="mb-4">
                                        <li class="py-2 mt-6">
                                            <div
                                                class="pb-4 border-b border-gray-200 border-dashed dark:border-gray-600">
                                                <footer>
                                                    <img class="float-left w-20 h-20 max-w-full mr-4 border border-gray-200 dark:border-gray-700"
                                                        src="src/img/avatar2.jpg" alt="avatar">
                                                    <div>
                                                        <a class="mb-2 text-lg font-semibold leading-normal text-gray-800 dark:text-gray-100"
                                                            href="#" target="_blank">Carlos vila</a>
                                                        <span class="text-sm md:float-right">
                                                            <time datetime="2020-10-27">Oct 27, 2020</time>
                                                        </span>
                                                    </div>
                                                </footer>
                                                <div>
                                                    <p>I like this themes, fast loading and look profesional</p>
                                                </div>
                                                <div>
                                                    <a class="text-red-700 hover:text-red-800"
                                                        href="#comment-form">Reply</a>
                                                </div>
                                            </div>
                                            <ul class="ml-12 md:ml-24">
                                                <li class="py-2 mt-6">
                                                    <div
                                                        class="pb-4 border-b border-gray-200 border-dashed dark:border-gray-600">
                                                        <footer>
                                                            <img class="float-left w-20 h-20 max-w-full mr-4 border border-gray-200 dark:border-gray-700"
                                                                src="src/img/avatar.jpg" alt="avatar">
                                                            <div>
                                                                <a class="mb-2 text-lg font-semibold leading-normal text-gray-800 dark:text-gray-100"
                                                                    href="#" target="_blank">Ari Budin</a>
                                                                <span class="text-sm md:float-right">
                                                                    <time datetime="2020-10-27">Oct 27, 2020</time>
                                                                </span>
                                                            </div>
                                                        </footer>
                                                        <div>
                                                            <p>Thank you Carlos!</p>
                                                        </div>
                                                        <div>
                                                            <a class="text-red-700 hover:text-red-800"
                                                                href="#comment-form">Reply</a>
                                                        </div>
                                                    </div>
                                                    <ul class="md:ml-24">
                                                        <li class="py-2 mt-6" id="comment-5">
                                                            <div
                                                                class="pb-4 border-b border-gray-200 border-dashed dark:border-gray-600">
                                                                <footer>
                                                                    <img class="float-left w-20 h-20 max-w-full mr-4 border border-gray-200 dark:border-gray-700"
                                                                        src="src/img/avatar2.jpg" alt="avatar">
                                                                    <div>
                                                                        <a class="mb-2 text-lg font-semibold leading-normal text-gray-800 dark:text-gray-100"
                                                                            href="#" target="_blank">Carlos
                                                                            vila</a>
                                                                        <span class="text-sm md:float-right">
                                                                            <time datetime="2020-10-27">Oct 27,
                                                                                2020</time>
                                                                        </span>
                                                                    </div>
                                                                </footer>
                                                                <div>
                                                                    <p>You're welcome!</p>
                                                                </div>
                                                                <div>
                                                                    <a class="text-red-700 hover:text-red-800"
                                                                        href="#comment-form">Reply</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="py-2 mt-6">
                                            <div
                                                class="pb-4 border-b border-gray-200 border-dashed dark:border-gray-600">
                                                <footer>
                                                    <img class="float-left w-20 h-20 max-w-full mr-4 border border-gray-200 dark:border-gray-700"
                                                        src="src/img/avatar.jpg" alt="avatar">
                                                    <div>
                                                        <a class="mb-2 text-lg font-semibold leading-normal text-gray-800 dark:text-gray-100"
                                                            href="#" target="_blank">Ari Budin</a>
                                                        <span class="text-sm md:float-right">
                                                            <time datetime="2020-10-27">Oct 27, 2020</time>
                                                        </span>
                                                    </div>
                                                </footer>
                                                <div>
                                                    <p>Please support me with give positive rating!</p>
                                                </div>
                                                <div>
                                                    <a class="text-red-700 hover:text-red-800"
                                                        href="#comment-form">Reply</a>
                                                </div>
                                            </div>
                                            <ul class="ml-12 md:ml-24">
                                                <li class="py-2 mt-6">
                                                    <div
                                                        class="pb-4 border-b border-gray-200 border-dashed dark:border-gray-600">
                                                        <footer>
                                                            <img class="float-left w-20 h-20 max-w-full mr-4 border border-gray-200 dark:border-gray-700"
                                                                src="src/img/avatar2.jpg" alt="avatar">
                                                            <div>
                                                                <a class="mb-2 text-lg font-semibold leading-normal text-gray-800 dark:text-gray-100"
                                                                    href="#" target="_blank">Carlos vila</a>
                                                                <span class="text-sm md:float-right">
                                                                    <time datetime="2020-10-27">Oct 27, 2020</time>
                                                                </span>
                                                            </div>
                                                        </footer>
                                                        <div>
                                                            <p>Yes Sure!</p>
                                                        </div>
                                                        <div>
                                                            <a class="text-red-700 hover:text-red-800"
                                                                href="#comment-form">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>

                                    <!--comment form-->
                                    <div id="comment-form" class="mt-12">
                                        <h4
                                            class="mb-2 text-2xl font-semibold leading-normal text-gray-800 dark:text-gray-100">
                                            LEAVE A REPLY</h4>
                                        <p class="mb-5">Your email address will not be published</p>
                                        <div>
                                            <form action="#" novalidate="">
                                                <div class="mt-2"></div>
                                                <div class="mb-6">
                                                    <textarea
                                                        class="relative w-full px-5 py-3 overflow-x-auto leading-5 text-gray-800 bg-white border border-gray-100 focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        placeholder="Comment" aria-label="insert comment" rows="4" required=""></textarea>
                                                </div>
                                                <div class="mb-6">
                                                    <input
                                                        class="relative w-full px-5 py-3 overflow-x-auto leading-5 text-gray-800 bg-white border border-gray-100 focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        placeholder="Name" aria-label="name" type="text"
                                                        required="">
                                                </div>
                                                <div class="mb-6">
                                                    <input
                                                        class="relative w-full px-5 py-3 overflow-x-auto leading-5 text-gray-800 bg-white border border-gray-100 focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        placeholder="Email" aria-label="email" type="text"
                                                        required="">
                                                </div>
                                                <div class="mb-6">
                                                    <input
                                                        class="relative w-full px-5 py-3 overflow-x-auto leading-5 text-gray-800 bg-white border border-gray-100 focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                        placeholder="Website:" aria-label="website" type="text">
                                                </div>
                                                <div class="mb-6">
                                                    <div>
                                                        <input
                                                            class="w-5 h-5 text-red-500 border border-gray-100 form-checkbox dark:bg-gray-700 dark:border-gray-700 focus:outline-none"
                                                            id="comment-cookies" name="comment-cookies"
                                                            type="checkbox" value="yes">
                                                        <label class="ml-2" for="comment-cookies">
                                                            Save my name, email, and website in this browser for the
                                                            next time I comment.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <button type="submit"
                                                        class="flex items-center px-5 py-3 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">Post
                                                        Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
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
