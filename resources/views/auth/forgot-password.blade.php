<x-guest-layout>
  @include('layouts.auth')
<body>
    <section>
        <a href="{{route('index')}}" style="position: absolute;z-index: 100;left:10px;top:10px">
            <h1 class="head1">The Lehkaks</h1>
        </a>    
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx"><img src="https://cdn.dribbble.com/users/1741026/screenshots/6549026/nest_forgot_password_dribbble.gif" /></div>
          <div class="formBx">
             <form method="POST" action="{{ route('password.email') }}">
    
                <div class="col-md-4">
                    <x-jet-validation-errors class="mb-4" />
                     <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

    
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @csrf
                <h2>Forgot Password</h2>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  placeholder="Registerted Email"/>
                
                <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Email Password Reset Link') }}
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


