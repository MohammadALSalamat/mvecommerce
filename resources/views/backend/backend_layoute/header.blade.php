 
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
 <div class="navbar-wrapper">
   <div class="navbar-header">
     <ul class="flex-row nav navbar-nav">
       <li class="mr-auto nav-item mobile-menu d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
           href="#"><i class="ft-menu font-large-1"></i></a></li>
       <li class="mr-auto nav-item">
         <a class="navbar-brand" href="{{ route('admin') }}">
           <img class="brand-logo" alt="modern admin logo" src="{{ asset('app-assets/images/logo/logo.png') }}">
           <h3 class="brand-text" style="font-size: 18px">{{ auth('admin')->user()->full_name }}</h3>
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
   {{-- <div class="navbar-container content">
     <div class="collapse navbar-collapse" id="navbar-mobile">
       <ul class="float-left mr-auto nav navbar-nav">
         <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
               class="ficon ft-maximize"></i></a></li>
         <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i
               class="ficon ft-search"></i></a>
         </li>
       </ul>
       <ul class="float-right nav navbar-nav">
         @if (Config::get('app.locale') == 'en')
         <li class="dropdown dropdown-user nav-item">
           <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
             <span class="mr-1">Hello,
               <span class="user-name text-bold-700">{{ auth('admin')->user()->full_name }}</span>
              </span>
              <span class="avatar avatar-online">
                <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span>
           </a>
           
         </li>
         @else
         <li class="dropdown dropdown-user nav-item">
          <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
            <span class="mr-1">??????????,
              <span class="user-name text-bold-700">????????</span>
             </span>
             <span class="avatar avatar-online">
               <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i>
              ?????????? ????????</a>
            <a class="dropdown-item" href="#"><i class="ft-mail"></i> ??????????</a>
            <a class="dropdown-item" href="#"><i class="ft-check-square"></i> ??????????????</a>
            <a class="dropdown-item" href="#"><i class="ft-message-square"></i> ??????????</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> ?????????? ????????</a>
          </div>
        </li>  
         @endif
         <li class="dropdown dropdown-language nav-item">
           <a class=" nav-link" href="{{ route('lang.switch','en') }}">English</a>
         </li>
         <li class="dropdown dropdown-language nav-item">
           <a class=" nav-link" href="{{ route('lang.switch','ar') }}">Arabic</a>
         </li>
         <li class="dropdown dropdown-notification nav-item">
           <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
             <span class="badge badge-pill badge-default badge-danger badge-up badge-glow">5</span>
           </a>
           <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
             <li class="dropdown-menu-header">
               <h6 class="m-0 dropdown-header">
                 <span class="grey darken-2">Notifications</span>
               </h6>
               <span class="float-right m-0 notification-tag badge badge-default badge-danger">5 New</span>
             </li>
             <li class="scrollable-container media-list w-100">
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i>
                   </div>
                   <div class="media-body">
                     <h6 class="media-heading">You have new order!</h6>
                     <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer
                       elit.</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left align-self-center"><i
                       class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                   <div class="media-body">
                     <h6 class="media-heading red darken-1">99% Server load</h6>
                     <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left align-self-center"><i
                       class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                   <div class="media-body">
                     <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                     <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i>
                   </div>
                   <div class="media-body">
                     <h6 class="media-heading">Complete the task</h6>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                   <div class="media-body">
                     <h6 class="media-heading">Generate monthly report</h6>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                     </small>
                   </div>
                 </div>
               </a>
             </li>
             <li class="dropdown-menu-footer"><a class="text-center dropdown-item text-muted"
                 href="javascript:void(0)">Read all notifications</a></li>
           </ul>
         </li>
         <li class="dropdown dropdown-notification nav-item">
           <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
           <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
             <li class="dropdown-menu-header">
               <h6 class="m-0 dropdown-header">
                 <span class="grey darken-2">Messages</span>
               </h6>
               <span class="float-right m-0 notification-tag badge badge-default badge-warning">4 New</span>
             </li>
             <li class="scrollable-container media-list w-100">
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left">
                     <span class="avatar avatar-sm avatar-online rounded-circle">
                       <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png') }}"
                         alt="avatar"><i></i></span>
                   </div>
                   <div class="media-body">
                     <h6 class="media-heading">Margaret Govan</h6>
                     <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left">
                     <span class="avatar avatar-sm avatar-busy rounded-circle">
                       <img src="{{ asset('app-assets/images/portrait/small/avatar-s-2.png') }}"
                         alt="avatar"><i></i></span>
                   </div>
                   <div class="media-body">
                     <h6 class="media-heading">Bret Lezama</h6>
                     <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left">
                     <span class="avatar avatar-sm avatar-online rounded-circle">
                       <img src="{{ asset('app-assets/images/portrait/small/avatar-s-3.png') }}"
                         alt="avatar"><i></i></span>
                   </div>
                   <div class="media-body">
                     <h6 class="media-heading">Carie Berra</h6>
                     <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                     </small>
                   </div>
                 </div>
               </a>
               <a href="javascript:void(0)">
                 <div class="media">
                   <div class="media-left">
                     <span class="avatar avatar-sm avatar-away rounded-circle">
                       <img src="{{ asset('app-assets/images/portrait/small/avatar-s-6.png') }}"
                         alt="avatar"><i></i></span>
                   </div>
                   <div class="media-body">
                     <h6 class="media-heading">Eric Alsobrook</h6>
                     <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                     <small>
                       <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                     </small>
                   </div>
                 </div>
               </a>
             </li>
             <li class="dropdown-menu-footer"><a class="text-center dropdown-item text-muted"
                 href="javascript:void(0)">Read all messages</a></li>
           </ul>
         </li>
       </ul>
     </div>
   </div> --}}
 </div>
</nav>


