@extends('admin.layouts.master')
@section('title',__('Admin Dashboard'))
@section('breadcum')
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">{{ __('Home') }}</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Dashboard') }}</li>

                </ol>
            </div>
        </div>

    </div>
</div>
@endsection
@section('maincontent')
<div class="contentbar">
    <!-- Start row -->
    <div class="row">

        <!-- This id quick update -->

        <!-- Start col -->
        <!-- <div class="col-lg-12">

            <div class="alert alert-success alert-dismissible fade show">
        
        
                <span id="update_text">
                  
                </span>
  
                <form action="{{ url("/merge-quick-update") }}" method="POST" 
                class="float-right d-none updaterform">
                    @csrf
                    <input required type="hidden" value="" name="filename">
                    <input required type="hidden" value="" name="version">
                    <button class="btn btn-sm btn-primary-rgba">
                      <i class="feather icon-check-circle"></i> {{__("Update Now")}}
                    </button>
                </form>
       
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
  
            </div>
        </div> -->

        <div class="col-lg-12">

            <!-- Start row -->
            <div class="row">

                <!-- Start col -->
                <!-- insert id="size" in class row align-items-center -->
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center" id="size">
                                <div class="col-6">
                                    <h4>{{ $userss }}</h4>
                                    <p class="font-14 mb-0">{{ __('Users') }}</p>
                                </div> 
                              <div class="col-6 text-right">
                                <a href="{{ route('user.index') }}"><i
                                    class="text-info feather icon-users icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card m-b-30 shadow-sm">
                        <!-- <div class="card-body"> -->
                        <div class="card-body">
                            <!-- <div class="row align-items-center" > -->
                            <div class="row" >
                                <div class="col-6">
                                    <h4>{{ $courses }}</h4>
                                    <p class="font-14 mb-0">{{ __('Courses') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('course.index') }}"><i
                                        class="text-success feather icon-book-open icondashboard"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card m-b-30 shadow-sm">
                        <!-- <div class="card-body"> -->
                        <div class="card-body" style="width: 200px;">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $categories }}</h4>
                                    <p class="font-12 mb-0">{{ __('Categories') }}</p>
                                </div>
                                <!-- <div class="col-6 text-right"> -->
                                <div class="col-6">
                                    <a href="{{ route('category.index') }}"><i
                                        class="text-warning feather icon-aperture icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h4>{{ $coupon }}</h4>
                                    <p class="font-14 mb-0">{{ __('Coupon') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('coupon.index') }}"><i
                                        class="text-secondary feather icon-percent icondashboard"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(isset($zoom_enable) && $zoom_enable == 1)
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $zoom }}</h4>
                                    <p class="font-14 mb-0">{{ __('Zoom Meeting') }}</p>
                                </div>
                                @if(Route::has('zoom.setting'))
                                <div class="col-6 text-right">
                                    <a href="{{ route('zoom.setting') }}"><i
                                        class="text-danger feather icon-radio icondashboard"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if(isset($gsetting) && $gsetting->bbl_enable == 1)
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $bbl }}</h4>
                                    <p class="font-14 mb-0">{{ __('Big Blue') }}</p>
                                </div>
                                @if(Route::has('bbl.setting'))
                                <div class="col-6 text-right">
                                    <a href="{{ route('bbl.setting') }}"><i
                                        class="text-primary feather icon-camera icondashboard"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                @if(isset($gsetting) && $gsetting->jitsimeet_enable == 1)
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $jitsi }}</h4>
                                    <p class="font-12 mb-0">{{ __('JitsiMeeting') }}</p>
                                </div>
                                @if(Route::has('jitsi.dashboard'))
                                <div class="col-6 text-right">
                                    <a href="{{ route('jitsi.dashboard') }}"><i
                                        class="text-success feather icon-video icondashboard"></i></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if(isset($gsetting) && $gsetting->googlemeet_enable == 1)
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $googlemeet }}</h4>
                                    <p class="font-12 mb-0">{{ __('GoogleMeet') }}</p>
                                </div>

                                @if(Route::has('googlemeet.index'))
                                <div class="col-6 text-right">
                                    <a href="{{ route('googlemeet.index') }}"><i
                                        class="text-warning feather icon-radio icondashboard"></i></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $faq }}</h4>
                                    <p class="font-14 mb-0">{{ __('Faq') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('faq.index') }}"><i
                                        class="text-secondary fa fa-question icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $pages }}</h4>
                                    <p class="font-14 mb-0">{{ __('Page') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('page.index') }}"><i
                                        class="text-info feather icon-bookmark icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $blogs }}</h4>
                                    <p class="font-14 mb-0">{{ __('Blog') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('blog.index') }}"><i
                                        class="text-danger feather icon-message-square icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $testimonial }}</h4>
                                    <p class="font-14 mb-0">{{ __('Testimonial') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('testimonial.index') }}"><i
                                        class="text-primary feather icon-shield icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $instructor }}</h4>
                                    <p class="font-14 mb-0">{{ __('Instructor') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('instructor.index') }}"><i
                                        class="text-warning feather icon-user icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $orders }}</h4>
                                    <p class="font-14 mb-0">{{ __('Order') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('order.index') }}"><i
                                        class="text-success feather icon-shopping-bag icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $refund }}</h4>
                                    <p class="font-14 mb-0">{{ __('Refund Order') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('refundorder.index') }}"><i
                                        class="text-secondary  feather icon-shopping-cart icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4>{{ $follower }}</h4>
                                    <p class="font-14 mb-0">{{ __('Followers') }}</p>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('follower.view') }}"><i
                                        class="text-danger  feather icon-user-check icondashboard"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12 col-xl-3 mt-md-3">
                    <div class="card m-b-30 shadow-sm">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">{{ __('Top Users') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="user-slider">
                            @foreach($topuser as $topusers)
                            <div class="user-slider">
                                <div class="user-slider-item">
                                    <div class="card-body text-center">
                                        <span class="action-icon badge badge-primary-inverse">
                                            @if($topusers['user_img'] != null && $topusers['user_img'] !='' && @file_get_contents('images/user_img/'.$topusers['user_img']))

                                                <img src="{{ url('images/user_img/'.$topusers['user_img'])}}" class="dashboard-imgs" alt="">

                                            @else

                                            <img src="{{ Avatar::create($topusers->fname)->toBase64() }}" class="dashboard-imgs" alt="">
                                             @endif

                                            
                                        </span>
                                        <h5>{{ $topusers->fname }}</h5>
                                        <p>{{ $topusers->email }}</p>
                                        <p><span class="badge badge-primary-inverse">{{ __('Verified') }}:{{ $topusers['verified'] }}</span>
                                        </p>
                                       
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-12 border-right">
                                                <h4>{{ date('jS F Y', strtotime($topusers->created_at)) }}</h4>
                                                <p class="my-2">{{ __('Created At') }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-3 mt-md-3">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">{{ __('Top Instructors') }}</h5>
                                </div>
                               
                            </div>
                        </div>
                        <div class="user-slider">
                            @foreach($topinstructor as $topinstructors)
                            <div class="user-slider">
                                <div class="user-slider-item">
                                    <div class="card-body text-center">
                                        <span class="action-icon badge badge-primary-inverse"><img src="{{ Avatar::create($topinstructors->fname)->toBase64() }}"
                                                class="dashboard-imgs" alt=""></span>
                                        <h5>{{ $topinstructors->fname }}</h5>
                                        <p>{{ $topinstructors->email }}</p>
                                        <p><span
                                                class="badge badge-primary-inverse">{{ __('Verified') }}:{{ $topinstructors->verified }}</span>
                                        </p>
                                      
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-12 border-right">
                                                <h4>{{ date('jS F Y', strtotime($topinstructors->created_at)) }}</h4>
                                                <p class="my-2">{{ __('Created At') }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-3 mt-md-3">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">{{ __('Top Courses') }}</h5>
                                </div>
                               
                            </div>
                        </div>
                        <div class="user-slider">
                            @foreach($topcourses as $topcourses)

                            <div class="user-slider">
                                <div class="user-slider-item">
                                    <div class="card-body text-center">
                                        <span class="action-icon badge badge-primary-inverse">
                                            @if($topcourses['preview_image'] !== NULL && $topcourses['preview_image'] !== '')
                                            <img src="{{ asset('images/course/'.$topcourses['preview_image']) }}" class="dashboard-imgs" alt="">
                                            
                                            @else
                                            <img src="{{ Avatar::create($topcourses->title)->toBase64() }}" class="dashboard-imgs" alt="">
                                            @endif

                                        </span>
                                        <h5>{{ str_limit($topcourses->title, $limit = 15, $end = '...') }}</h5>
                                        <p>{{ optional($topcourses->category)->title }}</p>
                                        <p>
                                            @if($topcourses->discount_price == NULL)
                                            <span class="badge badge-primary-inverse">{{ __('Price') }}:{{ $topcourses->price }}</span>
                                            @else
                                            <span class="badge badge-primary-inverse">{{ __('Price') }}:{{ $topcourses->discount_price }}</span>
                                            @endif
                                        </p>
                                       
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-12 border-right">
                                                <h4>{{ optional($topcourses->user)->fname }}</h4>
                                                <p class="my-2">{{ __('Instructor') }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-3 mt-md-3">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">{{ __('Top Order') }}</h5>
                                </div>
                              
                            </div>
                        </div>
                        <div class="user-slider">
                            @foreach($toporder as $toporders)

                            @if(!is_null($toporders->user))

                            <div class="user-slider">
                                <div class="user-slider-item">
                                    <div class="card-body text-center">
                                        <span class="action-icon badge badge-primary-inverse"><img
                                                src="{{ Avatar::create($toporders->user->fname)->toBase64() }}"
                                                class="dashboard-imgs" alt=""></span>
                                        <h5>{{ $toporders->user->fname }}</h5>
                                        <p>{{ $toporders->payment_method }}</p>
                                        <p><span
                                                class="badge badge-primary-inverse">{{ __('Price') }}:{{ $toporders->amount }}</span>
                                        </p>
                                        
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-12 border-right">
                                                <h4>{{ date('jS F Y', strtotime($toporders->created_at)) }}</h4>
                                                <p class="my-2">{{ __('Created At') }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30 mt-md-2">
                        <div class="card-header">
                            <h5 class="card-title">{{ __('Monthly Registred Users in 2021') }}</h5>
                        </div>
                        <div class="card-body">
                            <canvas height='180' id="chartjs-bar-chart" class="chartjs-chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-3  chart_height">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ __('Total Orders in 2021') }}</h5>
                        </div>
                        <div class="card-body">
                            <div id="apex-chart">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-3 chart_height">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ __('User Distribution') }}</h5>
                        </div>
                        <div class="card-body">
                            <div id="apex-circle-chart-custom-angel-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4 mt-5">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">{{ __('Recent Courses') }}</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button"
                                            id="upcomingTask" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="upcomingTask">
                                            <a href="{{url('course')}}"
                                                class="dropdown-item font-13">{{ __('adminstaticword.ViewAll') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @php
                                $courses = App\Course::limit(5)->orderBy('id', 'DESC')->get()
                                @endphp
                                @if(!$courses->isEmpty())
                                <table class="table table-borderless">
                                    <thead></thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>
                                                @if($course['preview_image'] !== NULL && $course['preview_image'] !==
                                                '')
                                                <img src="images/course/<?php echo $course['preview_image'];  ?>"
                                                    alt="Course Image" class="img-responsive img-cousre">
                                                @else
                                                <img src="{{ Avatar::create($course->title)->toBase64() }}"
                                                    alt="Course Image" class="img-responsive img-cousre">
                                                @endif
                                            </td>
                                            <td>
                                                <p><span
                                                        class="text-dark">{{ str_limit($course['title'], $limit = 25, $end = '...') }}</span><br>
                                                    <span class="product-description">
                                                        {{ str_limit($course->short_detail, $limit = 40, $end = '...') }}
                                                    </span>
                                                </p>
                                            </td>
                                            <td><span class="badge badge-warning">
                                                @if( $course->type == 1)
                                                @if($course->discount_price == !NULL)
                                                @if($gsetting['currency_swipe'] == 1)
                                                <i
                                                    class="{{ $currency['icon'] }}"></i>{{ $course['discount_price'] }}
                                                @else
                                                {{ $course['discount_price'] }}<i
                                                    class="{{ $currency['icon'] }}"></i>
                                                @endif
                                                @else
                                                @if($gsetting['currency_swipe'] == 1)
                                                <i class="{{ $currency['icon'] }}"></i>{{ $course['price'] }}
                                                @else
                                                {{ $course['price'] }}<i class="{{ $currency['icon'] }}"></i>
                                                @endif
                                                @endif
                                                @else
                                                {{ __('adminstaticword.Free') }}
                                                @endif
                                            </span>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mt-5">
                    @php
                    $instructors = App\Instructor::limit(3)->orderBy('id', 'DESC')->get();
                    @endphp
                    @if( !$instructors->isEmpty() )
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="card-title mb-0">{{ __('Instructor Request') }}</h5>
                                </div>
                                <div class="col-3">
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 font-18 float-right" type="button"
                                            id="upcomingTask" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="feather icon-more-horizontal-"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="upcomingTask">
                                            <a href="{{route('all.instructor')}}"
                                                class="dropdown-item font-13">{{ __('adminstaticword.AllInstructor') }}</a>
                                            <a href="{{url('requestinstructor')}}"
                                                class="dropdown-item font-13">{{ __('adminstaticword.ViewAllInstructor') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($instructors as $instructor)
                                @if($instructor->status == 0)
                                <div class="col-md-2 col-2">
                                    <img src="{{ asset('images/instructor/'.$instructor['image'])}}" alt="user "
                                        class="online img-cousre">
                                </div>
                                <div class="col-md-10 col-10">
                                    <p><span
                                            class="text-dark">{{ $instructor['fname'] }}&nbsp;{{ $instructor['lname'] }}</span><br>
                                        <span> {{ str_limit($instructor['detail'], $limit = 130, $end = '...') }}</span>
                                    </p>
                                    <div class="text-right">
                                        <h6>{{ __('adminstaticword.Resume') }}:
                                            <a href="{{ asset('files/instructor/'.$instructor['file']) }}"
                                                download="{{$instructor['file']}}">{{ __('adminstaticword.Download') }}
                                                <i class="ion ion-md-download"></i></a></h6>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('scripts')
<script>
    var user = @json($usergraph);
    var course = @json($coursegraph);
    var category = @json($categorygraph);
    var order = @json($ordergraph);
    var refund = @json($refundgraph);
    var coupon = @json($coupongraph);
    var zoom = @json($zoomgraph);
    var bbl = @json($bblgraph);
    var jitsi = @json($jitsigraph);
    var googlemeet = @json($googlemeetgraph);
    var faq = @json($faqgraph);
    var page = @json($pagegraph);
    var blog = @json($bloggraph);
    var testimonial = @json($testimonialgraph);
    var instructor = @json($instructorgraph);
    var instructor = @json($instructorgraph);
    var follower = @json($followergraph);
    var datas = @json($datas);
    var adminchart = @json($admincharts);

    "use strict";
    $(document).ready(function () {
        var barChartID = document.getElementById("chartjs-bar-chart").getContext('2d');
        var barChart = new Chart(barChartID, {




            type: 'bar',



            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                    'Dec'
                ],
                datasets: [{
                    label: 'Monthly Registred Users',
                    backgroundColor: ["#506fe4", "#506fe4", "#506fe4", "#506fe4", "#506fe4",
                        "#506fe4", "#506fe4", "#506fe4", "#506fe4", "#506fe4", "#506fe4",
                        "#506fe4", "#506fe4"
                    ],
                    borderColor: ["#506fe4", "#506fe4", "#506fe4", "#506fe4", "#506fe4",
                        "#506fe4", "#506fe4", "#506fe4", "#506fe4", "#506fe4", "#506fe4",
                        "#506fe4", "#506fe4"
                    ],
                    borderWidth: 1,
                    data: datas,

                }]
            },
            options: {


                responsive: true,
                legend: {
                    position: 'top',
                    height: 100
                },
                title: {
                    display: false,
                    text: 'Chart.js Bar Chart'
                },
                scales: {
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        },
                        gridLines: {
                            color: 'rgba(0,0,0,0.05)',
                            lineWidth: 1,
                            borderDash: [0]
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        },

                        gridLines: {
                            color: 'rgba(0,0,0,0.05)',
                            lineWidth: 1,
                            borderDash: [0]
                        }
                    }]
                }
            }
        });
    });
    var datas1 = @json($datas1);
    "use strict";
    $(document).ready(function () {
        var options = {
            chart: {
                height: 285,
                type: 'area',
                toolbar: {
                    show: false
                },
                zoom: {
                    type: 'x',
                    enabled: false,
                    autoScaleYaxis: true
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
            },
            colors: ['#506fe4'],
            series: [{
                name: 'Orders',
                data: datas1
            }],
            legend: {
                show: false,
            },
            xaxis: {

                title: {
                    text: 'Months',
                },
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                    'Dec'
                ],
                axisBorder: {
                    show: true,
                    color: 'rgba(0,0,0,0.05)'
                },
                axisTicks: {
                    show: true,
                    color: 'rgba(0,0,0,0.05)'
                }
            },
            yaxis: {
                title: {
                    text: 'Orders',
                },
                min: 0
            },
            grid: {
                row: {
                    colors: ['transparent', 'transparent'],
                    opacity: .5
                },
                borderColor: 'rgba(0,0,0,0.05)'
            },


        }
        var chart = new ApexCharts(
            document.querySelector("#apex-chart"),
            options
        );
        chart.render();
    });
</script>
@endsection