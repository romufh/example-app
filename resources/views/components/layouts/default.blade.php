<!DOCTYPE html>
<html lang="ar"dir="rtl" data-theme="black">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">
<nav class="navbar bg-neutral-950 rounded-box shadow-base-300/20 shadow-sm max-w-6xl mx-auto px-6 mt-4 sticky top-2 z-50">
  <div class="flex flex-1 items-center ">
    <img src="/images/logoBanana-removebg-preview.png" alt="Logo" class="w-10 h-10 object-contain" />
    <a class="link text-base-content link-neutral text-xl font-bold no-underline" href="/homePage">
       
      SayIt
    </a>
    
  </div>

@if (Auth::check())
  <div class="navbar-end flex items-center gap-4 ">
  
    <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
      <button id="dropdown-scrollable" type="button" class="dropdown-toggle flex items-center" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
        <div class="avatar">
          <div class="size-9.5 rounded-full">
            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) :"https://cdn-icons-png.flaticon.com/512/149/149071.png"}}"  alt="avatar 1" />
          </div>
        </div>
      </button>
      <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-avatar">
        <li class="dropdown-header gap-2">
          <div class="avatar">
            <div class="w-10 rounded-full">
              <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : "https://cdn-icons-png.flaticon.com/512/149/149071.png"}}" alt="avatar" />
            </div>
          </div>
          <div>
            <h6 class="text-base-content text-base font-semibold">{{ Auth::user()->name }}</h6>
            
          </div>
        </li>
        <li>
          <a class="dropdown-item" href="/profile">
            <span class="icon-[tabler--user]"></span>
            الملف الشخصي
          </a>
        </li>
      
    
      
        <li class="dropdown-footer gap-2">
        <form method="post" class="w-full" action="{{ route('logout') }}">
          @csrf
            <button type="submit" class="btn btn-error btn-soft btn-block" >
            <span class="icon-[tabler--logout]"></span>
            تسجيل خروج
          </button>
        </form>
        </li>
      </ul>
    </div>
  </div>

  @else
<a class="btn btn-text btn-soft " href="/login">
            <span class="icon-[tabler--logout]"></span>
            Sign in
          </a>
@endif
  
</nav>

<div class="m-4 flex-1">
  {{ $slot }}
</div>

<form method="post" action="{{ route('tweet.create') }}"
  class="border border-base-200 border-t-2 border-t-primary rounded-field sticky bottom-0 z-50 bg-base-100sm:max-w max-w-6xl mx-auto px-6 h-fit w-full">

        @csrf
        <input type="hidden" name="parent_tweet_id" value="{{ request()->tweet?->id }}"/>
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