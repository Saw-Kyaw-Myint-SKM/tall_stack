<?php

use Livewire\Volt\Component;
use App\Models\Blog;

new class extends Component {
    public $videos = ['saw', 'kyaw', 'myint', 'hla', 'hfia'];
    public $blogs;

    public function mount(): void
    {
        $this->blogs = Blog::latest('id')->get();
    }
}; ?>

<div>
    <div class="py-5 flex flex-row-reverse">
        <x-link :href="route('videos.create')"
            class="bg-pink-600 hover:!bg-pink-700 text-white font-bold py-1.5 cursor-pointer px-4 rounded-full"
            wire:navigate>create</x-link>
    </div>
    <div class="flex flex-wrap items-center gap-x-4 gap-y-4 px-2">
        @foreach ($blogs as $blog)
            <div
                class="w-full max-w-[17rem] rounded-xl py-2 px-2 bg-slate-700 border border-slate-600 bg-clip-border text-gray-700 shadow-lg">
                <div class="relative">
                    <div
                        class="relative overflow-hidden h-52 rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-blue-gray-500/40">
                        <img src="{{ asset($blog->poster) }}" class="h-full" alt="ui/ux review check" />
                        <button
                            class="!absolute top-4 right-4 h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-full text-center align-middle font-sans text-xs font-medium uppercase text-pink-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button" data-ripple-dark="true">
                            <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-6 w-6">
                                    <path
                                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </div>
                    {{-- <div class="absolute bottom-6">
        <p class="text-black p-2 bg-gray-300 px-4    ">
            Enter a freshly updated and thoughtfully furnished peaceful home
            surrounded by ancient trees, stone walls, and open meadows.
        </p>
    </div> --}}
                    <p class="px-2 mt-2 text-gray-300">Name : <span
                            class="text-pink-400 ml-2">{{$blog->title }}</span></p>
                </div>
            </div>
        @endforeach
    </div>
</div>
