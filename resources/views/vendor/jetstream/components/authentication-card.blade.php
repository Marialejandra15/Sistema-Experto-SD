<div class="flex justify-center h-screen"> <div class="hidden bg-cover md:block lg:w-2/3"
        style="background-image: url({{ asset('images/bg/glasses-1052010_1920.jpg') }})">
        <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
            <div>
                @if(Route::currentRouteName() == 'login')
                <h2 class="text-4xl font-bold text-white">Ingresa a tu plataforma!</h2>

                <p class="max-w-xl mt-3 text-gray-300">
                    SmileMakers es una plataforma didactica para la enseñanza de niños con sindrome de Down, ingresa para poder ver nuestros cursos
                    <b>¿No tienes una cuenta?</b>
                </p>
                <a class="text-white hover:underline hover:text-gray-100" href="{{ route('register') }}">Registrate gratis</a>
                @else

                <h2 class="text-4xl font-bold text-white">Crea una cuenta!</h2>

                <p class="max-w-xl mt-3 text-gray-300">
                    Create una cuenta de una manera rapida, sencilla y gratis.
                    <b>¿Ya tienes una cuenta?</b>
                </p>
                <a class="text-white hover:underline hover:text-gray-100" href="{{ route('login') }}">Ingresa por aca</a>
                @endif
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center w-full max-w-md mx-auto overflow-y-auto lg:w-2/6">
        <div class="flex-1 pt-10">
            <div class="flex flex-col items-center w-full py-4">
                <div>
                    {{ $logo }}
                </div>
                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
