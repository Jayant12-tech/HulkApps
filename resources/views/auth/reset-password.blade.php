<x-guest-layout>
  @include('layouts.auth')
  <body>
    <section>
        <a href="{{route('index')}}" style="position: absolute;z-index: 100;left:10px;top:10px">
            <h1 class="head1">The Lehkaks</h1>
        </a> 
        <div class="container">
          <div class="user signipBx">
            <div class="formBx">
              <form method="POST" action="{{ route('password.update') }}">
                  @csrf
                  <center>
                     <x-jet-validation-errors class="mb-4" />
                  </center>
                  <input type="hidden" name="token" value="{{ $request->route('token') }}">
             
                  <h2>Reset your password</h2>
                
                  <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required readonly />
                  <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="New Password" />
                  <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password"placeholder="Confirm Password"/>
                  <x-jet-button class="ml-4">
                      {{ __('Reset Password') }}
                  </x-jet-button>
                 
              </form>
            </div>
            <div class="imgBx"><img src="https://cdn.dribbble.com/users/530884/screenshots/2425883/password-drbl.gif" /></div>
          </div>
        </div>
    </section>
  </body>
</x-guest-layout>


