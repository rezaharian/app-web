

<nav class="navbar navbar-expand-lg navbar-primary bg-primary navbar-dark" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
    <div class="container">

    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li>
             <img src="../../AdminLTE-3.2.0/dist/img/logobulet.png" alt="logobulet" width="40" class="brand-image img-circle elevation-3">
            </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
       
        </ul>
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 text-light">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring focus:border-blue-300 text-decoration-none">
                    <i class="fas fa-tachometer-alt mr-2"></i> 
                </a>
            @else
                <a href="{{ route('login') }}" class="text-white me-3 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring focus:border-blue-300 text-decoration-none">
                    <i class="fas fa-sign-in-alt mr-2"></i> 
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring focus:border-blue-300 text-decoration-none">
                        <i class="fas fa-user-plus mr-2"></i> 
                    </a>
                @endif
            @endauth
        </div>
    @endif
      </div>
    </div>
</div>

  </nav>
{{-- 
<div class="mb-0 fixed-top">
    <div class="bg-primary header-atas pb-0">
        <nav class="navbar navbar-expand-sm  mt-0 navbar-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <img src="../../AdminLTE-3.2.0/dist/img/logobulet.png" alt="logobulet" width="40" class="brand-image img-circle elevation-3">

                    <nav class="navbar navbar-expand-lg bg-transparant text-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                              </li>
                            </ul>
                      
                          </div>
                        </div>
                      </nav>
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 text-light">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring focus:border-blue-300 text-decoration-none">
                                        <i class="fas fa-tachometer-alt mr-2"></i> 
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="text-white me-3 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring focus:border-blue-300 text-decoration-none">
                                        <i class="fas fa-sign-in-alt mr-2"></i> 
                                    </a>
                    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring focus:border-blue-300 text-decoration-none">
                                            <i class="fas fa-user-plus mr-2"></i> 
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </ul>
                    
                    
                </div>
            </div>
        </nav>
        
    </div>
</div> --}}


