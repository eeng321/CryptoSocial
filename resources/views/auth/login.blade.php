<!DOCTYPE html>
<html>
<body>

<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="clearLoginForm()">×</button>
            </div>
            <div class="modal-body">
                <!-- Adding style -->
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success btn-lg">
                                    {{ __('Login') }}
                                </button>
                                
                                <a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal" class="btn btn-link float-right" id="regis" onclick="clearLoginForm()">Register</a>
                                <a class="btn btn-link float-right" href="#">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                    </div>
                </form>
                <!-- Adding -->
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        document.querySelector('#loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            clearErrors();
            axios.post(this.action, {
                'email': document.querySelector('#email').value,
                'password': document.querySelector('#password').value
            })
            .then((response) => {
                console.log('success');
                window.location.href = "{{ route('login') }}";
            })
            .catch((error) => {
                console.log(error.response);

                const errors = error.response.data.errors;
                const errorItem = Object.keys(errors);
                const errorDOM = document.getElementById(errorItem);
                const errorMessage = errors[errorItem][0];
                console.log(errorMessage);

                clearErrors();
                
                errorDOM.insertAdjacentHTML('afterend', `<div class="text-danger"> ${"Invalid email or password"}</div>`);
            });
        })

        function clearErrors() {
                // remove all error messages
                const errorMessages = document.querySelectorAll('.text-danger')
                errorMessages.forEach((element) => element.textContent = '')
                // // remove all form controls with highlighted error text box
                // const formControls = document.querySelectorAll('.form-control')
                // formControls.forEach((element) => element.classList.remove('border', 'border-danger'))
            }
    })();

    function clearLoginForm(){
        document.getElementById("loginForm").reset();

        const errorMessages = document.querySelectorAll('.text-danger')
        errorMessages.forEach((element) => element.textContent = '')

    }

</script>
</body>
</html>


            

