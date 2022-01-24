<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header-container{
            
            align-items: center;
            margin: 10px 0;
        }
        .header-ul{
            display: flex;
            justify-content: center;
            align-items: center;
            list-style-type: none;
        }
        .header-li{
            display: inline;
            padding: 0 30px;
        }
        .header-img-container{
            height: 300px;
            width: 100%;
            background-color: green;
        }
        .header-img-container img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }
    </style>
</head>
    <header>
        <div class="header-container">
            <ul class="header-ul">
                
                    <img src="{{asset('storage/assets/dc-logo.png')}}">
                
                <li class="header-li">CHARACTERS</li>
                <li class="header-li">COMICS</li>
                <li class="header-li">MOVIES</li>
                <li class="header-li">TV</li>
                <li class="header-li">GAMES</li>
                <li class="header-li">COLLECTIBLES</li>
                <li class="header-li">VIDEOS</li>
                <li class="header-li">FANS</li>
                <li class="header-li">NEWS</li>
                <li class="header-li">SHOP</li>
            </ul>
        </div>
        <div class="header-img-container">
            <img src="{{asset('storage/assets/jumbotron.jpg')}}" alt="">
        </div>
    </header>
</html>