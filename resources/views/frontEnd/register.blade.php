@extends('layouts.frontEnd.guest')
@section('guest-content')
    <form action="{{ route('customer-registration') }}" method="POST" class="w-full space-y-6">
        @csrf
        <div>
            <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name

                @if ($errors->has('full_name'))
                    <span class="text-xs text-red-500">{{ $errors->first('full_name') }}</span>
                @endif

            </label>
            {{-- <input type="text" id="full_name" name="full_name" class="mt-1 block w-full px-3 py-2 bg-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your full name"> --}}
            <input type="text" id="last_name" name="full_name"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Your Full Name" required />
        </div>
        <div>
            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number

                @if ($errors->has('phone_number'))
                    <span class="text-xs text-red-500">{{ $errors->first('phone_number') }}</span>
                @endif


            </label>
            <input type="text" id="phone_number" name="phone_number"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Your  Phone Number " required />
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password

                @if ($errors->has('password'))
                    <span class="text-xs text-red-500">{{ $errors->first('password') }}</span>
                @endif


            </label>
            <input type="password" id="password" name="password"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Your password " required />
        </div>
        <div class="flex justify-between">
            <div class="flex p-2">
                <input type="checkbox" id="remember_me" name="remember_me"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember Password</label>
            </div>
            <div class="text-sm text-center">
                Already have an account? <a href="{{ route('customer-login') }}"
                    class="text-blue-600 hover:text-blue-500">Login</a>
            </div>
        </div>
        <div>
            <button type="submit"
                class="w-full  text-white py-2 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                style="background-color: #1c70cd">Create Account</button>
        </div>
    </form>
@endsection
