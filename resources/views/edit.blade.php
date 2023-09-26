<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('update', ['id' => $student->id]) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $student->name }}" required>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ $student->email }}" required>

        <label for="nrp">NRP:</label>
        <input type="text" name="nrp" id="nrp" value="{{ $student->nrp }}" required>

        <label for="department">Department:</label>
        <input type="text" name="department" id="department" value="{{ $student->department }}" required>

        <button type="submit">Update</button>
    </form>
    <a href="{{ route('data') }}">Kembali ke Data Mahasiswa</a>
</body>
</html>
