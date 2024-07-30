@extends('layouts.frontEnd.guest')
@section('guest-content')
    <form action="{{ route('customer-login-action') }}" method="POST" class="w-full space-y-6 ">
        @csrf

        <div>
            @if ($errors->has('phone_number'))
                <span class="text-xs text-red-500">{{ $errors->first('phone_number') }}</span>
            @endif

            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number
            </label>
            <input type="text" id="phone_number" name="phone_number"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Your  Phone Number " required />

        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Your password " required />

        </div>
        <div class="flex justify-between">
            <div class="flex p-2">
                <input type="checkbox" id="remember_me" name="remember_me"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember Password</label>
            </div>
            {{-- <div class="text-sm text-center">
                <a href="/login" class="text-blue-600 hover:text-blue-500" style="color: #F6AE42; "> Forget Password ? </a>
            </div> --}}
            <div class="text-sm text-center">
                I dont't have account ? <button
                    class="text-blue-600 hover:text-blue-500">Register</button>
            </div>

        </div>

        <div>
            {{-- <button type="submit"
                class="w-full  text-white py-4 rounded-md shadow-sm hover:bg-blue-700  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                style="background-color: #1c70cd"> Login
            </button> --}}
            <a href="{{ route('customer-welcome-page') }}"
                class="w-full block text-center  text-white py-4 rounded-md shadow-sm hover:bg-blue-700  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                style="background-color: #1c70cd"> Login
            </a>
        </div>
    </form>

@endsection
