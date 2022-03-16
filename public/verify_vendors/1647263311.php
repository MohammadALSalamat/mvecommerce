@extends('Front.main-desgin')
@section('mytitle','Contact Us')

@section('content')
 <div class="content-block stick-to-footer">
        <div class="container-bg with-bg container-fluid" data-style="background-image: url(storage/{{ $contactDetails->backgroundsection }});">
            <div class="container-bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-item-title">
                                <h1 class="text-center texttransform-none">DownLoad Page</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-container-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                                <!-- Breadcrumb NavXT 5.7.1 -->
                                <span property="itemListElement" typeof="ListItem">
                                    <a property="item" typeof="WebPage" title="" href="" class="home"><span property="name">Home</span></a>
                                    <meta property="position" content="1" />
                                </span>
                                &gt; <span property="itemListElement" typeof="ListItem"><span property="name">DownLoad Page</span><meta property="position" content="2" /></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
.general {
  position: relative;
}

.image,
.image1,
.image2,
.image3,
.image4,
.image5,
.image6{
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.general:hover .overlay {
  opacity: 1;
}
        </style>
        <div class="general">
          <img src="{{asset('storage/pdfs_images/general.png')}}" alt="Avatar" class="image">
          <div class="overlay">Gerneral Profile</div>
        </div>
        <div class="event">
          <img src="{{asset('storage/pdfs_images/event.jpg')}}" alt="Avatar" class="image1">
          <div class="overlay">Event Profile</div>
        </div>
        <div class="branding">
          <img src="{{asset('storage/pdfs_images/branding.jpg')}}" alt="Avatar" class="image2">
          <div class="overlay">Gerneral Profile</div>
        </div>
        <div class="pr">
          <img src="{{asset('storage/pdfs_images/pr.jpg')}}" alt="Avatar" class="image3">
          <div class="overlay">Gerneral Profile</div>
        </div>
        <div class="media">
          <img src="{{asset('storage/pdfs_images/media_buying.jpg')}}" alt="Avatar" class="image4">
          <div class="overlay">Gerneral Profile</div>
        </div>
        <div class="marketing">
          <img src="{{asset('storage/pdfs_images/marketing.jpg')}}" alt="Avatar" class="image5">
          <div class="overlay">Gerneral Profile</div>
        </div>
        <div class="production">
          <img src="{{asset('storage/pdfs_images/production.jpg')}}" alt="Avatar" class="image6">
          <div class="overlay">Gerneral Profile</div>
        </div>
</div>

@endsection