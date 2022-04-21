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
              <form method="POST" action="{{ route('register') }}">
              @csrf
               <center>
                     <x-jet-validation-errors class="mb-4" />
              </center>
             
                <h2>Create an Account</h2>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email"/>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
                  <x-jet-button class="ml-4">
                      {{ __('Register') }}
                  </x-jet-button>
                <p class="signup">
                  Already have an account ?
                  <a href="{{ route('login') }}"> Sign In </a>
                </p>
              </form>
            </div>
            <div class="imgBx"><img src="https://i.pinimg.com/originals/09/42/83/094283e771af57b77fe95716739e3096.gif" /></div>
          </div>
        </div>
    </section>
  </body>
</x-guest-layout>
