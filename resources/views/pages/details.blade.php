@extends('layouts.main-layout')
@section('content')
    <div class="under-header">
        <div class="cover-margin">
            <div class="cover">
                <img src="{{asset('storage/assets/superman3.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="detail-section-container">
        <div class="detail-section">
            <div class="left-column">
                <div class="title">ACTION COMICS #1000: THE DELUX EDITION</div>
                <div class="price">
                    U.S. Price 19.99$
                </div>
                <div class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, modi nostrum quisquam qui cupiditate necessitatibus! Hic debitis ad voluptatibus quas quae doloribus laboriosam eum autem excepturi, voluptatum dolorum ab reiciendis? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur ipsum delectus quis numquam a natus, repellendus ullam est non doloremque labore laboriosam perspiciatis eius, blanditiis autem architecto cum explicabo quasi.
                </div>
            </div>
            <div class="right-column">
                <img src="{{asset('storage/assets/superman.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <style>
        .under-header{
            height: 75px;
            width: 100%;
            background-color: #0282F9;
        }
        .cover-margin{
            margin: 0 auto;
            width: 50%;
        }
        .cover{
            height: 290px;
            width: 200px;
            position: relative;
            top: -230px;
            background-color: blue;
        }
        .cover img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .detail-section-container{
            margin: 0 auto;
            width: 50%;
        }
        .detail-section{
            display: flex;
        }
        .left-column{
            width: 70%;
        }
        .right-column{
            width: 300px;
            height: 250px;
            background-color: blue;
            margin-top: 80px;
            margin-left: 20px;
        }
        .right-column img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .title{
            margin-top: 80px;
            font-size: 30px;
            font-weight: bold;
            color: #003F5E;
        }
        .price{
            height: 40px;
            line-height: 40px;
            width: 100%;
            vertical-align: middle;
            background-color: #55BA59; 
            margin: 10px 0;
        }
        .text{
            font-size: 20px;
            margin-bottom: 70px;
        }
    </style>
@endsection