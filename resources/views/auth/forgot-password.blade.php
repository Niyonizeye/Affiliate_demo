<!--  -->


<!-- forget -->



<x-guest-layout>
     <!-- start of banner -->
    <!-- Hero Section Begin -->


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 col-md-4">
                <form class="login100-form validate-form" method="POST">
                    @csrf
                    <span class="login100-form-title p-b-26" style="margin-bottom:30px">
                        Reset Your Password
                    </span>

                    <x-jet-validation-errors class="mb-4 text-red" />
                    @foreach (['danger','warning','success','info'] as $msg)
                    @if (Session::has('alert-'.$msg))
                    <p class="alert alert-{{$msg}}" >{{Session::get('alert-'.$msg)}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>

                    @endif

                    @endforeach

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" name="email" type="email" name="email" :value="old('email')" required autofocus >
                        <span class="focus-input100" data-placeholder="Enter Email"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="logbutton">
                            Generate password
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

