<a href="/Book/create">Tambah Buku</a>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody> 
    @foreach ($book as $data)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $data->book_code }} </td>
            <td> {{ $data->book_name }} </td>
            <td> 
                <a href="/Book/edit/
            </td>
        </tr>








    </tbody>
</table>