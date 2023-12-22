<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4{
          text-align: center;
        }
    </style>
</head>
<body>
    <h4>
        Surat pernyataan 
    </h4>
    <h4>
        Tidak akan terlambat ke sekolah
    </h4><br>

    <p>Yang bertanda tangan dibawah ini:</p> <br>
    
    {{-- {{$late}} --}}
    <p>Nis : {{$late[0]['users']['nis']}}</p>
    <p>Nama : {{$late[0]['users']['name']}}</p>
    <p>Rombel : {{$late[0]['users']['rombel']['rombel']}}</p>
    <p>Rayon : {{$late[0]['users']['rayon']['rayon']}}</p><br>

    <p>Dengan Ini menyatakan bahwa saya telah melakukan pelanggaran tata tertib sekolah, yaitu terlambat datang ke sekolah sebanyak <bold>3 Kali</bold> yang mana hal tersebut termasuk kedalam pelanggaran kedisiplinan.Saya berjanji tidak akan terlambat datang ke sekolah lagi. Apabila saya terlabat lagi saya akan dikenakan sanksi.</p><br>
    <p>demikian surat pernyataan terlambat ini saya buat dengan penuh penyesalan</p>
    <br><br>




</body>
</html>