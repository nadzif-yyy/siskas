@extends('admin.app')
@section('title', 'Data Asrama')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('data-asrama.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="container-fluid">
                    <div class="mb-3">
                        <label for="asrama" class="form-label">Asrama</label>
                        <input type="text" class="form-control" value="{{ $data->asrama }}" name="asrama" placeholder="Masukan Nama Asrama" autofocus>
                    @error('asrama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" placeholder="Masukan Nama Lengkap">
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sekolah" class="form-label">Sekolah</label>
                        <input type="text" class="form-control" value="{{ $data->sekolah }}" name="sekolah" placeholder="Masukan Nama Sekolah">
                        @error('sekolah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gender">Jenis Kelamin</label>
                        <br>
                        <select class="form-select form-select-lg" name="gender" value="{{ old('gender') }}" aria-label="form-select-lg example" style="width: 100%; height:40px; " size="1">
                            <option disabled selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenjang_sklh" class="form-label">jenjang Sekolah</label>
                        <input type="text" class="form-control" value="{{ $data->jenjang_sklh }}" name="jenjang_sklh" placeholder="Masukan Jenjang Sekolah">
                        @error('jenjang_sklh')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" value="{{ $data->kelas }}" name="kelas" placeholder="Masukan Kelas">
                        @error('kelas')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <br>
                        <select class="form-select form-select-lg" value="{{ old('status') }}" name="status" aria-label="form-select-lg example" style="width: 100%; height:40px;" size="1">
                            <option disabled selected>Pilih Status Anak</option>
                            <option value="mukim">Mukim</option>
                            <option value="non mukim">Non mukim</option>
                            <option value="pesantren">Pesantren</option>
                          </select>
                          @error('status')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kriteria">Kriteria</label>
                        <br>
                        <select class="form-select form-select-lg" value="{{ old('kriteria') }}" name="kriteria" aria-label="form-select-lg example" style="width: 100%; height:40px;" size="1">
                            <option disabled selected>Pilih Kriteria Anak</option>
                            <option value="yatim">Yatim</option>
                            <option value="piatu">Piatu</option>
                            <option value="yatim piatu">Yatim Piatu</option>
                            <option value="dhuafa">Dhuafa</option>
                            <option value="anak kepas">Anak Kepas</option>
                            <option value="anak art">Anak Art</option>
                          </select>
                          @error('kriteria')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
        </div>
    </div>

    
@notifyJs
@endsection