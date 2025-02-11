<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                      
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <!-- <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            
                            
                            
                        </div> -->

                        <div class="col-md-8">
        <!-- Contenu principal ici -->
        <!-- Section Articles récents -->


        <h2 class="mb-4">Articles récents</h2>
        <div class="row">

          <!-- Article 1 -->
          <div class="col-md-6">
            <div class="card">
              <img src="path_to_image1.jpg" class="card-img-top" alt="Introduction à Bootstrap">
              <div class="card-body">
                <h5 class="card-title">Introduction à Bootstrap</h5>
                <p class="card-text">Découvrez les bases de Bootstrap et comment il peut faciliter le développement de
                  votre blog.</p>
                <a href="#" class="btn btn-primary">Lire plus</a>
              </div>
            </div>
          </div>

          <!-- Article 2 -->
          <div class="col-md-6">
            <div class="card">
              <img src="path_to_image2.jpg" class="card-img-top" alt="Design responsif avec Bootstrap">
              <div class="card-body">
                <h5 class="card-title">Design responsif avec Bootstrap</h5>
                <p class="card-text">Apprenez à rendre votre blog adaptatif à toutes les tailles d'écran avec les
                  grilles de Bootstrap.</p>
                <a href="#" class="btn btn-primary">Lire plus</a>
              </div>
            </div>
          </div>

          <!-- Article 3 -->
          <div class="col-md-6">
            <div class="card">
              <img src="path_to_image3.jpg" class="card-img-top" alt="Composants Bootstrap pour un blog">
              <div class="card-body">
                <h5 class="card-title">Composants Bootstrap pour un blog</h5>
                <p class="card-text">Découvrez les composants essentiels de Bootstrap pour enrichir les fonctionnalités
                  de votre blog.</p>
                <a href="#" class="btn btn-primary">Lire plus</a>
              </div>
            </div>
          </div>

          <!-- Article 4 -->
          <div class="col-md-6">
            <div class="card">
              <img src="path_to_image4.jpg" class="card-img-top" alt="Personnaliser Bootstrap pour votre blog">
              <div class="card-body">
                <h5 class="card-title">Personnaliser Bootstrap pour votre blog</h5>
                <p class="card-text">Apprenez les techniques pour personnaliser Bootstrap et lui donner un look unique
                  pour votre blog.</p>
                <a href="#" class="btn btn-primary">Lire plus</a>
              </div>
            </div>
          </div>

        </div>


      </div>

                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
      
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
