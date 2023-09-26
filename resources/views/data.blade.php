<!DOCTYPE html>
<html>
<head>
    <title>Students Data</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @csrf
    <h1>Students Data</h1>
    @if ($data->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>NRP</th>
                    <th>Department</th>
                    <th>IPK</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->nrp }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->ipk }}</td>
                        <td><img src="{{ asset('storage/photos/'.$student->photo) }}" alt="Photo" width="100"></td>
                        <td>
                            <a href="{{ route('edit', ['id' => $student->id]) }}" class="action-button">Edit</a>
                            <form method="POST" action="{{ route('delete', ['id' => $student->id]) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-button" onclick="return confirm('YAKIN DEKKK???')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    @else
        <p>Tidak ada data mahasiswa.</p>
    @endif
    <a href="{{ route('form') }}" class="centered-link">Back to Form</a>
</body>
</html>
