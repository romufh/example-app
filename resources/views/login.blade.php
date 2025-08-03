<x-layouts.app>
   <form class="space-y-2" method="post">
    @csrf
        <x-input id="email" label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" label="كلمة المرور" icon="icon-[tabler--lock]" type="password" >
          <button
        type="button" data-toggle-password='{ "target": "#password" }' class="block cursor-pointer"
        aria-label="password toggle">
        <span class="icon-[tabler--eye] text-base-content/80 password-active:block hidden size-5 shrink-0">

        </span>
        <span class="icon-[tabler--eye-off] text-base-content/80 password-active:hidden block size-5 shrink-0">

        </span>
      </button></x-input>

        <button type="submit" class="btn btn-primary w-full mt-8">تسجيل دخول</button>
        <span>
            ما عندك حساب؟
            <a href="/singin" class="link link-animated">سجل حساب</a>
        </span>
    </form>
</x-layouts.app>