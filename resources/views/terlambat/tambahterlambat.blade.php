

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Rayon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%;margin-left:25%">
          <strong>berhasil!</strong> {{ session('msg') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          {{ session('status') }}
   </div>
  @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="col-12">
            <h1>data_master : tambah telat</h1> <br>
            <br>
            {{-- {{$siswa}} --}}

            <div class="row" style="margin-left:5%">
                <form method="POST" action="createterlambat" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <select name="id" id="" class="form-control">
                          <option >Pilih Siswa</option>

                          @foreach($siswa as $p)
  
                         <option value="{{$p->id}}">{{$p->name}}</option>
  
                          {{-- <option value="{{$p->id}}">{{$p->rombel}}</option> --}}
                          {{-- <option value="3">Nurdin</option> --}}
                          @endforeach
                        </select>
                                           </div>
                    <div class="mb-3">
                      <input type="date" class="form-control" name="date_time_late" placeholder="Tanggal" >
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                      <input type="textarea" class="form-control"  placeholder="keterangan" style="height:90px" name="information">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                   
                 
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            {{-- <label class="input-group-text" for="inputGroupFile01">Upload</label> --}}
                            <input type="file" class="form-control" id="inputGroupFile01" name="bukti">
                          </div>
                    </div>
                  
                    <button type="submit" class="btn btn-dark" style="color: black">Submit</button>
                    <a href="dataterlambat" class="btn btn-warning">Lihat Data</a>
                  </form>
           </div>
        </div>
        </div>
    </div>
</x-app-layout>
