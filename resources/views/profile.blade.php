<!DOCTYPE html>
<html lang="ar" dir="rtl" data-theme="black">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>الملف الشخصي</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="bg-base-100 min-h-screen ">

<div class=" min-h-screen">
  <div class="p-4">
    <a href="/homePage" class="btn ">
      <span class="icon-[tabler--arrow-right] text-lg"></span>
    </a>
  </div>

  <div class="flex flex-col items-center py-6 space-y-2 border-b border-base-300">
  @if (Auth::check())
<div class="avatar">
      <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
    <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://cdn-icons-png.flaticon.com/512/149/149071.png' }}" alt="avatar 1" />
  </div>
</div>
    <h2 class="text-xl font-bold text-base-content">{{ Auth::user()->name }}</h2>
  </div>
@endif




  <div class="sm:max-w max-w-6xl mx-auto px-6 mt-4 space-y-4 flex-1">
    @foreach ($tweets as $tweet)
    <x-tw :tweet="$tweet" />
  @endforeach
  </div>

</div>
<form method="post" action="{{ route('tweet.create') }}"
  class="border border-base-200 border-t-2 border-t-primary rounded-field sticky bottom-0 z-50 bg-base-100sm:max-w max-w-6xl mx-auto px-6 h-fit w-full">

        @csrf
        <div class="textarea-floating">
            <textarea required class="textarea border-0 resize-none" placeholder="شارك افكارك" id="content"
                name="content"></textarea>
            <label class="textarea-floating-label" for="content">اكتب تغريدة</label>
        </div>
        <div class="p-2 ">
            @error('content')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn btn-primary btn-square">
                <span class="icon-[tabler--send]"></span>
            </button>
        </div>
    </form>

</body>

</html>