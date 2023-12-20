<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Master') }}
        </h2>
    </x-slot>
    <style>
        .button {
  display: inline-block;
  background: black;
  color: #fff;
  text-transform: uppercase;
  padding: 50px 50px;
  border-radius: 5px;
  box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
  cursor: pointer;
  -webkit-transition: all ease-in-out 300ms;
  transition: all ease-in-out 300ms;
}
.button:hover {
  box-shadow: 0px 37px 20px -20px rgba(0, 0, 0, 0.2);
  border: 2px solid black;
  background: #fff;
  color: black;
  -webkit-transform: translate(0px, -10px) scale(1.2);
          transform: translate(0px, -10px) scale(1.2);
}

    </style>

    <div class="py-12" style="margin-left:%;background-color:; width:85vw;height:100vh;"
    >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:15%">
           <div class="col-12">
            <div class="row" style="margin-left:5%">
            <div class="col-4">
                <button><a href="rombel"  class="button">Data Rombel</a></button>
            </div>
            <div class="col-4">
                <button><a href="tambahRayon"  class="button">Data Rayon</a></button>
            </div>
            <div class="col-4">
                <button><a href="datasiswa"  class="button">Data Siswa</a></button>
            </div>
            
           </div>
        </div>
        </div>
    </div>
</x-app-layout>
