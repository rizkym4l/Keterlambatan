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
    
    <a href="/exportps" class="btn btn-primary me-5">Expot Excel</a><br><br>
    <h2><a href="rekapps" style="color: rgb(62, 152, 248)">Rekap Data</a></h2>
  </div>
  
  <div class="justify-content-start" style="margin-left: 40%" >
    
   

  </div>
</div>
  
<br>
{{-- @if(Auth::user()->role == 'admin') --}}
<table class="table" style="width: 70%;margin-left:14%">
        <thead>
        
          <tr>
            <th>NO</th>
         <th></th>
         <th></th>
         <th>Nama</th>
         <th>Tanggal</th>
         <th>informasi</th>
        {{-- @if(Auth::user()->role == 'admin') --}}

         {{-- @endif --}}
        </tr>
          
        </thead>
     
         
         
      <tr>
        {{-- {{$terlambat}} --}}
        @foreach ($terlambat as $item)
        <td>{{$loop->iteration}}</td>
        <td></td>
        <td>
         
        </td>
        <td>
          {{--nested loop--}}
        {{$item->users->name}}

        <ol>
         
          <li>
           
          
              </li>
        
        </ol>
        </td>

        
        <td>
        {{$item->date_time_late}}

        </td>
        <td>
        {{$item->information}}
         
        </td>
       
          
          
          
        </tr> 
        
        @endforeach
        
      </table>
      <div class="mx-5">
        {{-- {{$terlambat->links()}} --}}
        
      </div>
     

</x-app-layout>