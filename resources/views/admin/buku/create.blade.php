@include('head')


     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    
    </div>

     @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
         
     @endif

     <div class="card shadow">
        <div class="card-body">
        <form action="{{route ('foto_cover') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{old('title') }}">
            </div>

            <div class="form-group">
                <label for="location">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" value="{{old('pengarang') }}">
            </div>
            <div class="form-group">

                <label for="location">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="{{old('penerbit') }}">
            </div>

            

            <div class="form-group">
                <label for="featured_event">isbn</label>
                <input type="number" class="form-control" name="isbn" placeholder="isbn" value="{{old('isbn') }}">
            </div>
            
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" class="form-control" name="tahun_terbit" placeholder="Year" value="{{old('tahun_terbit') }}">
            </div>

            <div class="form-group">
                <label for="tempat">tempat</label>
                <input type="text" class="form-control" name="tempat" placeholder="Tempat" value="{{old('tempat') }}">
            </div>

            <div class="form-group">
                <label for="stok">stok</label>
                <input type="stok" class="form-control" name="stok" placeholder="Stok" value="{{old('stok') }}">
            </div>

            <div class="form-group">
                <label for="image">Cover</label>
               <input type="file" class="form-control" name="foto_cover" placeholder="Cover" 
               class="form-control">
            </div>

            
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
         </form>
        </div>
     </div>
  </div>
  <!-- /.container-fluid -->
@include('footer')
@include('script')