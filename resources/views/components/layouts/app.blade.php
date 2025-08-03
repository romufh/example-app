<!DOCTYPE html>
<html lang="ar" dir="rtl" data-theme="black">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen bg-base-100 px-10 ">

  <div class="flex items-center gap-8">

<img src="{{ asset('images/logoBanana-removebg-preview.png') }}" ></img>

    <div class="card w-[50vw] bg-black text-white shadow-lg">
      <div class="card-body">
        <h6 class="card-title text-center mb-4">مرحبًا</h6>
        {{ $slot }}
      </div>
  </div>

  </div>

</body>
</html>





  

</body>
</html>