@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <br>
    {{-- CARD --}}
<div class="container">
    <div class="row"> {{-- start row --}}
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        @if (Auth::check('login'))
                        {{ Auth::user()->email }}
                        @else
                        
                        @endif
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        @if (Auth::check('login'))
                            {{ Auth::user()->name }}
                        @else
                            
                        @endif
                      </div>
                    </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Asrama
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">27</div>
                    </div>
                  <div class="col-auto">
                    <i class="fas fa-home fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Asrama Unggulan
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                    </div>
                  <div class="col-auto">
                    <i class="fas fa-home fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Anak
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jmlh_anak }}</div>
                    </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div> {{-- end row --}}
</div>
    {{-- END OF CARD --}}


    

  {{-- DATA ASRAMA --}}
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-dark">Data Asrama</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
              </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
      </div>
  </div>
  {{-- END OF DATA ASRAMA --}}

@endsection