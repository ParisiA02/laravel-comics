@extends('layouts.main-layout')
@section('content')
    <div class="main-container">
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
        <div class="comic-container">
            <a href="{{route('details')}}">
                <img class="immagine" src="{{asset('storage/assets/superman.jpg')}}">
            </a>
            <div class="title-container">
                {{$comic["name"]}}
            </div>
        </div>
    </div>
    <style>
        .main-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #1C1C1C;
        }
        .comic-container{
            height: 200px;
            width: 200px;
            margin: 40px;
            background-color: blue;
        }
        .title-container{
            color: white;
        }
        .immagine{
            width: 100%;
            height: 100%;
            object-fit: cover;
        } 
    </style>
@endsection