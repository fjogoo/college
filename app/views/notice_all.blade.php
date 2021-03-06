<html>
<head>
    <title>Ramgarhia Institute of Engg & Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Live .js        -->
    {{HTML::script('front/js/live.js')}}
    <!-- my style sheet       -->
    {{HTML::style('front/css/style.css')}}
    <!--owl carousel-->
    {{HTML::style('front/gallery/owl-carousel/owl.carousel.css')}}
    {{HTML::style('front/gallery/owl-carousel/owl.theme.css')}}
    <!--owl carousel-->
    <!-- light box for youtube and images    -->
    {{HTML::style('front/lightbox/nivo-lightbox.css')}}
    {{HTML::style('front/lightbox/themes/default/default.css')}}

</head>
<body>

<div class="container main_container">
        <!--//header-->
        @include('header')
        <!--header end-->

        <!-- menu  -->
        @include('menu')
        <!--menu end -->

        <div class="row-fluid">
            <div class="col-xl-12">
                 <div class="gallery_page" style="padding-bottom:25px;">
                     <h3>Notice & Events</h3>
                         <div class="col-md-3 notice_all">
                             <ul class="list-unstyled">
                                 @foreach($content['notice_all'] as $data)
                                 <li><a href="{{URL::to('notice_month/'.$data->id)}}">{{date('M-Y',strtotime($data->notice_date))}} {{'('.$data->total.')'}}</a></li>
                                 @endforeach
                             </ul>
                         </div>

                         <div class="col-md-8 notice_by_date">
                            <ul >
                                 @foreach($content['notice_by_date'] as $data)
                                  <li>
                                      Title :- <strong>{{$data->title}}</strong></br>
                                      <i>Posted at</i> :- <strong>{{date('d-M-Y',strtotime($data->notice_date))}}</strong>

                                      <p>
                                          {{substr(strip_tags($data->description),0,100)}}......
                                      </p>
                                      <p><a href="{{URL::to('notice/'.$data->id)}}">Read more </a></p>
                                  </li>
                                 @endforeach
                            </ul>
                         </div>
                     <div class="clear"></div>
                 </div>
            </div>
        </div>


        <!-- banner  -->
            @include('footer')
        <!--banner end -->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
{{HTML::script('front/lightbox/nivo-lightbox.min.js')}}

</body>
</html>


