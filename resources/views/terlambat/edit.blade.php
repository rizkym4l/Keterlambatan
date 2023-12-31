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
            <h1>data_master : Edit Data Terlambat</h1><br><br>
            <div class="row" style="margin-left:5%">
                <form method="POST" action="updaterombel/{{$data->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                      <input type="text" disabled class="form-control" name="name" placeholder="{{$data['users']['name']}}" value="{{$data['users']['name']}}">
                      {{-- <input type="text" hidden class="form-control" name="id"  placeholder="Rombel"> --}}
                      
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  
                    <div class="mb-3">
                      <input type="date" class="form-control" name="date_time_late" placeholder="{{$data['date_time_late']}}" value="{{$data['date_time_late']}}">
                      {{-- <input type="text" hidden class="form-control" name="id"  placeholder="Rombel"> --}}
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  
                    <div class="mb-3">
                      <input type="text" class="form-control" name="information" placeholder="{{$data['information']}}" value="{{$data['information']}}">
                      {{-- <input type="text" hidden class="form-control" name="id"  placeholder="Rombel"> --}}
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                  
                    <div class="mb-3">
                      <input type="file" class="form-control" name="bukti" placeholder="{{$data['bukti']}}" value="{{$data['bukti']}}"><br>
                      {{-- <input type="text" hidden class="form-control" name="id"  placeholder="Rombel"> --}}
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    {{-- {{$data->bukti}} --}}
                    <img src="{{ asset('storage/bukti/' . $data['bukti']) }}" alt="" style="height: 250px">

                  
                   
                    <div class="mb-3">
                     
                    </div>
                  
                    <button type="submit" class="btn btn-dark" style="color: black">Submit</button>
                  </form>
           </div>
        </div>
        </div>
    </div>
</x-app-layout>
