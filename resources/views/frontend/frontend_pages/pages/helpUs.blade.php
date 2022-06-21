@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Help Us To Imporove')

@section('content')

<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
        <div class="container">
            <h1 class="page-title mb-0 text-white">Help Us </h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <section class="boost-section pt-10 pb-10">
                <div class="container mt-10 mb-9">
                    <div class="row align-items-center mb-10">
                        <div class="col-md-12 pl-lg-8 mb-8">
                            <h4 class="title text-left">Help Us To Imporove</h4>
                            <p class="mb-6">
                                Kindly fill the form below to help us to imporove the website as you like,
                                <br>
                                give us your thoughts how can we make it easier for you to get what you want.
                            </p>
                            <style>
                                .aside {
                                    width: 25%;
                                    height:560px;
                                    background-color: #3b3e49;
                                    display: inline-block;
                                    font-size: 15px;
                                    vertical-align: top;
                                }
                            
                                .main1 {
                                    width: 70%;
                                    height:500px;
                                    display: inline-block;
                                    font-size: 15px;
                                    vertical-align: top;
                                }
                            
                                .aside header {
                                    padding: 30px 20px;
                                }
                            
                                .aside input {
                                    width: 100%;
                                    height: 50px;
                                    line-height: 50px;
                                    padding: 0 50px 0 20px;
                                    background-color: #5e616a;
                                    border: none;
                                    border-radius: 3px;
                                    color: #fff;
                                    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_search.png);
                                    background-repeat: no-repeat;
                                    background-position: 170px;
                                    background-size: 40px;
                                }
                            
                                .aside input::placeholder {
                                    color: #fff;
                                }
                            
                                .aside ul {
                                    padding-left: 0;
                                    margin: 0;
                                    list-style-type: none;
                                    height: 350px;
                                }
                            
                                .aside li {
                                    padding: 10px 0;
                                }
                            
                                .aside li:hover {
                                    background-color: #5e616a;
                                }
                            
                                h2,
                                h3 {
                                    margin: 0;
                                }
                            
                                .aside li img {
                                    border-radius: 50%;
                                    margin-left: 20px;
                                    margin-right: 8px;
                                }
                            
                                .aside li div {
                                    display: inline-block;
                                    vertical-align: top;
                                    margin-top: 12px;
                                }
                            
                                .aside li h2 {
                                    font-size: 14px;
                                    color: #fff;
                                    font-weight: normal;
                                    margin-bottom: 5px;
                                }
                            
                                .aside li h3 {
                                    font-size: 12px;
                                    color: #7e818a;
                                    font-weight: normal;
                                }
                            
                                .status {
                                    width: 8px;
                                    height: 8px;
                                    border-radius: 50%;
                                    display: inline-block;
                                    margin-right: 7px;
                                }
                            
                                .green {
                                    background-color: #58b666;
                                }
                            
                                .orange {
                                    background-color: #ff725d;
                                }
                            
                                .blue {
                                    background-color: #6fbced;
                                    margin-right: 0;
                                    margin-left: 7px;
                                }
                            
                                .main1 header {
                                    height: 100px;
                                    padding: 30px 20px 30px 40px;
                                }
                            
                                .main1 header>* {
                                    display: inline-block;
                                    vertical-align: top;
                                }
                            
                                .main1 header img:first-child {
                                    border-radius: 50%;
                                }
                            
                                .main1 header img:last-child {
                                    width: 24px;
                                    margin-top: 8px;
                                }
                            
                                .main1 header div {
                                    margin-left: 10px;
                                    margin-right: 145px;
                                }
                            
                                .main1 header h2 {
                                    font-size: 16px;
                                    margin-bottom: 5px;
                                }
                            
                                .main1 header h3 {
                                    font-size: 14px;
                                    font-weight: normal;
                                    color: #7e818a;
                                }
                            
                                #chat {
                                    padding-left: 0;
                                    margin: 0;
                                    list-style-type: none;
                                    overflow-y: scroll;
                                    height: 300px;
                                    border-top: 2px solid #fff;
                                    border-bottom: 2px solid #fff;
                                }
                            
                                #chat li {
                                    padding: 10px 30px;
                                }
                            
                                #chat h2,
                                #chat h3 {
                                    display: inline-block;
                                    font-size: 13px;
                                    font-weight: normal;
                                }
                            
                                #chat h3 {
                                    color: #bbb;
                                }
                            
                                #chat .entete {
                                    margin-bottom: 5px;
                                }
                            
                                #chat .message {
                                    padding: 20px;
                                    color: #fff;
                                    line-height: 25px;
                                    max-width: 90%;
                                    display: inline-block;
                                    text-align: left;
                                    border-radius: 5px;
                                }
                            
                                #chat .me {
                                    text-align: right;
                                }
                            
                                #chat .you .message {
                                    background-color: #58b666;
                                }
                            
                                #chat .me .message {
                                    background-color: #6fbced;
                                }
                            
                                #chat .triangle {
                                    width: 0;
                                    height: 0;
                                    border-style: solid;
                                    border-width: 0 10px 10px 10px;
                                }
                            
                                #chat .you .triangle {
                                    border-color: transparent transparent #58b666 transparent;
                                    margin-left: 15px;
                                }
                            
                                #chat .me .triangle {
                                    border-color: transparent transparent #6fbced transparent;
                                    margin-left: 375px;
                                }
                            
                                .main1 footer {
                                    height: 155px;
                                    padding: 20px 30px 10px 20px;
                                }
                            
                                .main1 footer textarea {
                                    resize: none;
                                    border: 1px solid #ccc;
                                    display: block;
                                    width: 100%;
                                    height: 80px;
                                    border-radius: 3px;
                                    padding: 20px;
                                    font-size: 13px;
                                    margin-bottom: 13px;
                                }
                            
                                .main1 footer textarea::placeholder {
                                    color: #ddd;
                                }
                            
                                .main1 footer img {
                                    height: 30px;
                                    cursor: pointer;
                                }
                            
                                .main1 footer a {
                                    text-decoration: none;
                                    text-transform: uppercase;
                                    font-weight: bold;
                                    color: #6fbced;
                                    vertical-align: top;
                                    margin-left: 333px;
                                    margin-top: 5px;
                                    display: inline-block;
                                }
                            </style>
                            <div>
                                <div class="aside">
                                    <header>
                                        <input type="text" placeholder="search">
                                    </header>
                                    <ul>
                                        <li>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                                            <div>
                                                <h2>Prénom Nom</h2>
                                                <h3>
                                                    <span class="status green"></span>
                                                    Online
                                                </h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main1">
                                    <header>
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                                        <div>
                                            <h2>Send Us your thoughts</h2>
                                            <h3>How Can we imporove the website.</h3>
                                        </div>
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
                                    </header>
                                    <ul id="chat">
                                        <li class="you">
                                            <div class="entete">
                                                <span class="status green"></span>
                                                <h2>Vincent</h2>
                                                <h3>10:12AM, Today</h3>
                                            </div>
                                            <div class="triangle"></div>
                                            <div class="message">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                            </div>
                                            <div style="display:flex">
                                            <a href="#" style="margin-right:10px;border:1px solid #ccc;border-radius:50%; padding:20px"> <i class="fa fa-thumbs-up"></i>
                                                <div class="text">Like <br>+<span id="value">99</span></div>
                                            </a>
                                            <a href="#"> <i class="fa fa-thumbs-down"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <form action="{{ route('helpusform') }}" method="POST">
                                            <textarea placeholder="Type your message"></textarea>
                                            <button class="btn btn-primary" type="submit">Send Now</a>
                                        </form>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

@endsection