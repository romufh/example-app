<x-layouts.app>
  <form method="post" enctype="multipart/form-data" class="space-y-2">
    @csrf
    <x-input id="name" minLength="3" label="اسم المستخدم" icon="icon-[tabler--user]" />
    <x-input id="email" label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
    <x-input id="password" minLength="8" label="كلمة المرور" icon="icon-[tabler--lock]" type="password"> <button
        type="button" data-toggle-password='{ "target": "#password" }' class="block cursor-pointer"
        aria-label="password toggle">
        <span class="icon-[tabler--eye] text-base-content/80 password-active:block hidden size-5 shrink-0">

        </span>
        <span class="icon-[tabler--eye-off] text-base-content/80 password-active:hidden block size-5 shrink-0">

        </span>
      </button></x-input>


    <x-input id="password_confirmation" minLength="8" label="تأكيد كلمة المرور" icon="icon-[tabler--lock-check]"
      type="password"> <button type="button" data-toggle-password='{ "target": "#password" }'
        class="block cursor-pointer" aria-label="password toggle">
        <span class="icon-[tabler--eye] text-base-content/80 password-active:block hidden size-5 shrink-0">

        </span>
        <span class="icon-[tabler--eye-off] text-base-content/80 password-active:hidden block size-5 shrink-0">

        </span>
      </button></x-input>
<div class="flex items-center gap-2 max-sm:flex-wrap ">
  <input required type="file" accept="image/*" class="file:text-bg-primary file:px-4 file:h-9.5 cursor-pointer file:font-medium file:text-base block text-sm file:me-3 file:rounded-full file:uppercase " aria-label="file-input" id="avatar" name="avatar" />
</div>
    @error('avatar')
        <div class="text-error helper-text ps-3 mb-2">
            {{ $message }}
        </div>
    @enderror

    <button type="submit" class="btn btn-primary w-full mt-8">تسجيل حساب</button>
    <span>
      عندك حساب؟
      <a href="/login" class="link link-animated">سجل دخول</a>
    </span>
  </form>

</x-layouts.app>
