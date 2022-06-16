@extends('layout')


@section('title','Прайс')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-uppercase p-4 mt-4 text-dark">Функции мойки</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach($prices as $price)
        <div class="col-lg-2 ">

            <div class="bt-pricing">
                <ul>
                    <li class="price">
                        <sup>{{$price->service_price}}</sup>
                        <p>{{$price->time}}</p>
                    </li>
                    <li class="title-text bg-secondary">{{$price->name}}
                    </li>
                </ul>
            </div>
        </div>
        @endforeach

    </div><!-- ./row -->
</div><!-- ./container -->


<div class="fact5 bg-dark p-4">
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="mx-sm-5 px-5" style="max-width: 900px;">
            <h4 class="display-6 text-white text-uppercase slideInDown">Товары, которые можете преобрести у
                Администратора</h4>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">

        <div class="container">
            <div class="row">
                @foreach($goods as $good)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="bt-pricing bg-white">
                        <ul class="">
                            <div class="effects">
                            <img src="{{$good->image}}" class="card-img-top" alt="...">
                                <div>
                                <a href="/{{$good->id}}" class="kartinka"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                            <!-- <a href="/{{$good->id}}" class="kartinka">
                                
                                <div>
                                    
                                </div>
                            </a> -->

                            <li class="price ">

                                <sup>{{$good->price}}</sup>
                            </li>
                            <li class="title-text bg-secondary">{{$good->title}}
                            </li>

                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection