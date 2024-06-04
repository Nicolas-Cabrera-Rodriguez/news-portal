@extends('layouts.app')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap  justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">{{ __('Register') }}
                    </div>

                    <div class="flex-auto p-6">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="flex flex-wrap  mb-3">
                                <label for="name"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end">{{ __('Name') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="name" type="text"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal  text-gray-800 border border-gray-200 rounded @error('name') bg-red-700 @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-3">
                                <label for="email"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end">{{ __('Email Address') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="email" type="email"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal  text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-3">
                                <label for="password"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end">{{ __('Password') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="password" type="password"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal  text-gray-800 border border-gray-200 rounded @error('password') bg-red-700 @enderror"
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-3">
                                <label for="password-confirm"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <input id="password-confirm" type="password"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-3">
                                <label for="role"
                                    class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end">{{ __('Role') }}</label>

                                <div class="md:w-1/2 pr-4 pl-4">
                                    <select id="role"
                                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal text-gray-800 border border-gray-200 rounded @error('role') bg-red-700 @enderror"
                                        name="role" required>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Editor">Editor</option>
                                        <!-- Agrega más opciones de roles según sea necesario -->
                                    </select>

                                    @error('role')
                                        <span class="hidden mt-1 text-sm text-red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap  mb-0">
                                <div class="md:w-1/2 pr-4 pl-4 md:mx-1/3">
                                    <button type="submit"
                                        class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
