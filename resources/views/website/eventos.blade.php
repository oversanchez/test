@extends('website.contenido')

@section('body')
    <div class="post_section" style="background-color: white;padding: 15px 0 35px;margin-top:10px;">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-8 post_left">
                    <div class="upcoming_events event-col">
                        <div class="related_post_sec single_post">
                            <span class="date-wrapper">
                              <span class="date"><span>{{date("d", strtotime($evento->fecha))}}</span>{{date("M", strtotime($evento->fecha))}}</span>
                            </span>
                            <div class="rel_right">
                                <div class="single_post single-event">
                                    <h1 style="margin: 0 0 10px;">{{$evento->nombre}}</h1>
                                    <div class="meta" style="margin: 0 0 10px;">
                                        <span class="place"><i class="fa fa-map-marker"></i>{{$evento->lugar}}</span>
                                        <span class="event-time"><i class="fa fa-clock-o"></i>{{$evento->hora}}</span>
                                    </div>
                                    <div class="post_desc" style="text-align: justify;font-size:16px;">
                                        {{$evento->descripcion}}
                                    </div>
                                    <div class="post_desc" style="text-align: justify;">
                                        {!! $evento->contenido !!}
                                    </div><!--end post desc-->
                                </div><!--end single_post-->
                            </div>
                        </div>
                    </div>
                </div><!--end post_left-->

                <div class="col-xs-12 col-sm-4 post_right">
                    <div class="post_right_inner">
                        <div class="related_post_sec">
                            <div class="list_block">
                                <h3>Últimas noticias</h3>
                                <ul>
                                    @foreach($noticias as $key => $noticia)
                                        <li>
										<span class="rel_thumb" style="max-width: 110px;">
											<img src="{{$noticia->url_foto}}" alt="">
										</span><!--end rel_thumb-->
                                            <div class="rel_right" >
                                                <a href="/noticias/{{$noticia->id}}/ver"><h4>{{str_limit($noticia->descripcion,50)}}</h4>
                                                </a>
                                                <span class="date">Fecha: <a href="#">{{$noticia->fecha}}</a></span>
                                            </div><!--end rel right-->
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="blog-right-sidebar.html" class="more_post">More</a>
                            </div>
                        </div><!--end related_post_sec-->
                    </div><!--end post right inner-->
                </div><!--end post_right-->

            </div><!--row-->
        </div>
    </div>
@endsection