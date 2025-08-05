<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Form Umur Kamu</h1>
    <p>Silakan masukan umur kamu dibawah.</p>
    <form action="{{route('age.proses')}}" method="post">
        {{-- 
        setiap form method post => csrf
        - keamanan data
        - generate-token id
         --}}
         
        @csrf
        <div class="">
            <label for="">Nama Kamu</label>
            <input type="text" name="name" required>
        </div>
        <div class="">
            <label for="">Umur Kamu</label>
            <input type="number" name="age" required>
        </div>
        <div class="">
            <button type="submit">Masuk</button>
        </div>

    </form>
</body>

</html>
