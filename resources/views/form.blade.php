<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="nrp">NRP:</label>
        <input type="text" name="nrp" id="nrp" required>
        @error('nrp')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="department">Department:</label>
        <input type="text" name="department" id="department" required>
        @error('department')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" required>
        @error('photo')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Submit</button>
    </form>
</body>
</html>
