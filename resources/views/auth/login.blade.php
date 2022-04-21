
<x-guest-layout>
  @include('layouts.auth')
  <body>
    <section>
        <a href="{{route('index')}}" style="position: absolute;z-index: 100;left:10px;top:10px">
            <h1 class="head1">The Lehkaks</h1>
        </a>    
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx"><img src="https://cdn.dribbble.com/users/1055435/screenshots/5714265/lightbulb-desk.gif" /></div>
          <div class="formBx">
            <form method="POST" action="{{ route('login') }}">
                <div class="col-md-4">
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @csrf
                <h2>Sign In</h2>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="password"/>
                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
                <p class="signup">Don't have an account ?<a href="{{ route('register') }}">Sign Up</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
  
</x-guest-layout>
