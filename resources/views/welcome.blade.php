<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graduate Employer Matcher</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 text-gray-900">
        <main class="min-h-screen px-6 py-10">
            <section class="mx-auto max-w-2xl">
                <h1 class="text-3xl font-bold">
                    Graduate Employer Matcher
                </h1>

                <p class="mt-3 text-gray-600">
                    Enter your degree and area to find employers with relevant graduate roles.
                </p>

                <form class="mt-8 rounded-lg bg-white p-6 shadow-sm">
                    <div>
                        <label for="degree" class="block text-sm font-medium text-gray-700">
                            Degree
                        </label>
                        <input
                            id="degree"
                            name="degree"
                            type="text"
                            placeholder="Computer Science"
                            class="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
                        >
                    </div>

                    <div class="mt-5">
                        <label for="area" class="block text-sm font-medium text-gray-700">
                            Area
                        </label>
                        <input
                            id="area"
                            name="area"
                            type="text"
                            placeholder="Manchester"
                            class="mt-2 w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"
                        >
                    </div>

                    <button
                        type="submit"
                        class="mt-6 rounded-md bg-blue-600 px-4 py-2 font-medium text-white hover:bg-blue-700"
                    >
                        Find employers
                    </button>
                </form>

                <section class="mt-8 rounded-lg bg-white p-6 shadow-sm">
                    <h2 class="text-lg font-semibold">
                        Results
                    </h2>

                    <p class="mt-2 text-gray-600">
                        Employer matches will appear here after we connect the search button.
                    </p>
                </section>
            </section>
        </main>
    </body>
</html>
