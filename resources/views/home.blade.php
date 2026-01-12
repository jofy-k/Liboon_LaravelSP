<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="py-3 bg-neutral-primary shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a class="navbar-brand px-4" href="/"><span
                    class="self-center text-xl text-heading font-semibold">Student Portal</span></a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                    <li>
                        <a href="/home"
                            class="block py-2 px-3 text-black bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="/students"
                            class="block py-2 px-3 text-black bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0">Students
                            List</a>
                    </li>
                    <li>
                        <a href="/students/create"
                            class="block py-2 px-3 text-black bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0">Add
                            Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center text-4xl py-8">Welcome to the Student Portal</h1>
    <p class="text-center">Click here to get started</p>
    <div class="flex justify-center">
        <a href="/students"
            class="btn border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mt-4 hover:bg-blue-600 hover:border-blue-600">
            Find Students!
        </a>
    </div>
</body>

</html>
