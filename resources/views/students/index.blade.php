<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal | Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand px-4" href="/">Student Portal</a>
            <div class="float-right">
                <ul class="block md:flex space-x-4 px-4">
                    <li><a href="/">Home</a></li>
                    <li><a href="/students">Students</a></li>
                    <li><a href="/students/create">Add Student</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center text-4xl">Students List</h1>
    <div class="py-8">
        <table class="w-full border-collapse border border-gray-400 bg-white text-sm">
            <thead>
                <tr>
                    <th class="border border-gray-300 ...">ID</th>
                    <th class="border border-gray-300 ...">Name</th>
                    <th class="border border-gray-300 ...">Course</th>
                    <th class="border border-gray-300 ...">Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($samples as $sample)
                    <tr>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $sample['id'] }}</p>
                        </td>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $sample['name'] }}</p>
                        </td>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $sample['course'] }}</p>
                        </td>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $sample['year'] }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
