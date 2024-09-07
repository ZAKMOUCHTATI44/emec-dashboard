<x-guest-layout>
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
          <!-- /Left Text -->
          <div class="d-none d-lg-flex col-lg-7 p-0">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
              <img
                src="{{ asset('assets/img/illustrations/auth-login-illustration-light.png') }}"
                alt="auth-login-cover"
                class="img-fluid my-5 auth-illustration"
                />
              <img
                src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}"
                alt="auth-login-cover"
                class="platform-bg"
              />
            </div>
          </div>
          <!-- /Left Text -->

          <!-- Login -->
          <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4 bg-white">
            <div class="w-px-400 mx-auto">
              <!-- Logo -->
                <div class="app-brand mb-4">
                    <a href="#" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo"></span>
                    </a>
                </div>
            <img src="/assets/logo.png" class="mx-auto my-5" width="200px" alt="Emec" />
            <!-- /Logo -->
            {{-- <h3 class="mb-1 fw-bold">Welcome 👋</h3> --}}
            {{-- <p class="mb-4">Log in to your account</p> --}}
            <form id="formAuthentication" class="mb-3" action="{{route('login')}} " method="POST">
              @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password </label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    {{-- <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span> --}}
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">
                    Connecter
                </button>
              </form>
            </div>
          </div>
          <!-- /Login -->
        </div>
      </div>
</x-guest-layout>
