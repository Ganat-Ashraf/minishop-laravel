@extends('layout.master')

@section('content')

    <section class="bg-stand">
        <div class="title">
            <div class="links">
                <a href="{{url('/')}}">HOME</a>
                <span>CART</span>
            </div>
            <h1>MY WISHLIST</h1>
        </div>
    </section>
    <div class="car container">
        <table class="car-t">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Product</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th class="last">total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr class="cart-item" data-price="{{ $item->price }}"
                        data-original-price="{{ $item->original_price ?? $item->price }}"
                        data-has-discount="{{ $item->original_price && $item->original_price > $item->price ? 'true' : 'false' }}">
                        <td>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"><i class="fa-solid fa-xmark"></i></button>
                            </form>
                        </td>
                        <td class="image">
                            <img src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->name }}">
                        </td>
                        <td>
                            <h3>{{ $item->name }}</h3>
                            <p>Far far away, behind the word mountains, <br> far from the countries</p>
                        </td>
                        <td class="unit-price">
                            @if($item->original_price && $item->original_price > $item->price)
                                <span><s>${{ number_format($item->original_price, 2) }}</s></span>
                                <span class="text-danger">${{ number_format($item->price, 2) }}</span>
                            @else
                                ${{ number_format($item->price, 2) }}
                            @endif
                        </td>
                        <td>
                            <input type="number" name="quantity" value="1" min="1" class="quantity-input"
                                data-item-id="{{ $item->id }}">
                        </td>
                        <td class="item-total">
                            ${{ number_format($item->price, 2) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="cart-summary">
            <h3>CART TOTALS</h3>
            <div class="total">
                <span>Subtotal</span>
                <span class="cart-subtotal">${{ number_format($cartItems->sum('price'), 2) }}</span>
            </div>
            <div class="total">
                <span>Delivery</span>
                <span class="delivery-fee">$50.00</span>
            </div>
            <div class="total">
                <span>Discount</span>
                <span
                    class="discount-amount">${{ number_format(max($cartItems->sum('original_price') - $cartItems->sum('price'), 0), 2) }}</span>
            </div>
            <hr>
            <div class="total">
                <span>Total</span>
                <span class="cart-grand-total">${{ number_format($cartItems->sum('price') + 50, 2) }}</span>
            </div>
            <button class="btn">Proceed to checkout</button>
        </div>
    </div>
@endsection