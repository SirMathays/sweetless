@extends('layouts.app')

@section('content')

<transition name="slide" mode="out-in">
    <router-view></router-view>
</transition>

@endsection
