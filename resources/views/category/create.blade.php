<form action="/category" method="post">
    @csrf
    <label>Kode Kategori : </label>
    <input type="text" name="category_code">
    <br>
    <label>Nama Kategori : </label>
    <input type="text" name="name">
    <br>
    <button type="submit">Save</button>
</form>