<!-- resources/views/penulis/edit.blade.php -->

<h1>Edit Penulis</h1>

<form method="POST" action="{{ route('penulis.update', $penulis->id) }}">
    @csrf
    @method('PUT')

    <label for="name">Nama:</label>
    <input type="text" name="name" value="{{ $penulis->name }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $penulis->email }}" required>

    <label for="address">Alamat:</label>
    <textarea name="address">{{ $penulis->address }}</textarea>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('penulis.index') }}">Kembali</a>
