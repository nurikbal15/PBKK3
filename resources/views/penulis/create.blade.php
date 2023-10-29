<!-- resources/views/penulis/create.blade.php -->

<h1>Tambah Penulis</h1>

<form method="POST" action="{{ route('penulis.store') }}">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="address">Alamat:</label>
    <textarea name="address"></textarea>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('penulis.index') }}">Kembali</a>
