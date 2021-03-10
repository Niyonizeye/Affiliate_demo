<!--  -->


<!-- forget -->



<x-guest-layout>
     <!-- start of banner -->
    <!-- Hero Section Begin -->


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 col-md-4">
            <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <span class="login100-form-title p-b-26" style="margin-bottom:30px">
                        Reset Your Password
                    </span>

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" /><br>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" /><br>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /><br>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" id="logbutton">
                                       Reset Password
                                      <div class="spinner-border m-5" style="width: 3rem; height: 3rem;display:none" role="status" id="loader">
                                      </div>
                                    </button>


                        </div>
                    </div>
        </form>
            </div>
        </div>
        <script>
            document.getElementById("logbutton").addEventListener("click", function() {
            document.getElementById("loader").style.display="block";
            });
        </script>
    </div>
    <!-- Hero Section End -->
    <!-- end of banner -->
</x-guest-layout>

