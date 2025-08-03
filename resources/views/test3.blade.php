<!DOCTYPE html>
<html lang="ar" dir="rtl" data-theme="light">
<head>
  <script src="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>



  <!--text box-->
<div class="input-floating max-w-sm m-4">
  <input
    type="text"
    class="input is-valid border-black text-black placeholder-black focus:border-black focus:ring-black"
    style="border-color: black;"
    id="successFloatingInput"
  />
  <label class=" text-black input-floating-label" style="color: black;" for="successFloatingInput">الاسم الكامل</label>
</div>


  <!--combo box-->
<div class="relative max-w-sm m-4" data-combo-box="" >
  <div class="relative">
    <input class="input" type="text" value="الحاسب الالي" role="combobox" aria-expanded="false" data-combo-box-input="" aria-label="Default combobox" />
    <span class="icon-[tabler--caret-up-down] text-black  absolute end-3 top-1/2 size-4 shrink-0 -translate-y-1/2" data-combo-box-toggle="" >
<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-caret-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 10l6 6l6 -6h-12" /></svg>

    </span>
  </div>
  <div class="bg-base-100 rounded-box shadow-base-300/20 absolute z-50 max-h-44 w-full space-y-0.5 overflow-y-auto p-2 shadow-lg" style="display: none" data-combo-box-output="" >
    <div class="dropdown-item combo-box-selected:dropdown-active" tabindex="0" data-combo-box-output-item="">
      <div class="flex items-center justify-between">
        <span data-combo-box-search-text="الذكاء الاصطناعي" data-combo-box-value="">الذكاء الاصطناعي</span>
        <span class="icon-[tabler--check] text-black combo-box-selected:block hidden size-4 shrink-0"></span>
      </div>
    </div>


    <div class="dropdown-item combo-box-selected:dropdown-active" tabindex="3" data-combo-box-output-item="">
      <div class="flex items-center justify-between">
        <span data-combo-box-search-text="هندسة برمجيات" data-combo-box-value="">هندسة برمجيات</span>
        <span class="icon-[tabler--check] text-black combo-box-selected:block hidden size-4 shrink-0"></span>
      </div>
    </div>
    <div class="dropdown-item combo-box-selected:dropdown-active" tabindex="4" data-combo-box-output-item="">
      <div class="flex items-center justify-between">
        <span data-combo-box-search-text="هندسة الحاسب الالي" data-combo-box-value="">هندسة الحاسب الالي</span>
        <span class="icon-[tabler--check] text-primary combo-box-selected:block hidden size-4 shrink-0"></span>
      </div>
    </div>
  
  </div>
</div>
<!--Check box-->
  <div class="flex items-center gap-1 m-4">
  <input type="radio" name="radio-0" class="radio" id="defaultRadio1" />
  <label class="label-text text-base" for="defaultRadio1"> ذكر </label>
</div>
<div class="flex items-center gap-1 m-4">
  <input type="radio" name="radio-0" class="radio" id="defaultRadio2" checked />
  <label class="label-text text-base" for="defaultRadio2"> انثى </label>
</div>






<!--Toggle Switch-->

   <input id="toggle-duration-usage " name="toggle-count-method" type="checkbox" class="switch switch-primary mx-auto mr-4" aria-label="toggle count" >عجبك الفرونت؟<input>

  
</body>
</html>