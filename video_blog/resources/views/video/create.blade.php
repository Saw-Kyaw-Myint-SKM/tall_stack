<x-app-layout>
    <!-- component -->
    <div class="heading text-center font-bold text-2xl m-4 text-gray-300">Create New Video</div>
    <div class="editor mx-auto w-10/12 flex flex-col text-gray-400 p-4 max-w-2xl">
        <input class="title bg-slate-700 border rounded-md border-gray-300 p-2 mb-4 outline-none" spellcheck="false"
            placeholder="Title" type="text">
        <div class="flex w-full items-center justify-center bg-grey-lighter">
            <label
                class="w-full flex flex-col items-center px-4 py-2 bg-slate-700 text-blue rounded-lg shadow-lg tracking-wide uppercase border cursor-pointer">
                <svg class="w-8 h-8 text-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-sm leading-normal">Select a poster</span>
                <input type='file' class="hidden" />
            </label>
        </div>
        <div class="flex w-full mt-4 items-center justify-center bg-grey-lighter">
            <label
                class="w-full flex flex-col items-center px-4 py-6 bg-slate-700 text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <svg class="h-10 w-10 text-gray-500" version="1.1" viewBox="0 0 1600 1600"
                    xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(592,160)"
                        d="m0 0h224v8h128v8h48v8h16v8h16v8h8v8h16v8h16v8h40v8h80v-8h8v-8h8v-16h8v-16h8v-8h16v-8h88v-8h72v8h104v8h24v8h16v8h8v8h8v8h8v8h8v16h8v8h8v16h8v112h-8v24h-8v16h-8v8h-8v16h-8v8h-8v8h-16v8h-16v8h-24v8h-248v-8h-16v-8h-8v-8h-8v-8h-8v-8h-8v-8h-16v-8h-32v-8h-24v8h-8v32h8v24h-8v168h32v8h112v-8h40v-8h16v-8h8v-8h16v-8h8v-8h16v-8h16v-8h16v-8h8v-8h16v-8h24v-8h32v-8h80v8h48v616h-8v8h-136v-8h-32v-8h-16v-8h-16v-8h-16v-8h-16v-8h-16v-8h-8v-8h-16v-8h-16v-8h-8v-8h-24v-8h-16v8h-8v-8h-128v8h-8v136h8v8h-8v144h-8v16h-8v16h-8v8h-8v8h-24v8h-312v-8h-16v-8h-8v-8h-8v-8h-8v-8h-8v-16h-8v-8h-8v-8h-8v-24h-8v-16h-8v-8h-176v8h-8v8h-8v16h-8v16h-8v16h-8v16h-8v8h-8v8h-8v8h-8v8h-24v8h-184v-8h-16v-8h-8v-16h-8v-24h-8v-32h8v-32h-8v-8h-16v-8h-24v-8h-16v-8h-8v-8h-16v-8h-8v-8h-8v-8h-8v-8h-8v-16h-8v-8h-8v-16h-8v-16h-8v-16h-8v-16h-8v-560h8v-24h8v-24h8v-16h8v-16h8v-8h8v-8h8v-16h8v-8h8v-8h16v-8h8v-8h8v-8h16v-8h24v-8h48v-8h144v-8h8v-24h8v-24h8v-24h8v-16h8v-16h8v-16h8v-8h8v-16h8v-8h8v-16h8v-8h8v-8h8v-8h8v-8h16v-8h8v-8h16v-8h16v-8h24v-8h64v-8zm0 56v8h-56v8h-16v8h-16v8h-8v8h-8v8h-8v8h-8v8h-8v8h-8v8h-8v16h-8v8h-8v16h-8v24h-8v16h-8v24h-8v16h64v-48h8v-16h8v-16h8v-8h8v-8h8v-8h16v-8h8v-8h72v-8h72v8h8v-8h16v8h240v8h16v8h8v8h8v16h8v16h8v48h8v40h8v8h16v8h8v8h8v8h16v-8h8v-112h-8v-40h-8v-16h-8v-16h-8v-16h-8v-8h-8v-8h-16v-8h-16v-8h-24v-8h-56v-8h-304zm664 0v8h-8v72h-8v104h8v8h8v8h232v-8h8v-8h8v-8h8v-8h8v-16h8v-16h8v-72h-8v-16h-8v-16h-8v-8h-8v-8h-16v-8h-48v-8h-184zm-136 64v8h-16v8h-8v8h8v24h8v16h8v8h32v8h32v-72h-8v-8h-56zm-560 64v8h-16v8h-8v8h-8v16h-8v24h-8v8h96v8h312v-8h8v-48h-8v-16h-24v-8h-336zm-168 128v8h-240v8h-16v8h-16v8h-8v8h-8v8h-8v8h-8v16h-8v16h-8v24h-8v128h-8v376h8v64h8v16h8v16h8v16h8v8h8v8h8v8h16v8h8v8h24v8h72v8h144v-8h384v8h112v-8h88v-8h16v-8h16v-8h8v-8h8v-8h8v-8h8v-8h8v-8h8v-16h8v-16h8v-568h-8v-24h-8v-8h-8v-16h-8v-8h-8v-8h-8v-8h-8v-8h-8v-8h-16v-8h-24v-8h-32v-8h-528zm1088 128v8h-24v8h-16v8h-16v8h-16v8h-16v8h-8v8h-16v8h-16v8h-8v8h-16v8h-8v8h-8v48h-8v264h8v24h8v8h8v8h16v8h8v8h24v8h8v8h16v8h8v8h16v8h16v8h24v8h32v8h32v-8h8v-520h-56zm-360 96v8h-8v312h8v8h56v8h48v-8h32v-56h-8v-160h8v-80h-8v-24h-8v-8h-120zm-80 560v8h-8v8h-8v8h-16v8h-16v8h-16v8h-216v8h-8v-8h-8v8h-16v24h8v16h16v8h8v8h16v8h272v-8h8v-104h-8v-8h-8zm-816 56v8h-8v40h8v16h8v8h64v-8h80v-8h8v-8h8v-8h8v-16h8v-24h-184z"
                        fill="currentColor" />
                    <path transform="translate(200,608)"
                        d="m0 0h432v8h8v296h-8v8h-112v8h-304v-8h-24v-304h8v-8zm64 56v8h-8v192h312v-8h8v-184h-288v-8h-24z"
                        fill="currentColor" />
                </svg>
                <span class="mt-2 text-sm leading-normal">Select a video</span>
                <input type='file' class="hidden" />
            </label>
        </div>
        <!-- buttons -->
        <div class="buttons flex mt-7">
            <a href="/dashboard"
                class="btn border rounded bg-gray-700 border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-400 ml-auto"
                wire:navigate>
                Cancel
            </a>
            <div
                class="btn border border-gray-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 rounded bg-pink-500">
                Post</div>
        </div>
    </div>
</x-app-layout>
