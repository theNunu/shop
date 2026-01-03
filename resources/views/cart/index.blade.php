{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Carrito de compras</h1>

    @if (\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>${{ $item->price }}</td>
                        <td>${{ $item->subtotal }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->rowId) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-sm">Quitar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- <h4>Total: ${{ total() }}</h4> --}}
        <h4>Total: ${{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</h4>


    @else
        <p>El carrito está vacío.</p>
    @endif
</div>
{{-- @endsection --}}
