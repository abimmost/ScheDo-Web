<x-layout>
    <x-slot:sliding></x-slot:sliding>
    <div class="container min-vh-100 d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light shadow-lg rounded-lg">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h2 class="h3 mb-3 font-weight-normal">Sign in to your account</h2>
                        </div>
                        <form action="{{ route('login_logic') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" id="email" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="checkbox" onclick="togglePasswordVisibility('password')"> Show
                                        </div>
                                    </div>
                                </div>
                                <small class="form-text text-muted text-right">
                                    <a href="#" class="text-decoration-none">Forgot password?</a>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-block" style="background-color: #0f054c; color: white;">Sign in</button>
                        </form>
                        <p class="mt-3 text-center">
                            Not a member? <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>