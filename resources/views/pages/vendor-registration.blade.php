


@extends('layouts.frontEnd.app')
@section('front-end-main')

<style>
    .form-container {
        max-width: 900px;
        margin: 0 auto;
    }
    .preview-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
<div class="form-container p-4 mt-8 bg-white rounded-lg xl:p-6">
    <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl text-center"> </h1>

    <form action="{{ route('vendor.register') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="preview-container">
            <img id="imagePreview" src="{{ asset('/profile/p_image.png') }}" alt="Image Preview" class="object-fill rounded-full" style="width: 200px; height: 200px;">
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-sm text-gray-700 capitalize">Profile Photo</label>
            <input type="file"  name="photo" accept="image/*" class="block w-full mt-2" onchange="previewImage(event)">
            @error('photo')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-8">
            <div>
                <label for="first_name" class="block text-sm text-gray-700 capitalize">First Name</label>
                <input id="first_name" name="first_name" type="text" placeholder="Arthur" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('first_name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="middle_name" class="block text-sm text-gray-700 capitalize">Middle Name</label>
                <input id="middle_name" name="middle_name" type="text" placeholder="Melo" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('middle_name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm text-gray-700 capitalize">Last Name</label>
                <input id="last_name" name="last_name" type="text" placeholder="Juma" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('last_name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="phone_number" class="block text-sm text-gray-700 capitalize">Phone Number</label>
                <input id="phone_number" name="phone_number" type="text" placeholder="076 *****" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('phone_number')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm text-gray-700 capitalize">Email</label>
                <input id="email" name="email" type="email" placeholder="example@gmail.com" required class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm text-gray-700 capitalize">Tin Number </label>
                <input  name="tin_number" type="tin_number" placeholder=" tin no  " required class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('tin_number')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>


            <div class="mt-4 ">
                <button  style="background-color: #2759A9; " type="submit" class="mt-4 px-4 py-2 w-full text-white rounded-md hover:bg-blue-500">Register</button>

            </div>

        </div>


    </form>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>


@endsection
