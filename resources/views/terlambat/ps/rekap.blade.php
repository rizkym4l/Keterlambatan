<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="margin-left: 43%">
            {{ __('Pembelian') }}
        </h2>
    </x-slot>
<br><br><br>
<div class=" d-flex" style="margin-left: 14%">
  
  <div class=" justify-content-end">
    

  </div>
  
  <div class="justify-content-start" style="margin-left: 50%" >
    <form action="/cari" method="post">
      {{-- @csrf --}}
    {{-- <input type="date" name="date" class="form-controller"> --}}
    <input type="text" name="nama_pembeli" class="form-controller" placeholder="Nama pembeli">

    <input type="submit" class="form-controller btn btn-success" value="Cari" style="color: green">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
 <a href="dataterlambat"class="btn btn-warning">RESET</a>
  </form>
  
   

  </div>
</div>
  
  <br>
    <table class="table" style="width: 70%;margin-left:14%">
        <thead>
        
          <tr>
            <th>NO</th>
         <th></th>
         <th></th>
         <th>Nama</th>
      <th>Jumlah</th>
         <th>Aksi</th>
        </tr>
          
        </thead>
     
         
         
      <tr>
            {{$terlambat}}
        @foreach ($terlambat as $item)
        <td>{{$loop->iteration}}</td>
        <td></td>
        <td>
         
        </td>
        <td>
          {{$item['users']->name}}
        
          {{--nested loop--}}
        <ol>
         
          <li>
           
          
              </li>
        
        </ol>
        </td>
        
        
        <td>
         {{$item->where("id",$item["id"])->count()}}
       
         
        </td>
        <td class="d-flex ms-3"> 
        
</div>
        <a href="lihat/{{$item->id}}" style="color: rgb(57, 97, 242)">Lihat</a>
        @if ($item->where("id",$item["users"]["id"])->count() >= 3)
        <a href="pdf/{{$item->id}}" class="btn btn-primary ms-5">Kasih sp</a>
            
            
        @endif
  

    
    </td>

        
           
        

      </tr> 

      @endforeach

     


</x-app-layout>