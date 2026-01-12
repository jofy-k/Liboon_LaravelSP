<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/students">Students</a>
            <a href="/students/create">Add Student</a>
        </nav>
    </header>
   <h1>Welcome to the Student Portal</h1>
   <p>Click here to get started</p> 

   <a href="/students" class="btn">Find Students!</a>
</body>
</html>