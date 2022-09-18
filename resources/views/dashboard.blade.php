@extends('layout1')
@section('judul','Dashboard')
@section('content')
<section class="section">
    <div class="row column1">
        <div class="col-md-6 col-lg-3">
           <div class="full counter_section margin_bottom_30">
              <div class="couter_icon">
                 <div> 
                    <i class="fa fa-user yellow_color"></i>
                 </div>
              </div>
              <div class="counter_no">
                 <div>
                    <p class="total_no">2500</p>
                    <p class="head_couter">Welcome</p>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-3">
           <div class="full counter_section margin_bottom_30">
              <div class="couter_icon">
                 <div> 
                    <i class="fa fa-clock-o blue1_color"></i>
                 </div>
              </div>
              <div class="counter_no">
                 <div>
                    <p class="total_no">123.50</p>
                    <p class="head_couter">Average Time</p>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-3">
           <div class="full counter_section margin_bottom_30">
              <div class="couter_icon">
                 <div> 
                    <i class="fa fa-cloud-download green_color"></i>
                 </div>
              </div>
              <div class="counter_no">
                 <div>
                    <p class="total_no">1,805</p>
                    <p class="head_couter">Collections</p>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-3">
           <div class="full counter_section margin_bottom_30">
              <div class="couter_icon">
                 <div> 
                    <i class="fa fa-comments-o red_color"></i>
                 </div>
              </div>
              <div class="counter_no">
                 <div>
                    <p class="total_no">54</p>
                    <p class="head_couter">Comments</p>
                 </div>
              </div>
           </div>
        </div>
        <!-- graph -->
        <div class="col-md-12">
            <div class="dash_blog">
               <div class="dash_blog_inner">
                  <div class="dash_head">
                     <h3><span><i class="fa fa-comments-o"></i> Updates</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                  </div>
                  <div class="list_cont">
                     <p>User confirmation</p>
                  </div>
                  <div class="msg_list_main">
                     <ul class="msg_list">
                        <li>
                           <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                           <span>
                           <span class="name_user">Herman Beck</span>
                           <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                           <span class="time_ago">12 min ago</span>
                           </span>
                        </li>
                        <li>
                           <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                           <span>
                           <span class="name_user">John Smith</span>
                           <span class="msg_user">On the other hand, we denounce.</span>
                           <span class="time_ago">12 min ago</span>
                           </span>
                        </li>
                        <li>
                           <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                           <span>
                           <span class="name_user">John Smith</span>
                           <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                           <span class="time_ago">12 min ago</span>
                           </span>
                        </li>
                        <li>
                           <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                           <span>
                           <span class="name_user">John Smith</span>
                           <span class="msg_user">On the other hand, we denounce.</span>
                           <span class="time_ago">12 min ago</span>
                           </span>
                        </li>
                     </ul>
                  </div>
                  <div class="read_more">
                     <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
      
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
      
                        You are Logged In
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

