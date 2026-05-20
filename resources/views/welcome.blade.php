<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graduate Employer Matcher</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="bg-cover bg-center bg-no-repeat text-slate-950 antialiased"
        style="background-image: url('/images/background.avif');"
    >
        <main class="grid min-h-screen place-items-center bg-slate-950/45 px-5 py-10">
            <section class="w-full max-w-xl rounded-[2rem] border border-white/70 bg-blue-100/60 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.24)] backdrop-blur-sm sm:p-8">
                <div class="text-center">
                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-cyan-900/70">
                        Career Search
                    </p>

                    <h1 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                        Graduate Employer Matcher
                    </h1>

                    <p class="mx-auto mt-3 max-w-sm text-sm leading-6 text-slate-600">
                        Choose your degree and area to find graduate employers that match your search.
                    </p>
                </div>

                <form method="GET" action="/" class="mt-8 space-y-5">
                    <div>
                        <label for="degree" class="block text-sm font-semibold text-slate-800">
                            Degree
                        </label>
                        <div class="relative mt-2">
                            <select
                                id="degree"
                                name="degree"
                                class="w-full appearance-none rounded-2xl border border-white/70 bg-white/80 px-4 py-3.5 pr-12 text-base font-semibold text-slate-950 shadow-sm outline-none transition focus:border-cyan-700 focus:bg-white focus:ring-4 focus:ring-cyan-100/40"
                            >
                                <option value="">Select your degree</option>
                                <option value="Computer Science" @selected(request('degree') === 'Computer Science')>Computer Science</option>
                                <option value="Business" @selected(request('degree') === 'Business')>Business</option>
                                <option value="Engineering" @selected(request('degree') === 'Engineering')>Engineering</option>
                                <option value="Mathematics" @selected(request('degree') === 'Mathematics')>Mathematics</option>
                                <option value="Psychology" @selected(request('degree') === 'Psychology')>Psychology</option>
                                <option value="Marketing" @selected(request('degree') === 'Marketing')>Marketing</option>
                            </select>
                            <span class="pointer-events-none absolute inset-y-2 right-2 grid w-9 place-items-center rounded-xl bg-cyan-900/10 text-cyan-950">
                                <span class="text-sm">&#9662;</span>
                            </span>
                        </div>
                    </div>

                    <div>
                        <label for="area" class="block text-sm font-semibold text-slate-800">
                            Area
                        </label>
                        <div class="relative mt-2">
                            <select
                                id="area"
                                name="area"
                                class="w-full appearance-none rounded-2xl border border-white/70 bg-white/80 px-4 py-3.5 pr-12 text-base font-semibold text-slate-950 shadow-sm outline-none transition focus:border-cyan-700 focus:bg-white focus:ring-4 focus:ring-cyan-100/40"
                            >
                                <option value="">Select an area</option>
                                <option value="London" @selected(request('area') === 'London')>London</option>
                                <option value="Manchester" @selected(request('area') === 'Manchester')>Manchester</option>
                                <option value="Birmingham" @selected(request('area') === 'Birmingham')>Birmingham</option>
                                <option value="Leeds" @selected(request('area') === 'Leeds')>Leeds</option>
                                <option value="Bristol" @selected(request('area') === 'Bristol')>Bristol</option>
                                <option value="Glasgow" @selected(request('area') === 'Glasgow')>Glasgow</option>
                            </select>
                            <span class="pointer-events-none absolute inset-y-2 right-2 grid w-9 place-items-center rounded-xl bg-cyan-900/10 text-cyan-950">
                                <span class="text-sm">&#9662;</span>
                            </span>
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-2xl border border-cyan-800/20 bg-cyan-900/70 px-5 py-3.5 text-base font-bold text-white shadow-lg shadow-cyan-950/20 transition hover:bg-cyan-800 focus:outline-none focus:ring-4 focus:ring-cyan-200"
                    >
                        Search
                    </button>
                </form>
            </section>
        </main>
    </body>
</html>
