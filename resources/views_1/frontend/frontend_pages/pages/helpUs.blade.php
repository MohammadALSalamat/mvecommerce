@extends('frontend.frontend_layout.main_desgin')
@section('mytitle','Help Us To Imporove')

@section('content')

<main class="main">
    <!-- Start of Page Header -->
    <div class="container">
    <div class="page-header" style="background:url('/storage/photos/1/Artboard 1 copy-100.jpg');background-size:cover">
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
                        <div class="col-md-12 pl-lg-8 mb-8 ">
                            
                            @auth
                            <style>
                               
                            
                                .main1 {
                                    width: 100%;
                                    height:800px;
                                    display: inline-block;
                                    font-size: 15px;
                                    vertical-align: top;
                                }
                            
                               
                            
                                h2,
                                h3 {
                                    margin: 0;
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
                                    height: 600px;
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
                                <div class="main1">
                                    <header>
                                        <img src="{{ asset('front-style/assets/images/itajer_logo.png') }}" style="width:80px;border-radius:50%;border:3px solid red;padding: 10px 0px" alt="">
                                        <div style="display: inline-block;
                                        line-height: normal;
                                        vertical-align: middle;">
                                            <h2>Send Us your thoughts</h2>
                                            <h3>How Can we imporove the website.</h3>
                                        </div>
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
                                    </header>
                                    <ul id="chat">
                                        @if(!empty($posts))
                                        @foreach ($posts as $post)
                                        @php
                                            $created_at = explode(' ',$post->created_at);
                                            $user = \App\Models\User::where('id',$post->user_id)->first();
                                        @endphp
                                        <li class="you">
                                            <div class="entete">
                                                <span class="status green"></span>
                                                <h2>{{ $user->full_name }}</h2>
                                                <h3>{{ $created_at[0] }},AT {{ $created_at[1] }}</h3>
                                            </div>
                                            <div class="triangle"></div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <div class="message">
                                                        {{ $post->content }}
                                                    </div>
                                                </div>
                                                @if ($user->id == auth()->user()->id)
                                                <div class="col-3">
                                                    <a href="{{ route('edit_post',$post->id) }}"><i class="fa fa-check-circle" style="color: #58b666"></i> Edit Post</a><br>
                                                    <a href="{{ route('delete_post',$post->id) }}"><i class="fa fa-trash-alt" style="color: #c02409"></i> Delete Post</a>
                                                </div>
                                                @endif
                                            </div>
                                            <div style="display:flex">
                                            <a class="like" href="javascript:valid(0)" data-type="like" data-userid="{{ $current_user->id }}" data-postid="{{ $post->id }}"  style="margin-right:10px;padding:10px 25px;text-align:center;color:blue"> 
                                                <i class="fa fa-thumbs-up"></i>
                                                <div class="text"><span class="likescount{{ $post->id }}" data-id = "likescount{{ $post->id }}">{{ \App\Models\likeDislike::where('help_us_id',$post->id)->where('likes',1)->count() }}</span></div>
                                            </a>
                                            <a href="javascript:valid(0)" class="like" data-userid="{{ $current_user->id }}" data-postid="{{ $post->id }}" data-type="dislike" style="padding:10px 25px;text-align:center"> <i class="fa fa-thumbs-down"></i>
                                                <div class="text"><span class="dislikecount{{ $post->id }}">{{ \App\Models\likeDislike::where('help_us_id',$post->id)->where('dislikes',1)->count() }}</span></div>
                                            </a>
                                            </div>
                                        </li>
                                        @endforeach
                                        @else
                                        <strong>Be the first User gives us a help to imporove.</strong>
                                        @endif
                                    </ul>
                                    <footer>
                                        <form action="{{ route('helpusform') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <textarea name="message" placeholder="Type your message"></textarea>
                                            <button class="btn btn-primary" type="submit">Send Now</a>
                                        </form>
                                    </footer>
                                </div>
                            </div>
                            @else
                            <strong style="color: red;"> Please Login First to submit and review the comments </strong><a href="{{ route('loginForm') }}"> Click Here</a> 
                            @endauth
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
<script>
        $(document).on('click', '.like', function(e) {
        e.preventDefault();
        // get the data from products
            var Url = "{{ route('like_submition') }}";
            var post_type = $(this).data('type');
            var user_id = $(this).data('userid');
            var post_id = $(this).data('postid');

            // start sending info using ajax
            var token = "{{ csrf_token() }}";
            $.ajax({
                url: Url,
                type: "POST",
                dataType: "JSON",
                data: {
                    post_type: post_type,
                    user_id: user_id,
                    post_id: post_id,
                    _token: token,
                },
                success: function(data) {
                    $('.likescount'+post_id).html(data['liketotal']);
                    $('.dislikecount'+post_id).html(data['disliketotal']);
                }
            });
        });

</script>

@endsection