@extends('layouts.app')

@section('content')
<div style="background-image:url(img/car.jpg) ;width:122%; margin-left:-117px;">
    <p style="text-align:center;color:white;font-size:300%;font-weight:600;padding-top:10%;">DRIVE IN THE CITY AND OUTSTATION<p>
    <p style="text-align:center;color:white;font-size:150%;font-weight:500">
        Self Drive Car Rental in <select name="city">
            <option value="surat">Surat</option>
            <option value="ahmedabad">Ahmedabad</option>
            <option value="mumbai">Mumbai</option>
            <option value="pune">Pune</option>
            <option value="vadodra">Vadodra</option>
          </select>
    </p>
    <center>
    <button type="button" class="btn btn-block btn-lg" 
        style="width:50%;margin-top:3%;text-align:left;">
        Start your wonderful journey<span class="glyphicon glyphicon-chevron-right"></button>
    </center>
</div>
@endsection