<!-- resources/views/penulis/index.blade.php -->

<h1>Daftar Penulis</h1>

<a href="{{ route('penulis.create') }}" class="btn btn-primary">Tambah Penulis</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($penulis as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->address }}</td>
                <td>
                    <a href="{{ route('penulis.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('penulis.destroy', $p->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
