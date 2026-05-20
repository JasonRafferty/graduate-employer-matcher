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
        <main class="grid min-h-screen place-items-center bg-slate-950/20 px-5 py-10">
            <section class="w-full max-w-xl rounded-[2rem] border border-white/70 bg-blue-100/60 p-6 shadow-[0_24px_80px_rgba(15,23,42,0.24)] backdrop-blur-sm sm:p-8">
                <div class="text-center">
                    <h1 class="mt-3 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl">
                        Graduate Employer Matcher
                    </h1>

                    <p class="mx-auto mt-3 max-w-sm text-sm leading-6 text-slate-600">
                        Choose your degree and area to find graduate employers that match your search.
                    </p>
                </div>

                <form method="GET" action="/" class="mt-8 space-y-5">
                    <div>
                        <label for="degree-picker" class="block text-sm font-semibold text-slate-800">
                            Degree
                        </label>
                        <div class="relative mt-2" data-picker>
                            <input type="hidden" name="degree" value="{{ request('degree') }}" data-picker-input>
                            <button
                                id="degree-picker"
                                type="button"
                                aria-expanded="false"
                                class="flex w-full items-center justify-between gap-4 rounded-2xl border border-white/70 bg-white/80 px-4 py-3.5 text-left text-base font-semibold text-slate-950 shadow-sm outline-none transition hover:bg-white focus:border-cyan-700 focus:bg-white focus:ring-4 focus:ring-cyan-100/40"
                                data-picker-button
                            >
                                <span data-picker-label>{{ request('degree') ?: 'Select your degree' }}</span>
                                <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-cyan-900/10 text-sm text-cyan-950">
                                    &#9662;
                                </span>
                            </button>
                            <div class="absolute z-20 mt-2 hidden w-full rounded-2xl border border-white/70 bg-white/95 p-2 shadow-xl shadow-slate-950/15 backdrop-blur-md" data-picker-menu>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-500 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="">Select your degree</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Computer Science">Computer Science</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Business">Business</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Engineering">Engineering</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Mathematics">Mathematics</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Psychology">Psychology</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Marketing">Marketing</button>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="area-picker" class="block text-sm font-semibold text-slate-800">
                            Area
                        </label>
                        <div class="relative mt-2" data-picker>
                            <input type="hidden" name="area" value="{{ request('area') }}" data-picker-input>
                            <button
                                id="area-picker"
                                type="button"
                                aria-expanded="false"
                                class="flex w-full items-center justify-between gap-4 rounded-2xl border border-white/70 bg-white/80 px-4 py-3.5 text-left text-base font-semibold text-slate-950 shadow-sm outline-none transition hover:bg-white focus:border-cyan-700 focus:bg-white focus:ring-4 focus:ring-cyan-100/40"
                                data-picker-button
                            >
                                <span data-picker-label>{{ request('area') ?: 'Select an area' }}</span>
                                <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-cyan-900/10 text-sm text-cyan-950">
                                    &#9662;
                                </span>
                            </button>
                            <div class="absolute z-20 mt-2 hidden w-full rounded-2xl border border-white/70 bg-white/95 p-2 shadow-xl shadow-slate-950/15 backdrop-blur-md" data-picker-menu>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-500 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="">Select an area</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="London">London</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Manchester">Manchester</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Birmingham">Birmingham</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Leeds">Leeds</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Bristol">Bristol</button>
                                <button type="button" class="w-full rounded-xl px-3 py-2 text-left text-sm font-semibold text-slate-700 transition hover:bg-cyan-900/10 hover:text-cyan-950" data-option value="Glasgow">Glasgow</button>
                            </div>
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

        <script>
            document.querySelectorAll('[data-picker]').forEach((picker) => {
                const button = picker.querySelector('[data-picker-button]');
                const menu = picker.querySelector('[data-picker-menu]');
                const input = picker.querySelector('[data-picker-input]');
                const label = picker.querySelector('[data-picker-label]');

                button.addEventListener('click', () => {
                    document.querySelectorAll('[data-picker-menu]').forEach((openMenu) => {
                        if (openMenu !== menu) {
                            openMenu.classList.add('hidden');
                            openMenu.closest('[data-picker]').querySelector('[data-picker-button]').setAttribute('aria-expanded', 'false');
                        }
                    });

                    const isOpening = menu.classList.contains('hidden');
                    menu.classList.toggle('hidden');
                    button.setAttribute('aria-expanded', String(isOpening));
                });

                menu.querySelectorAll('[data-option]').forEach((option) => {
                    option.addEventListener('click', () => {
                        input.value = option.value;
                        label.textContent = option.textContent.trim();
                        menu.classList.add('hidden');
                        button.setAttribute('aria-expanded', 'false');
                    });
                });
            });

            document.addEventListener('click', (event) => {
                if (event.target.closest('[data-picker]')) {
                    return;
                }

                document.querySelectorAll('[data-picker-menu]').forEach((menu) => {
                    menu.classList.add('hidden');
                    menu.closest('[data-picker]').querySelector('[data-picker-button]').setAttribute('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
