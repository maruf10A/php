@extends('frontend.layout.master')
@section('content1')


<div class="header__top__right__auth">
                                <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            {{ __('Log In') }}
                                        </x-responsive-nav-link>
                                </form>
                            </div>




@endsection
    
