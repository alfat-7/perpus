<a href="/category/create">Tambah Kategori</a>
<table border="1" width="100%">
    <thead>
            <th>Kode</th>
            <th>Nama</th>
            <th>Aksi</th>
    </thead>
    <tbody> 
        @foreach($category as $data)
            <tr>
                <td> {{ $data->category_code}}</td>
                <td>{{ $data->name}} </td>
                <td>
                    <form action="/category/{{ $data->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach 
    </tbody>
    </table>