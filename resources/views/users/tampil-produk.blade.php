@extends('users.layout')
@section('content')
<div class="col-md-12 col-lg-5 col-12">
    <div class="product-details-content">
        <h3>Handcrafted Supper Mug</h3>
        
        <form action="home.html" method="post">
            <label> <b>Traveller &emsp;</b> </label> <label>dummy</label> <br>
            <label> <b>Lokasi &emsp;</b> </label> <label>dummy</label> <br>
            <label> <b>Harga &emsp;</b> </label> <label>dummy</label> <br>
        </form>
        
        <div class="quickview-plus-minus">
            <div class="cart-plus-minus">
                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
            </div>
            <div class="quickview-btn-cart">
                <a class="btn-hover-black" href="cart.html">buy</a>
            </div>
            <div class="quickview-btn-cart">
                <a class="btn-hover-black" href="#">chat seller</a>
            </div>
        </div>
    </div>
</div>
@endsection