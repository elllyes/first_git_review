
        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">password</label>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" 
                        name="password" autocomplete="new-password">
                         <i class="bi bi-eye-slash" style="margin-left:-30px" id="togglePassword"></i>
                         @error('password')
                        <span class="invalid-feedback align-content-bottom" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
        </div>


        <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm password') }}</label>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center">
                            <input id="password-confirm" type="password" class="form-control" 
                                   name="password_confirmation" required autocomplete="new-password">
                                   <i class="bi bi-eye-slash" style="margin-left:-30px" id="togglePassword1"></i>
                        </div>
                    </div>
            </div>
                    <script>
                            const togglePassword1 = document.querySelector("#togglePassword1");
                            const password_c = document.querySelector("#password-confirm");

                            togglePassword1.addEventListener("click", function () 
                            {
                            const type = password_c.getAttribute("type") === "password" ? "text" : "password";
                            password_c.setAttribute("type", type);
                            
                            this.classList.toggle("bi-eye");
                             });
                    
                            const togglePassword = document.querySelector("#togglePassword");
                            const password = document.querySelector("#password");

                            togglePassword.addEventListener("click", function () 
                            {
                            const type = password.getAttribute("type") === "password" ? "text" : "password";
                            password.setAttribute("type", type);
                            
                            this.classList.toggle("bi-eye");
                             });
                    </script>