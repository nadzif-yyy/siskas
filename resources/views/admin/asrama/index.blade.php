@extends('admin.app')
@section('title', 'Data Asrama')
@section('content')

    <a href="{{ route('data-asrama.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
    <a href="/pdf/asrama" class="btn btn-primary mb-3"><i class="fas fa-file-export"></i> Export PDF</a>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data Asrama</h6>
      </div>
      <div class="card-body">
            <div class="table-responsive">
              <table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Asrama</th>
                    <th scope="col">Nama Anak</th>
                    <th scope="col">Sekolah</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jenjang Sekolah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Status Anak</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $index => $row)
                    <tr>
                      <th scope="row">{{ $index + $data->firstItem() }}</th>
                      <td>{{ $row->asrama }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->sekolah }}</td>
                      <td>{{ $row->gender }}</td>
                      <td>{{ $row->jenjang_sklh }}</td>
                      <td>{{ $row->kelas }}</td>
                      <td>{{ $row->status }}</td>
                      <td>{{ $row->kriteria }}</td>
                      <td >
                        <div class="row justify-content-center ">
                          <a href="{{ route('data-asrama.edit', $row->id) }}" class="btn btn-circle" role="button" style="color: blue;"><i class="fas fa-edit"></i></a>
                          <form action="{{ route('data-asrama.destroy', $row->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-circle" style="color: red;"><i class="fas fa-trash"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
              {{ $data->links() }}
          </div>
    </div>
    <x-notify::notify />
@notifyJs
@endsection