<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 43%">
            {{ __('Pembelian') }}
        </h2>
    </x-slot><br><br>
    <p class="container my-5">Lihat detail : {{$lates[0]['users']['name']}} <br><br>
  {{$lates[0]['users']['name']}} | {{$lates[0]['users']['nis']}} | {{$lates[0]['users']['rombel']['rombel']}} | {{$lates[0]['users']['rayon']['rayon']}} w
  {{-- {{$lates}} --}}

    </p><br>
<div class="container my-5 d-flex">
    
    @foreach($lates as $data)
    <div class="card ms-5" style="width: 18rem;">
        <img src="{{ asset('storage/bukti/' . $data['bukti']) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> {{$data['date_time_late']}}</h5>
          <p class="card-text">{{$data['information']}}</p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
          <h2 style="font-weight: bold">Keterlambatan Ke {{$loop->iteration}}</h2>
        </div>
      </div>
      @endforeach
</div>

</x-app-layout>