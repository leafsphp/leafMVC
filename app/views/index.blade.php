<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <title>{{ _env('APP_NAME', 'Leaf MVC') }}</title>
    <link rel="shortcut icon" href="http://localhost:5173/logo-circle.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @variant dark (@media (prefers-color-scheme: dark));

        @theme {
            --font-sans: "Bricolage Grotesque", system-ui, sans-serif;
            --font-mono: "JetBrains Mono", ui-monospace, monospace;
        }
    </style>
    <style>
        @keyframes blink {
            50% { opacity: 0; }
        }

        .cursor-blink {
            animation: blink 1s step-end infinite;
        }

        .text-gradient {
            background: linear-gradient(135deg, #F5B731 0%, #E8753A 35%, #D4542B 65%, #C0392B 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    @alpine
</head>

<body class="min-h-screen bg-neutral-50 font-sans text-sm text-neutral-950 antialiased dark:bg-neutral-950 dark:text-neutral-50"
    x-data="welcomePage()">
    <div class="mx-auto flex min-h-screen w-full max-w-[1120px] flex-col px-6">
        <header class="flex flex-col items-start justify-between gap-4 py-5 sm:flex-row sm:items-center">
            <a href="https://leafphp.dev"
                class="flex items-center gap-2.5 text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50"
                aria-label="Leaf PHP">
                <img src="http://localhost:5173/logo-circle.png" alt="" class="h-7 w-7">
                <span>Leaf MVC</span>
                <span
                    class="rounded-md border border-neutral-200 bg-white px-1.5 py-0.5 text-[11px] font-semibold text-neutral-500 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-400">v5</span>
            </a>

            <nav class="flex flex-wrap gap-1" aria-label="Useful Leaf links">
                <a href="https://github.com/leafsphp/leaf" target="_blank"
                    class="rounded-lg px-3 py-2 text-[13px] font-medium text-neutral-600 transition hover:bg-black/5 hover:text-neutral-950 dark:text-neutral-400 dark:hover:bg-white/5 dark:hover:text-neutral-50 flex items-center gap-2">
                    <svg class="size-4" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                    1.3K
                </a>
                <a href="https://leafphp.dev/docs/" target="_blank"
                    class="rounded-lg px-3 py-2 text-[13px] font-medium text-neutral-600 transition hover:bg-black/5 hover:text-neutral-950 dark:text-neutral-400 dark:hover:bg-white/5 dark:hover:text-neutral-50">Docs</a>
                <a href="https://leafphp.dev/support" target="_blank"
                    class="rounded-lg px-3 py-2 text-[13px] font-medium text-neutral-600 transition hover:bg-black/5 hover:text-neutral-950 dark:text-neutral-400 dark:hover:bg-white/5 dark:hover:text-neutral-50">🧡 SUPPORT LEAF</a>
            </nav>
        </header>

        <main class="flex flex-1 flex-col gap-12 pb-16 pt-1">
            <section
                class="grid items-center gap-8 border-b border-neutral-200 py-8 dark:border-neutral-800 lg:grid-cols-2 lg:gap-10 lg:py-24"
                aria-labelledby="welcome-title">
                <div>
                    <p class="mb-3 text-[13px] font-medium text-neutral-500 dark:text-neutral-400">Leaf MVC v5</p>
                    <h1 id="welcome-title"
                        class="max-w-lg text-4xl font-semibold leading-[1.1] tracking-tight text-neutral-950 dark:text-neutral-50 sm:text-[2.75rem]">
                        Elegant PHP for you<br> <span class="text-gradient"> and your AI agents ⚡️</span>
                    </h1>
                    <p class="mt-4 max-w-md text-base leading-relaxed text-neutral-600 dark:text-neutral-400">
                        Leaf maintains a project map that your AI agents can use to understand your project and help you build it.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-2">
                        <a href="https://leafphp.dev/docs/intro/first-app" target="_blank"
                            class="inline-flex items-center gap-2 rounded-lg bg-neutral-900 px-4 py-2.5 text-sm font-medium text-neutral-50 transition hover:bg-neutral-800 dark:bg-neutral-50 dark:text-neutral-900 dark:hover:bg-neutral-200">
                            Quick Start
                            <svg class="h-4 w-4 fill-none stroke-current stroke-2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0-6-6m6 6-6 6" />
                            </svg>
                        </a>
                        <a href="https://leafphp.dev/docs/mvc/" target="_blank"
                            class="inline-flex items-center rounded-lg border border-neutral-300 bg-white px-4 py-2.5 text-sm font-medium text-neutral-950 transition hover:bg-neutral-50 dark:border-neutral-700 dark:bg-neutral-950 dark:text-neutral-50 dark:hover:bg-neutral-900">
                            Documentation
                        </a>
                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-2xl border border-neutral-500/10 font-mono text-xs shadow-md dark:border-neutral-700/10 dark:shadow-black/40 p-5"
                    aria-label="Context workflow preview">
                    <div class="grid gap-2.5 p-4 leading-relaxed">
                        <div class="flex flex-wrap gap-2">
                            <span class="shrink-0 font-medium text-neutral-400">$</span>
                            <span class="dark:text-neutral-200">leaf serve</span>
                        </div>
                        <div class="pl-[18px] text-[#D4542B] dark:text-[#F5B731]">
                            → Server running at http://127.0.0.1:5500
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="shrink-0 font-medium text-neutral-400">$</span>
                            <span class="dark:text-neutral-200">leaf context</span>
                        </div>
                        <div class="pl-[18px] text-[#D4542B] dark:text-[#F5B731]">
                            → Project map ready (routes, structure, conventions)
                        </div>
                        <div class="ml-3 grid gap-2 rounded-lg border border-neutral-800 bg-neutral-900 p-3">
                            <p class="text-[11px] text-neutral-500"># you ask (in Cursor, ChatGPT, etc.)</p>
                            <code class="block break-words text-[11px] leading-snug text-neutral-300">"Add a Stripe webhook"</code>
                            <p class="text-[11px] text-neutral-500"># Leaf's map already knows</p>
                            <code class="block break-words text-[11px] leading-snug text-neutral-300">your routes, config, naming, folder layout</code>
                            <p class="text-[11px] text-neutral-500"># after you ship changes</p>
                            <code class="block break-words text-[11px] leading-snug text-neutral-300">→ map refreshes so context doesn't drift</code>
                        </div>
                        <div class="flex min-h-[1.6em] flex-wrap items-center gap-2 text-neutral-400">
                            <span class="shrink-0 font-medium text-neutral-300">→</span>
                            <span class="text-neutral-400" x-text="typed"></span>
                            <span class="inline-block h-3.5 w-1.5 cursor-blink bg-neutral-500" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-labelledby="overview">
                <h2 id="overview" class="sr-only">What you get with Leaf MVC</h2>
                <p class="mb-5 max-w-xl text-[15px] leading-relaxed text-neutral-600 dark:text-neutral-400">
                    <span class="font-medium text-neutral-950 dark:text-neutral-50">You build it.</span>
                    Edit files in <code
                        class="font-mono text-[13px] text-neutral-950 dark:text-neutral-200">app/</code>, run
                    <code class="font-mono text-[13px] text-neutral-950 dark:text-neutral-200">php leaf serve</code>.
                    <span class="font-medium text-neutral-950 dark:text-neutral-50">AI stays aligned.</span>
                    When you use an assistant, Leaf keeps an accurate project map in sync.
                </p>

                <div
                    class="grid grid-cols-1 gap-px overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-200 dark:border-neutral-800 dark:bg-neutral-800 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="bg-white p-6 transition hover:bg-neutral-50 dark:bg-neutral-950 dark:hover:bg-neutral-900">
                        <span
                            class="mb-4 grid h-9 w-9 place-items-center rounded-lg border border-neutral-200 bg-neutral-50 text-neutral-600 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-400"
                            aria-hidden="true">
                            <svg class="h-[18px] w-[18px] fill-none stroke-current stroke-[1.75]" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 4h12v6H6zM6 14h12v6H6zM12 10v4" />
                            </svg>
                        </span>
                        <h3 class="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50">MVC,
                            where you expect it</h3>
                        <p class="mt-1.5 text-sm leading-snug tracking-tight text-neutral-600 dark:text-neutral-400">
                            Routes, views, controllers, and models in <code
                                class="font-mono text-[13px] font-medium text-neutral-950 dark:text-neutral-200">app/</code>—readable
                            PHP you own end to end.</p>
                    </article>

                    <article class="bg-white p-6 transition hover:bg-neutral-50 dark:bg-neutral-950 dark:hover:bg-neutral-900">
                        <span
                            class="mb-4 grid h-9 w-9 place-items-center rounded-lg border border-neutral-200 bg-neutral-50 text-neutral-600 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-400"
                            aria-hidden="true">
                            <svg class="h-[18px] w-[18px] fill-none stroke-current stroke-[1.75]" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 5h16v14H4zM8 9h8M8 13h5" />
                            </svg>
                        </span>
                        <h3 class="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50">Project
                            map built in</h3>
                        <p class="mt-1.5 text-sm leading-snug tracking-tight text-neutral-600 dark:text-neutral-400">Every
                            install ships with structure and conventions your assistant can read—no re-explaining the
                            codebase.</p>
                    </article>

                    <article class="bg-white p-6 transition hover:bg-neutral-50 dark:bg-neutral-950 dark:hover:bg-neutral-900">
                        <span
                            class="mb-4 grid h-9 w-9 place-items-center rounded-lg border border-neutral-200 bg-neutral-50 text-neutral-600 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-400"
                            aria-hidden="true">
                            <svg class="h-[18px] w-[18px] fill-none stroke-current stroke-[1.75]" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 7h6v6H4zM14 7h6v6h-6zM4 17h6v4H4zM14 17h6v4h-6z" />
                            </svg>
                        </span>
                        <h3 class="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50"><code
                                class="font-mono text-[13px] font-medium">leaf context</code> on demand</h3>
                        <p class="mt-1.5 text-sm leading-snug tracking-tight text-neutral-600 dark:text-neutral-400">
                            Export a minified map anytime—paste into ChatGPT, Cursor, or any tool.</p>
                    </article>

                    <article class="bg-white p-6 transition hover:bg-neutral-50 dark:bg-neutral-950 dark:hover:bg-neutral-900">
                        <span
                            class="mb-4 grid h-9 w-9 place-items-center rounded-lg border border-neutral-200 bg-neutral-50 text-neutral-600 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-400"
                            aria-hidden="true">
                            <svg class="h-[18px] w-[18px] fill-none stroke-current stroke-[1.75]" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 7h10v10H7zM17 7l-4 4M7 17l4-4" />
                            </svg>
                        </span>
                        <h3 class="text-[15px] font-semibold tracking-tight text-neutral-950 dark:text-neutral-50">Two-way
                            sync</h3>
                        <p class="mt-1.5 text-sm leading-snug tracking-tight text-neutral-600 dark:text-neutral-400">
                            Context updates as your app changes, so output matches your patterns—not invented ones.</p>
                    </article>
                </div>
            </section>
        </main>

        <footer
            class="flex flex-col items-start justify-between gap-2 border-t border-neutral-200 py-4 text-[13px] text-neutral-500 dark:border-neutral-800 sm:flex-row sm:items-center">
            <span>PHP {{ PHP_VERSION }}</span>
            <span>Simple · Elegant · Fast · Leaf 5</span>
        </footer>
    </div>

    <script>
        function welcomePage() {
            const lines = [
                'Your assistant sees the same project map you do.',
                'Less "where does this go in Laravel?" energy.',
                'Run leaf context anytime for a fresh export.',
            ];

            let i = 0;
            let char = 0;

            return {
                typed: '',
                init() {
                    this.tick();
                },
                tick() {
                    const line = lines[i];
                    if (char <= line.length) {
                        this.typed = line.slice(0, char);
                        char++;
                        setTimeout(() => this.tick(), char === line.length + 1 ? 2200 : 28);
                        return;
                    }
                    char = 0;
                    i = (i + 1) % lines.length;
                    setTimeout(() => this.tick(), 400);
                },
            };
        }
    </script>
</body>

</html>
