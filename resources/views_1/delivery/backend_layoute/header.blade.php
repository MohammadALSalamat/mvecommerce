<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
 <div class="navbar-wrapper">
   <div class="navbar-header">
     <ul class="flex-row nav navbar-nav">
       <li class="mr-auto nav-item mobile-menu d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
           href="#"><i class="ft-menu font-large-1"></i></a></li>
       <li class="mr-auto nav-item">
         <a class="navbar-brand" href="{{ route('delivery') }}">
           <img class="brand-logo" alt="modern admin logo" src="{{ asset('app-assets/images/logo/logo.png') }}">
           <h3 class="brand-text" style="font-size: 18px">{{ auth('delivery')->user()->full_name }}</h3>
         </a>
       </li>
       <li class="float-right nav-item d-none d-md-block"><a class="pr-0 nav-link modern-nav-toggle"
           data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white"
             data-ticon="ft-toggle-right"></i></a></li>
       <li class="nav-item d-md-none">
         <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
             class="la la-ellipsis-v"></i></a>
       </li>
     </ul>
   </div>
 </div>
</nav>


