@extends('layouts.app')
@section('content')
<div class="flex container-fluid h-screen mx-auto sm:flex-col md:flex-row font-light w-full bg-grey-lighter">
    <div class="bg-grey-lighter text-dark p-4 md:w-2/5 lg:w-3/5 xl:w-1/4 rounded-lg shadow-lg center border-all border-grey-darker">
        <h4>Authenticate</h4>
        <form id="loginForm" class="mt-3" action="{{ route('post-sign-in') }}" method="post" autocomplete="off">

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-dark font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                        Email
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="bg-grey-light appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-grey" id="email" type="email" name="email" placeholder="Email">
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-dark font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                        Password
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="bg-grey-light appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-grey" id="password" name="password" type="password" placeholder="Password">
                </div>
            </div>

            <div class="md:flex md:items-center mb-2">
                <div class="md:w-1/5"></div>
                <label class="md:w-4/5 block text-dark font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="remember">
                    <span class="text-sm">
                    Remember me
                  </span>
                </label>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/5"></div>
                <div class="md:w-4/5">
                    <button type="submit" class="shadow bg-blue-dark hover:bg-blue-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Sign In
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection