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
  
  <div class="justify-content-start" style="margin-left: 40%" >
  
  </form>
  
   

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
         <th>Nis</th>
         <th>Nama</th>
         <th>Rombel</th>
         <th>Rayon</th>
        {{-- @if(Auth::user()->role == 'admin') --}}

          
        </thead>
     
         {{$siswa}}
         
      <tr>
        
        @foreach ($siswa as $item)
        <td>{{$loop->iteration}}</td>
        <td></td>
        <td>
         
        </td>
        <td>
          {{$item["nis"]}}
        
          {{--nested loop--}}
        <ol>
         
          <li>
           
          
              </li>
        
        </ol>
        </td>
        
        <td>
          {{$item->name}}
        </td>
        <td>
          {{$item->rayon->rayon}}
         
        </td>
        <td>
            {{$item->rombel->rombel}}

        </td>
       
          
          
          
        </tr> 
        
        @endforeach
        
      </table>
      <div class="mx-5">
        {{-- {{$terlambat->links()}} --}}
        
      </div>
     

</x-app-layout>