<x-guest-layout>
    <div class="container mx-auto">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-2xl">
                <!-- Col -->
                <div class="w-full shadow-2xl h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('/images/ft.jpg')"></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none border-gray-800">
                    <h3 class="pt-4 text-2xl text-center"><strong>Fakultas Teknik UNSRI</strong></h3>
                    <form method="POST" action="{{ route('login') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded ">
                        @csrf
                    
                        <div class="mb-4">
                            <x-jet-label value="{{ __('Email') }}" />
                            <x-jet-input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outlinel" type="email" name="email" :value="old('email')" required autofocus />
                            <x-jet-input-error for="email" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-jet-label value="{{ __('Password') }}" />
                            <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            <x-jet-input-error for="password" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-checkbox leading-tight" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                                {{ __('Log In') }}
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</x-guest-layout>