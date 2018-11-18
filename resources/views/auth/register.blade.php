<!DOCTYPE html>
<html>
<body>
<div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="clearForm()">×</button>
            </div>
            <div class="modal-body">
            <div id="error"></div>
            <form method="POST" action="{{ route('register') }}" id="registerForm" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email1" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="password1" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success btn-lg" id="registerBtn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>

  <script>
    (function() {
        document.getElementById("registerForm").addEventListener("submit", function(f) {
            f.preventDefault();
            clearErrors();

            axios.post(this.action, {
                'name': document.querySelector('#name').value,
                'email': document.querySelector('#email1').value,
                'password': document.querySelector('#password1').value,
                'password_confirmation': document.querySelector('#password-confirm').value
            })
            .then((response) => {
                console.log(response);
                window.location.href = "{{ route('register') }}";
            })
            .catch((error) => {
                console.log(error.response);

                const errors = error.response.data.errors;
                const errorItem = Object.keys(errors)[0];
                const errorLog = errorItem + 1;
                const errorDOM = document.getElementById(errorLog);
                const errorMessage = errors[errorItem][0];
                
                console.log(errorLog);
                console.log(errorDOM);
                console.log(errorMessage);

                clearErrors();
                errorDOM.insertAdjacentHTML('afterend', `<div class="text-danger"> ${errorMessage}</div>`);

                
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

    function clearForm(){
        document.getElementById("registerForm").reset();

        const errorMessages = document.querySelectorAll('.text-danger')
        errorMessages.forEach((element) => element.textContent = '')

    }

</script>
</body>
</html>




