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
            <h1>data_master : tambah rayon</h1><br><br>
            <div class="row" style="margin-left:5%">
                <form method="POST" action="createrayon">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control" name="rayon" placeholder="Rayon">
                      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
{{$ps}}
                   
                    <div class="mb-3">
                      <select name="user_id" id="" class="form-control">
                        <option >Pilih PS</option>
                        @foreach($ps as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        {{-- <option value="3">Nurdin</option> --}}
                        @endforeach
                      </select>

                    </div>
                  
                    <button type="submit" class="btn btn-dark" style="color: black">Submit</button>
                  </form>
           </div>
        </div>
        </div>
    </div>
</x-app-layout>
