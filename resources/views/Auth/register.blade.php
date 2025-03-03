<x-layout>
    <x-slot:sliding></x-slot:sliding>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light shadow-lg rounded-lg">
                    <div class="card-body text-center">
                        <form method="POST" action="{{ route('register_logic') }}">
                            @csrf
                            <div class="mb-4">
                                <h2 class="h4">ScheDo</h2>
                                <p class="text-muted">Create an account.</p>
                            </div>
                            <div class="form-group text-left">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus>
                            </div>
                            <div class="form-group text-left">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group text-left">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="checkbox" onclick="togglePasswordVisibility('password')">  Show
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="password_confirmation">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="checkbox" onclick="togglePasswordVisibility('password_confirmation')">  Show
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block" style="background-color: #0f054c; color: white;">Register</button>
                                <p class="mt-3 text-center">
                                    Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>