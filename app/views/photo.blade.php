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
            <div class="col-xl-12" style="padding-bottom:40px;">
                <div class="gallery_page">
                    <h3>
                        @foreach($content['album_name'] as $data)
                            Album {{$data->name}}
                        @endforeach

                    </h3>
                    <?php $count=0;?>
                    <table>
                        <tr>
                            @foreach($content['photo'] as $data)
                            @if($count<5)
                            <td>
                                <a href="{{asset('gallery/images/'.$data->name)}}" data-lightbox-gallery="gallery1">
                                    <img  src="{{asset('gallery/thumbnail/'.$data->name)}}" alt=""/>
                                </a>
                            </td>
                            <?php $count++;?>
                            @else
                        </tr>
                        <tr>
                            <td>
                                <a href="{{asset('gallery/images/'.$data->name)}}" data-lightbox-gallery="gallery1">
                                    <img src="{{asset('gallery/thumbnail/'.$data->name)}}" alt=""/>
                                </a>
                            </td>
                            <?php $count=1;?>
                            @endif
                            @endforeach
                        </tr>
                    </table>
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
<script>
    $(document).ready(function(){
        $('a').nivoLightbox();
    });
</script>

</body>
</html>


