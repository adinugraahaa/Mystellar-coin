@extends('master')
@section('title','MyStellar	')

@section('content')
<div class="container-fluid mb-3" style="min-height: 90px;">
	<div class="row text-center border rounded mx-4" style="font-size: 15px;">
		<div class="offset-sm-2">
		</div>
		<div class="col-6 col-sm-2 pt-2 pb-2">
			<a href="#" class="text-dark"><i class="icon-money" style="font-size: 20px !important;"></i><br>Currencies</a>
		</div>
		<div class="col-6 col-sm-2 pt-2 pb-2">
			<a href="#" class="text-dark"><i class="icon-balance-scale" style="font-size: 20px !important;"></i><br>Exchanges</a>
		</div>
		<div class="col-6 col-sm-2 pt-0 pb-2">
			<div class="dropdown bd-highlight">
                <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="ti-shopping-cart" style="font-size: 20px !important;"><br>Trade Volume</a>
              <div class="dropdown-menu" style="min-width: 110px;">
                <a class="dropdown-item" href="#">Trending</a>
                <a class="dropdown-item" href="#">Overview</a>
                <a class="dropdown-item" href="#">24 Volume</a>
              </div>
            </div>
		</div>
		<div class="col-6 col-sm-2 py-2">
			<a href="#" class="text-dark"><span class="ti-money" style="font-size: 20px !important;"><br></span>Market</a>
		</div>
	</div>
</div>
<div class="container" style="">
	<div class="row">
		<div class="col-sm-12" style="font-size: 14px;">
			<div class="d-flex bd-highlight mb-3">
			  <div class="dropdown mr-auto p-2 bd-highlight">
			  	<a href="#" class="dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
				 <div class="dropdown-menu" aria-labelledby="dropdown1" style="min-width: 75px;">
			      <a class="dropdown-item" href="#">USD</a>
			      <a class="dropdown-item" href="#">BTC</a>
			      <a class="dropdown-item" href="#">ETH</a>
			      <a class="dropdown-item" href="#">XRP</a>
			      <a class="dropdown-item" href="#">BCH</a>
			      <a class="dropdown-item" href="#">LTC</a>
			    </div>
			  </div>
			  <div class="p-2 bd-highlight border">
			  	<a href="#">Previous 50</a></div>
			  <div class="p-2 bd-highlight border">
			  	<a href="#">Next 50</a></div>
			  <div class="p-2 bd-highlight border">
			  	<a href="#">View All</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive-lg">
			    <table class="table background-sm" style="font-size: 15">
			  <thead>
			    <tr class="text-center">
			      <th scope="col" class="border" style="width: 45px;"></span>#</th>
			      <th scope="col" class="border" style="width: 260px;">Name</th>
			      <th scope="col" class="border" style="width: 175px;">MarketCap</th>
			      <th scope="col" class="border">Price</th>
			      <th scope="col" class="border">1h</th>
			      <th scope="col" class="border">24h</th>
			      <th scope="col" class="border">Price Graph(7d)</th>
			    </tr>
			  </thead>
			  <tbody>
			    @for ($i = 1; $i <= 50; $i++)
					<tr>
					 <td>{{$i}}</td>
				     <td>Bitcoin{{$i}} </td> 
				     <td class="text-right">$132,967,026,186</td> 
				     <td class="text-right"	>$7,745.94</td> 
				     <td class="text-right">0,05%</td> 
				     <td class="text-right">-3,35%</td> 
				     <td>graph</td> 
				     </tr>
				     @endfor
			  </tbody>
			</table>
			</div>
		</div>
	</div>
</div>
@endsection

