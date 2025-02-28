<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ _env('APP_NAME', 'My Leaf MVC App') }}</title>
    <link rel="shortcut icon" href="https://leafphp.dev/logo-circle.png" type="image/x-icon">
    <link rel="stylesheet" href="@assets('css/styles.css')">

    {{-- @vite('css/app.css') --}}

    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet">

    @alpine
</head>

<body
    class="antialiased bg-gradient-to-br from-transparent via-white to-green-100 dark:from-[#102e36] dark:via-[#001318] dark:to-[#001318] dark:text-white/50">
    <div class="text-black/50 dark:text-white/50 flex flex-col justify-between items-center min-h-screen">
        @includeIf('components.welcome.topnav')

        <div class="-mt-10"></div>

        <main class="py-10 max-w-7xl mx-auto px-4 xl:px-0">
            <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                <a href="https://leafphp.dev/docs/" id="docs-card"
                    class="gradient-border flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-[#42d392]/40 focus:outline-none focus-visible:ring-[#3eaf7c] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-[#001e26] dark:ring-gray-800 dark:hover:text-white/70 dark:focus-visible:ring-[#3eaf7c]">
                    <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                        <img src="https://staging.leafphp.dev/leaf-docs-light.svg" alt="Leaf documentation screenshot"
                            class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                            onerror="
                                document.getElementById('screenshot-container').classList.add('!hidden');
                                document.getElementById('docs-card').classList.add('!row-span-1');
                                document.getElementById('docs-card-content').classList.add('!flex-row');
                                document.getElementById('background').classList.add('!hidden');
                            " />
                        <img src="https://staging.leafphp.dev/leaf-docs-dark.svg" alt="Leaf documentation screenshot"
                            class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
                        <div
                            class="absolute -bottom-16 -left-16 h-40 w-[calc(100%_+_8rem)] bg-gradient-to-br from-transparent via-white to-white dark:from-[#001e26] dark:via-[#001318] dark:to-[#001e26] blur-xl">
                        </div>
                    </div>

                    <div class="relative flex items-center gap-6 lg:items-end">
                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#3eaf7c]/10 sm:size-16">
                                <svg class="size-5 sm:size-6 text-[#3eaf7c]" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    The Leaf documentation is a collection of everything you need to know about building
                                    with Leaf. Whether you're new to the framework or just need a refresher, the
                                    documentation is the best place to start.
                                </p>
                            </div>
                        </div>

                        <svg class="size-6 shrink-0 stroke-[#3eaf7c]" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </div>
                </a>

                <div
                    class="gradient-border flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-[#647eff]/50 focus:outline-none focus-visible:ring-[#3eaf7c] lg:pb-10 dark:bg-[#001e26] dark:ring-gray-800 dark:hover:text-white/70 dark:focus-visible:ring-[#3eaf7c]">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#647eff]/10">
                        <svg class="size-5 sm:size-6 text-[#647eff]" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                        </svg>
                    </div>

                    <div class="pt-3">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Let's build your next big app</h2>

                        <p class="mt-4 text-sm/relaxed">
                            Harness the power of Leaf and powerful integrations like Tailwind and Vite to quickly move
                            from leaf create to a full-blown application.
                        </p>

                        <p class="text-xs/relaxed rounded-xl border border-[rgba(172,175,176,0.3)] py-2 px-4 mt-4">
                            Get started by
                            editing<code class="text-[#5e79c7]"> app/views/index.blade.php</code>
                        </p>
                    </div>
                </div>

                <a href="https://bento.me/leafphp"
                    target="_blank"
                    class="gradient-border flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-red-500/40 focus:outline-none focus-visible:ring-[#3eaf7c] lg:pb-10 dark:bg-[#001e26] dark:ring-gray-800 dark:hover:text-white/70 dark:focus-visible:ring-[#3eaf7c]">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10">
                        <svg class="size-5 sm:size-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                    </div>

                    <div class="pt-3">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Connect with us</h2>

                        <p class="mt-4 text-sm/relaxed">
                            Keep up with everything new on Leaf through our blog, twitter and YouTube. We host
                            weekly hangouts on YouTube every Friday, so join in with your questions and suggestions, ...
                        </p>
                    </div>

                    <svg class="size-6 shrink-0 self-center stroke-red-500" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>

                <a href="https://leafphp.dev/docs/modules/"
                    target="_blank"
                    class="gradient-border flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-yellow-400/50 focus:outline-none focus-visible:ring-[#3eaf7c] lg:pb-10 dark:bg-[#001e26] dark:ring-gray-800 dark:hover:text-white/70 dark:focus-visible:ring-[#3eaf7c]">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-yellow-400/10">
                        <svg class="size-5 sm:size-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                        </svg>
                    </div>

                    <div class="pt-3">
                        <h2 class="text-xl font-semibold text-black dark:text-white">30+ Modules</h2>

                        <p class="mt-4 text-sm/relaxed">
                            Leaf provides a ton of modules like Authentication, Mailing and user management to
                            help you build your next big app, easier and faster than ever before. Paired with
                            third-party libraries, the sky is the limit.
                        </p>
                    </div>

                    <svg class="size-6 shrink-0 self-center stroke-yellow-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>
            </div>
        </main>

        <footer
            class="relative bg-transparent dark:bg-[#001318] w-full h-[70px] flex items-center border-t border-gray-700/10 dark:border-[#001e26]">
            <div class="absolute inset-x-0 flex items-center justify-center -top-3 px-2">
                <a href="https://leafphp.dev" target="_blank" class="px-4">
                    <img src="https://leafphp.dev/logo-circle.png" class="size-8 -mt-1" alt="">
                </a>
            </div>
            <div class="mx-auto sm:px-6 lg:px-8 px-4 w-full">
                <div class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between">
                    <div class="flex flex-col-reverse items-center gap-3 sm:flex-row"><span
                            class="text-sm text-gray-700 dark:text-gray-300">Leaf MVC v4.x-Beta - PHP
                            v{{ PHP_VERSION }}</span>
                    </div>
                    <ul class="flex items-center justify-end gap-3">
                        <li>
                            <a href="https://discord.gg/Pkrm9NJPE3" target="_blank"
                                class="focus-visible:ring-2 text-gray-700 hover:text-black dark:text-gray-300 dark:hover:text-white"><span
                                    class="sr-only">Leaf Discord Server</span>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.3705 1.07322C13.3663 1.06497 13.3594 1.05851 13.351 1.05499C12.3785 0.599487 11.3522 0.274675 10.2978 0.0886873C10.2882 0.0868693 10.2783 0.0881809 10.2695 0.0924354C10.2607 0.0966899 10.2534 0.103671 10.2487 0.112385C10.109 0.371315 9.98212 0.637279 9.86863 0.909263C8.73205 0.733138 7.57595 0.733138 6.43938 0.909263C6.32514 0.636589 6.19624 0.370559 6.05328 0.112385C6.04838 0.10386 6.04107 0.0970401 6.03232 0.0928132C6.02356 0.0885863 6.01377 0.0871486 6.0042 0.0886873C4.9497 0.274285 3.92333 0.599121 2.95092 1.05502C2.9426 1.05862 2.93558 1.06477 2.93082 1.07262C0.986197 4.03716 0.453491 6.92881 0.714819 9.78465C0.715554 9.79165 0.71766 9.79843 0.721013 9.80458C0.724365 9.81073 0.728896 9.81613 0.734334 9.82046C1.86667 10.6763 3.1332 11.3296 4.47988 11.7525C4.48937 11.7554 4.49949 11.7552 4.5089 11.7521C4.51831 11.7489 4.52655 11.7429 4.53251 11.7349C4.82175 11.3331 5.07803 10.9077 5.29876 10.4629C5.3018 10.4568 5.30353 10.4501 5.30384 10.4433C5.30416 10.4365 5.30305 10.4296 5.3006 10.4233C5.29814 10.4169 5.29439 10.4111 5.2896 10.4064C5.2848 10.4016 5.27906 10.3979 5.27277 10.3955C4.86862 10.2377 4.47736 10.0474 4.10266 9.82645C4.09586 9.82236 4.09014 9.81663 4.08602 9.80976C4.0819 9.80288 4.0795 9.79508 4.07903 9.78703C4.07856 9.77899 4.08004 9.77095 4.08334 9.76362C4.08664 9.7563 4.09166 9.74992 4.09794 9.74504C4.17657 9.68491 4.25524 9.62236 4.33032 9.55918C4.33699 9.55358 4.34506 9.54998 4.35362 9.5488C4.36218 9.54762 4.3709 9.54891 4.37879 9.55252C6.83362 10.6962 9.4913 10.6962 11.9171 9.55252C11.925 9.54868 11.9338 9.54721 11.9425 9.54829C11.9512 9.54936 11.9594 9.55293 11.9662 9.55858C12.0413 9.62176 12.1199 9.68491 12.1991 9.74504C12.2054 9.74987 12.2105 9.75621 12.2138 9.7635C12.2172 9.7708 12.2187 9.77882 12.2183 9.78687C12.2179 9.79492 12.2156 9.80274 12.2115 9.80964C12.2074 9.81654 12.2018 9.82232 12.195 9.82645C11.8211 10.0492 11.4295 10.2394 11.0243 10.3949C11.018 10.3974 11.0123 10.4012 11.0075 10.406C11.0028 10.4109 10.9991 10.4167 10.9967 10.4231C10.9943 10.4295 10.9932 10.4364 10.9936 10.4433C10.9939 10.4501 10.9957 10.4568 10.9988 10.4629C11.2232 10.9052 11.4791 11.3301 11.7645 11.7342C11.7703 11.7425 11.7785 11.7487 11.7879 11.7519C11.7974 11.7552 11.8076 11.7554 11.8171 11.7524C13.1662 11.331 14.4349 10.6776 15.5687 9.82046C15.5742 9.81635 15.5788 9.81108 15.5822 9.80501C15.5855 9.79893 15.5876 9.7922 15.5882 9.78525C15.9011 6.4836 15.0644 3.61565 13.3705 1.07322ZM5.66537 8.04574C4.92629 8.04574 4.31731 7.35337 4.31731 6.50305C4.31731 5.65274 4.91448 4.96032 5.66537 4.96032C6.42213 4.96032 7.02522 5.65875 7.01341 6.503C7.01341 7.35337 6.41622 8.04574 5.66537 8.04574ZM10.6496 8.04574C9.91051 8.04574 9.30153 7.35337 9.30153 6.50305C9.30153 5.65274 9.8987 4.96032 10.6496 4.96032C11.4064 4.96032 12.0094 5.65875 11.9976 6.503C11.9976 7.35337 11.4064 8.04574 10.6496 8.04574Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/leafphp" target="_blank"
                                class="focus-visible:ring-2 text-gray-700 hover:text-black dark:text-gray-300 dark:hover:text-white"><span
                                    class="sr-only">Leaf Twitter</span>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.486 1.75441C16.8596 2.02615 16.1972 2.20579 15.5193 2.28774C16.2345 1.86051 16.7704 1.18839 17.0277 0.396073C16.3556 0.796126 15.62 1.07799 14.8527 1.22941C14.3398 0.673216 13.6568 0.302987 12.9108 0.176783C12.1649 0.0505786 11.3981 0.175539 10.7308 0.532064C10.0635 0.88859 9.53345 1.45652 9.2237 2.14677C8.91396 2.83702 8.84208 3.61056 9.01934 4.34607C7.66053 4.27734 6.33137 3.92353 5.11822 3.30762C3.90506 2.69171 2.83504 1.82748 1.97767 0.771073C1.67695 1.29621 1.51894 1.89093 1.51934 2.49607C1.51827 3.05806 1.65618 3.61159 1.9208 4.10738C2.18541 4.60317 2.56852 5.02583 3.036 5.33774C2.49265 5.32296 1.96091 5.17716 1.486 4.91274V4.95441C1.49008 5.74182 1.766 6.50365 2.2671 7.11104C2.7682 7.71844 3.46372 8.13411 4.236 8.28774C3.93872 8.37821 3.63007 8.42591 3.31934 8.42941C3.10424 8.42689 2.88969 8.40739 2.67767 8.37107C2.89759 9.04842 3.32319 9.64036 3.89523 10.0645C4.46728 10.4887 5.15732 10.724 5.86934 10.7377C4.66701 11.6838 3.18257 12.2001 1.65267 12.2044C1.37412 12.2053 1.09578 12.1886 0.819336 12.1544C2.38136 13.163 4.20168 13.6983 6.061 13.6961C7.34408 13.7094 8.61695 13.4669 9.80527 12.9828C10.9936 12.4987 12.0735 11.7826 12.982 10.8765C13.8905 9.97033 14.6093 8.89223 15.0965 7.70516C15.5836 6.51809 15.8294 5.24585 15.8193 3.96274C15.8193 3.82107 15.8193 3.67107 15.8193 3.52107C16.4732 3.03342 17.0372 2.43559 17.486 1.75441Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/leafsphp/leaf" target="_blank"
                                class="focus-visible:ring-2 text-gray-700 hover:text-black dark:text-gray-300 dark:hover:text-white"><span
                                    class="sr-only">Leaf GitHub Repository</span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.15269 0.792969C7.17392 0.793051 5.25974 1.49723 3.75266 2.77951C2.24558 4.06179 1.24394 5.83849 0.92697 7.7917C0.609997 9.74492 0.998373 11.7472 2.02261 13.4403C3.04684 15.1333 4.6401 16.4067 6.51729 17.0325C6.93396 17.1055 7.09021 16.8555 7.09021 16.6367C7.09021 16.4388 7.07978 15.7825 7.07978 15.0846C4.98603 15.47 4.44436 14.5742 4.27769 14.1055C4.09276 13.6496 3.79959 13.2456 3.42353 12.9284C3.13186 12.7721 2.71519 12.3867 3.4131 12.3763C3.67959 12.4052 3.93518 12.498 4.15822 12.6467C4.38125 12.7953 4.56516 12.9956 4.69436 13.2305C4.80833 13.4352 4.96159 13.6155 5.14535 13.7609C5.32911 13.9063 5.53975 14.014 5.76522 14.0779C5.99068 14.1418 6.22653 14.1605 6.45926 14.1331C6.69198 14.1056 6.917 14.0325 7.12143 13.918C7.1575 13.4943 7.34631 13.0982 7.65269 12.8034C5.79853 12.5951 3.86103 11.8763 3.86103 8.68883C3.84931 7.86062 4.15493 7.05931 4.71519 6.44924C4.46043 5.72943 4.49024 4.93948 4.79853 4.24091C4.79853 4.24091 5.49642 4.02215 7.09019 5.09508C8.45376 4.72005 9.89328 4.72005 11.2569 5.09508C12.8506 4.01174 13.5485 4.24091 13.5485 4.24091C13.8569 4.93947 13.8867 5.72943 13.6319 6.44924C14.1938 7.05826 14.4997 7.86027 14.486 8.68883C14.486 11.8867 12.5381 12.5951 10.6839 12.8034C10.8828 13.005 11.036 13.247 11.133 13.513C11.2301 13.779 11.2688 14.0628 11.2464 14.3451C11.2464 15.4597 11.236 16.3555 11.236 16.6367C11.236 16.8555 11.3923 17.1159 11.8089 17.0326C13.6828 16.4016 15.2715 15.1253 16.2914 13.4313C17.3112 11.7374 17.6959 9.73616 17.3768 7.78483C17.0576 5.83351 16.0553 4.05911 14.5489 2.77839C13.0425 1.49768 11.1299 0.793998 9.15269 0.792969Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
