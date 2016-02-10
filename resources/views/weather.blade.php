<!DOCTYPE html>
<html>
    <head>
        <title>Weather</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style>
            #table{
                margin-left: 1%;
            }
            #text{
                margin-left: 3%;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="text">
            <h2>Hello, {{ $town }}.
                <a href="{{$town}}/refresh"><img src="{{asset('refresh.jpeg')}}" width="30"  height="30"></a>
            </h2>
        </div>
        <div id="table">
            <div class="row">
                @foreach ($data as $array)
                    <div class="col-md-2">
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="11">{{date("d. F",strtotime($array[0]['kuupaev']))}}</td>
                            </tr>
                            <tr>
                                <tr>
                                    <td>Time</td>
                                    <td>MIN</td>
                                    <td>MAX</td>
                                    <td></td>
                                    <td></td>


                            </tr>
                            </tr>
                            @foreach ($array as $avalue)
                                <tr>
                                    <td>{{date("H:i",strtotime($avalue['kuupaev']))}}</td>
                                    <td>{{$avalue['temp_min']}}</td>
                                    <td>{{$avalue['temp_max']}}</td>
                                    <td><img src="{{asset('img/'.$avalue['weather_icon'].'.png')}}" width="35"  height="35"></td>
                                    <td>
                                        @if($avalue['wind_icon'] >= 326.25 || 33.75 >= $avalue['wind_icon']) &#x2191;
                                        @elseif(123.75 >= $avalue['wind_icon'] && $avalue['wind_icon'] >= 56.25) &#8594;
                                        @elseif(213.75 >= $avalue['wind_icon'] && $avalue['wind_icon'] >= 146.25) &#8595;
                                        @elseif(303.75 >= $avalue['wind_icon'] && $avalue['wind_icon'] >= 236.25) &#8592;

                                        @elseif(56.25 > $avalue['wind_icon'] && $avalue['wind_icon'] > 11.25) &#8599;
                                        @elseif(146.25 > $avalue['wind_icon'] && $avalue['wind_icon'] > 123.75) &#8600;
                                        @elseif(236.25 > $avalue['wind_icon'] && $avalue['wind_icon'] > 213.75) &#8601;
                                        @elseif(326.25 > $avalue['wind_icon'] && $avalue['wind_icon'] > 303.75) &#8598;
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>


