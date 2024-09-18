<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
</head>
<body>
    <h1>Create New Item</h1>

    <form action="{{ route('table_name.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>

        <button type="submit">Create</button>
    </form>
</body>
</html>
