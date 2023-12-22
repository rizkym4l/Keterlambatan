<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<style>
    .card-body{
        color: :black
    }
</style>
@if(Auth::user()->role != 'admin')

@php
//  $rayon = $rayons->where('user_id',Auth::user()->id)->rayon   
@endphp
@endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="width: 1000px;">

                    <div class="row">

                        <h2 style="color: black">Dashboard</h2>
                        <p style="color: black">Home / Dashboard</p>
                        @if(Auth::user()->role == 'admin')

                          <div class="col-md-6">

                              <div class="card">
                                  <div class="card-body" style="color: black">
                                      Peserta Didik : {{ $students }}
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="card">
                                <div class="card-body" style="color: black">
                                      Administrator : {{ $userAdmin }}
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="card">
                                <div class="card-body" style="color: black">
                                      Pembimbing Siswa : {{ $userPs }}
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-6">
                              <div class="card">
                                <div class="card-body" style="color: black">
                                      Rombel : {{ $rombels }}
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="card">
                                  <div class="card-body" style="color: black">
                                      Rayon : {{ $rayons->count() }}
                                  </div>
                              </div>
                          </div>
                          @else
                          

                          <div class="col-md-6">
                            <div class="card">
                                <div class="card-body" style="color: black">
                                    {{-- Peserta Didik Rayon : {{$rayon }} <br> --}}
                                  
                                    <p>Siswa Rayon : <br>
                                        {{$siswaperrayon->count()}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body" style="color: black">
                                    Siswa Rayon yang telat Hari ini : <br>
                                    @php
                                    echo date('Y-m-d')
                                @endphp
                                <br>
                                    Rayon : {{ $siswartelat->count() }}
                                </div>
                            </div>
                        </div>
                        @endif
                      </div>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
