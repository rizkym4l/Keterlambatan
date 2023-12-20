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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="width:70vw">
           <div class="col-12">
            <h1>data_master : Rombel</h1><br><br>
            <div class="row" style="margin-left:5%">
                <a href="tambahrombel"><button class="btn btn-primary mb-5" style="width:10%;height:40px">Tambah</button></a>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Rombel</th>
                            <th>Aksi</th>
                        </tr>
              
                    </thead>
                    <tbody>
                        {{-- {{$data}} --}}
                        @foreach ($data as $item)
                            
                    
                     
                  
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->rombel}}</td>
                        <td>
                            <div class="d-flex">
                            <a href="editrombel/{{$item->id}}"><button class="btn btn-success">Edit</button></a>
                            <form action="hapusrombel/{{$item->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                  <button class="btn btn-danger">Hapus</button>
                </div>
                            </form>
                        </td>

                        {{-- <td>@twitter</td> --}}
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
           </div>
        </div>
        </div>
    </div>
</x-app-layout>
