<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#060814">

    <title>Visitor Registration System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Subtle ambient glow (purely visual). */
        @keyframes floaty {
            0%, 100% { transform: translate3d(0, 0, 0); opacity: .9; }
            50% { transform: translate3d(0, -10px, 0); opacity: 1; }
        }

        .noise {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='160' height='160' filter='url(%23n)' opacity='.35'/%3E%3C/svg%3E");
            background-size: 160px 160px;
        }
    </style>
</head>

<body class="min-h-screen bg-[#060814] text-slate-100 antialiased">
<div class="relative overflow-hidden">
    <!-- Background gradients -->
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-24 left-1/2 h-[520px] w-[520px] -translate-x-1/2 rounded-full bg-fuchsia-500/20 blur-3xl animate-[floaty_6s_ease-in-out_infinite]"></div>
        <div class="absolute -bottom-28 -left-24 h-[420px] w-[420px] rounded-full bg-cyan-500/20 blur-3xl animate-[floaty_7s_ease-in-out_infinite]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(closest-side_at_20%_0%,rgba(99,102,241,0.25),transparent_60%),radial-gradient(closest-side_at_90%_20%,rgba(34,211,238,0.18),transparent_55%),radial-gradient(closest-side_at_50%_100%,rgba(217,70,239,0.12),transparent_60%)]"></div>
    </div>

    <!-- Navigation -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-[#060814]/60 backdrop-blur">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <a href="#top" class="group inline-flex items-center gap-3">
                <span class="relative grid h-10 w-10 place-items-center rounded-xl border border-white/15 bg-white/5">
                    <span class="absolute inset-0 rounded-xl bg-gradient-to-br from-cyan-400/40 via-fuchsia-400/20 to-transparent opacity-80 blur"></span>
                    <span class="relative text-sm font-semibold tracking-wide">VR</span>
                </span>
                <span class="text-sm font-semibold">
                    Visitor <span class="text-cyan-300">Registration</span>
                </span>
            </a>

            <nav class="hidden items-center gap-7 md:flex text-sm">
                <a href="#features" class="text-slate-200/80 hover:text-slate-100 transition">Features</a>
                <a href="#how-it-works" class="text-slate-200/80 hover:text-slate-100 transition">How it works</a>
                <a href="#faq" class="text-slate-200/80 hover:text-slate-100 transition">FAQ</a>
                <a href="#register" class="inline-flex items-center rounded-full bg-white/5 px-4 py-2 border border-white/10 hover:bg-white/10 transition">
                    Quick register
                </a>
            </nav>

            <div class="md:hidden">
                <details class="relative">
                    <summary class="list-none cursor-pointer rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-sm text-slate-100/90">
                        Menu
                    </summary>
                    <div class="absolute right-0 mt-2 w-56 rounded-xl border border-white/10 bg-[#060814]/90 backdrop-blur p-2 shadow-lg">
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#features">Features</a>
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#how-it-works">How it works</a>
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#faq">FAQ</a>
                        <a class="block rounded-lg px-3 py-2 text-sm text-slate-200/90 hover:bg-white/5" href="#register">Quick register</a>
                    </div>
                </details>
            </div>
        </div>
    </header>

    <!-- Content -->
    <main id="top">
        <!-- Hero -->
        <section class="relative mx-auto max-w-6xl px-6 pt-16 md:pt-20">
            <div class="grid items-center gap-10 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-200/90">
                        <span class="h-2 w-2 rounded-full bg-cyan-300 shadow-[0_0_20px_rgba(34,211,238,0.6)]"></span>
                        Futuristic visitor check-in experience
                    </div>

                    <h1 class="mt-6 text-4xl font-semibold leading-tight tracking-tight md:text-5xl lg:text-6xl">
                        Secure. Fast.
                        <span class="block bg-gradient-to-r from-cyan-300 via-fuchsia-300 to-cyan-200 bg-clip-text text-transparent">
                            Built for real gates & real schedules.
                        </span>
                    </h1>

                    <p class="mt-5 max-w-xl text-base leading-relaxed text-slate-200/80 md:text-lg">
                        Welcome to your visitor registration system—designed to keep records clean, approvals smooth, and access consistent.
                        A classic landing layout, with a modern futuristic interface.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <a href="#register" class="inline-flex items-center justify-center rounded-2xl bg-gradient-to-r from-cyan-400 via-fuchsia-400 to-cyan-300 px-6 py-3 font-medium text-slate-950 shadow-[0_20px_60px_rgba(34,211,238,0.25)] hover:brightness-110 transition">
                            Get started
                        </a>
                        <a href="#features" class="inline-flex items-center justify-center rounded-2xl border border-white/10 bg-white/5 px-6 py-3 font-medium text-slate-100 hover:bg-white/10 transition">
                            Explore features
                        </a>
                    </div>

                    <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-xs text-slate-200/70">Check-in</div>
                            <div class="mt-1 text-xl font-semibold">Seconds</div>
                            <div class="mt-1 text-xs text-slate-200/60">Optimized flow for gates</div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-xs text-slate-200/70">Records</div>
                            <div class="mt-1 text-xl font-semibold">Accurate</div>
                            <div class="mt-1 text-xs text-slate-200/60">Clean visitor history</div>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-xs text-slate-200/70">Approvals</div>
                            <div class="mt-1 text-xl font-semibold">Simple</div>
                            <div class="mt-1 text-xs text-slate-200/60">From request to entry</div>
                        </div>
                    </div>
                </div>

                <!-- Hero preview card -->
                <div class="lg:col-span-5">
                    <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-1 shadow-2xl">
                        <div class="noise absolute inset-0 opacity-[0.08]"></div>
                        <div class="relative rounded-3xl bg-[#0b1024]/70 backdrop-blur">
                            <div class="flex items-center justify-between px-6 py-4 border-b border-white/10">
                                <div class="text-sm font-semibold">Gate Console</div>
                                <div class="flex items-center gap-2 text-xs text-slate-200/80">
                                    <span class="h-2 w-2 rounded-full bg-emerald-300 shadow-[0_0_24px_rgba(52,211,153,0.65)]"></span>
                                    Online
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                        <div class="flex items-center justify-between gap-4">
                                            <div>
                                                <div class="text-xs text-slate-200/70">Next visit</div>
                                                <div class="mt-1 text-lg font-semibold">Today · 15:30</div>
                                            </div>
                                            <div class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-cyan-200">
                                                Ready
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                            <div class="text-xs text-slate-200/70">Location</div>
                                            <div class="mt-1 text-base font-semibold">Main Gate</div>
                                        </div>
                                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                            <div class="text-xs text-slate-200/70">Mode</div>
                                            <div class="mt-1 text-base font-semibold">Visitor ID</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <div class="text-xs text-slate-200/70">Status</div>
                                            <div class="mt-1 text-base font-semibold">Approved · Access Granted</div>
                                        </div>
                                        <div class="h-10 w-10 rounded-2xl border border-white/10 bg-gradient-to-br from-cyan-400/30 via-fuchsia-400/20 to-transparent grid place-items-center">
                                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-4 h-2 rounded-full bg-white/5 overflow-hidden border border-white/10">
                                        <div class="h-full w-[78%] rounded-full bg-gradient-to-r from-cyan-300 via-fuchsia-300 to-cyan-200"></div>
                                    </div>
                                    <div class="mt-3 flex justify-between text-xs text-slate-200/60">
                                        <span>Verification</span>
                                        <span>Entry</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-xs text-slate-200/60">
                        Visual preview only. Your app UI can plug real data into this layout.
                    </p>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="mx-auto max-w-6xl px-6 pt-14 pb-6 md:pt-20">
            <div class="flex items-end justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">Features</h2>
                    <p class="mt-2 max-w-2xl text-slate-200/75">
                        A clean experience for staff and visitors—designed for speed, clarity, and control.
                    </p>
                </div>
                <div class="hidden md:block rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm text-slate-200/80">
                    <span class="text-cyan-200 font-semibold">Futuristic</span> UI · Classic sections
                </div>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Visitor check-in</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 2l3 7h7l-5.6 4.1L18 21l-6-3.8L6 21l1.6-7.9L2 9h7l3-7z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Fast entry flow that reduces confusion at the gate with a clear, guided interface.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Approvals workflow</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-fuchsia-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M20 7L10 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 20h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Approve requests with status visibility—so staff always know what’s happening.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Search & history</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" stroke="currentColor" stroke-width="2"/>
                                <path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Keep records easy to access—so you can find the right visitor fast.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Vehicle & ID support</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-fuchsia-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M3 13l2-6h14l2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 13v6h14v-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" stroke="currentColor" stroke-width="2"/>
                                <path d="M17 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Register vehicle details and IDs for smoother gate operations.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Modern, readable UI</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-cyan-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 6h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M4 12h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        A futuristic look with classic section structure for an easy first impression.
                    </p>
                </article>

                <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-semibold">Audit-friendly</h3>
                        <span class="rounded-xl border border-white/10 bg-white/5 p-2">
                            <svg class="h-5 w-5 text-fuchsia-200" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 12l2 2 4-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-slate-200/70">
                        Clear statuses and consistent records help keep operations reliable.
                    </p>
                </article>
            </div>
        </section>

        <!-- How it works -->
        <section id="how-it-works" class="mx-auto max-w-6xl px-6 pt-10 pb-10 md:pt-14">
            <div class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-10">
                <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">How it works</h2>
                <p class="mt-2 max-w-2xl text-slate-200/75">
                    A simple flow that fits real-world gate procedures.
                </p>

                <div class="mt-8 grid gap-4 lg:grid-cols-4">
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 1</div>
                        <div class="mt-1 text-base font-semibold">Receive request</div>
                        <p class="mt-2 text-sm text-slate-200/70">Capture the visitor info with clarity.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 2</div>
                        <div class="mt-1 text-base font-semibold">Approve</div>
                        <p class="mt-2 text-sm text-slate-200/70">Update status so staff stay aligned.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 3</div>
                        <div class="mt-1 text-base font-semibold">Check-in</div>
                        <p class="mt-2 text-sm text-slate-200/70">Fast gate flow with visual confirmation.</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#0b1024]/40 p-5">
                        <div class="text-xs text-cyan-200 font-semibold">Step 4</div>
                        <div class="mt-1 text-base font-semibold">Keep history</div>
                        <p class="mt-2 text-sm text-slate-200/70">Search past visits and records quickly.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick register -->
        <section id="register" class="mx-auto max-w-6xl px-6 pb-10 md:pb-14">
            <div class="grid gap-6 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">Quick register</h2>
                    <p class="mt-2 text-slate-200/75">
                        This is a UI preview section. Wire it to your real routes/controllers when ready.
                    </p>
                    <div class="mt-6 space-y-3">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-sm font-semibold">Built for clarity</div>
                            <p class="mt-1 text-sm text-slate-200/70">Clean inputs, compact layout, and friendly guidance.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <div class="text-sm font-semibold">Gate-ready visuals</div>
                            <p class="mt-1 text-sm text-slate-200/70">Glass cards and strong contrast for low-light readability.</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <form onsubmit="return false" class="rounded-3xl border border-white/10 bg-white/5 p-6 md:p-8">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <div class="text-xs text-slate-200/70">Visitor details</div>
                                <div class="mt-1 text-lg font-semibold">Create a new entry</div>
                            </div>
                            <div class="rounded-full border border-white/10 bg-[#0b1024]/40 px-4 py-2 text-xs text-cyan-200">
                                Preview only
                            </div>
                        </div>

                        <div class="mt-6 grid gap-4 sm:grid-cols-2">
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Full name</span>
                                <input type="text" placeholder="e.g. Amina Khan" class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Phone</span>
                                <input type="tel" placeholder="+92 ..." class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block sm:col-span-2">
                                <span class="text-sm text-slate-200/80">Purpose of visit</span>
                                <input type="text" placeholder="Meeting, delivery, support..." class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Vehicle type</span>
                                <input type="text" placeholder="Car / Bike / Van" class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                            <label class="block">
                                <span class="text-sm text-slate-200/80">Vehicle plate</span>
                                <input type="text" placeholder="ABC-1234" class="mt-2 w-full rounded-2xl border border-white/10 bg-[#0b1024]/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-200/40 focus:outline-none focus:ring-2 focus:ring-cyan-300/50"/>
                            </label>
                        </div>

                        <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <div class="text-xs text-slate-200/60">
                                By continuing, you confirm the visitor data is accurate.
                            </div>
                            <div class="flex gap-3">
                                <button type="button" class="rounded-2xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-medium text-slate-100 hover:bg-white/10 transition">
                                    Cancel
                                </button>
                                <button type="submit" class="rounded-2xl bg-gradient-to-r from-cyan-400 via-fuchsia-400 to-cyan-300 px-5 py-3 text-sm font-medium text-slate-950 hover:brightness-110 transition">
                                    Create entry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="mx-auto max-w-6xl px-6 pb-14 md:pb-20">
            <div class="flex items-end justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-semibold tracking-tight md:text-3xl">FAQ</h2>
                    <p class="mt-2 max-w-2xl text-slate-200/75">
                        Quick answers for teams setting up visitor registration.
                    </p>
                </div>
            </div>

            <div class="mt-8 grid gap-4 lg:grid-cols-2">
                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Is this landing page connected to the backend?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">The UI preview is static until you wire routes and controllers.</p>
                    </summary>
                </details>

                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Can staff use this at the gate?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">Yes—this layout is designed for readability and quick scanning.</p>
                    </summary>
                </details>

                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Do you support vehicle details?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">Your system can register vehicles—this page visually supports that concept.</p>
                    </summary>
                </details>

                <details class="group rounded-3xl border border-white/10 bg-white/5 p-6">
                    <summary class="cursor-pointer list-none">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-base font-semibold">Where can I add login/admin screens?</span>
                            <span class="text-cyan-200 text-sm group-open:rotate-45 transition">+</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-200/70">Once you create those routes, update the “Get started” buttons to link to them.</p>
                    </summary>
                </details>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-white/10 bg-[#060814]/70 backdrop-blur">
        <div class="mx-auto max-w-6xl px-6 py-8">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div class="text-sm text-slate-200/70">
                    Developed by <span class="text-slate-100 font-semibold">Kamal</span> · © {{ date('Y') }}
                </div>
                <div class="flex flex-wrap gap-3 text-sm">
                    <a href="#features" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-slate-200/80 hover:bg-white/10 transition">Features</a>
                    <a href="#how-it-works" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-slate-200/80 hover:bg-white/10 transition">How it works</a>
                    <a href="#faq" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-slate-200/80 hover:bg-white/10 transition">FAQ</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>