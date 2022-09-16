@extends('dashboard.main')

@section('container')
      <div class="d-flex flex-column border-bottom">
        <h5>Arsip Surat</h5>
        <p>Berikut ini adalah surat-surat yang telah diterbitkan dan diarsipkan. <br>
          Klik "Lihat" pada kolom aksi untuk menampilkan surat
        </p>
      </div>
      <a href="{{url('admin/surat/create_page')}}" class="btn btn-primary waves-effect" type="button">Arsipkan Surat</a>
      <div class="table-responsive">
          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
          <thead class="table-light">
            <tr>
              <th scope="col">No Surat</th>
              <th scope="col">Kategori</th>
              <th scope="col">Judul</th>
              <th scope="col">Waktu Pengarsipan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $key => $d)
            <tr>
              <td>{{$d->nomor}}</td>
              <td>{{$d->kategori}}</td>
              <td>{{$d->judul}}</td>
              <td>{{$d->created_at}}</td>
              <td>
              <a href="{{url('admin/surat/delete/'.$d->id)}}" method="post">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Hapus</button>
              <a type="button" href="{{url('admin/surat/download/'.$d->id)}}"  target="_blank" class="btn btn-warning">Unduh</a>
              <a type="button" href="{{url('admin/surat/detail/'.$d->id)}}" class="btn btn-primary">Lihat>></a>      
</a>              
                </td>
                </tr>
                @endforeach
                </tbody>
</table>
</div>
      
@endsection