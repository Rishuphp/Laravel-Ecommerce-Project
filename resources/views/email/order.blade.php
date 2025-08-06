<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Email</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font-size:16px;">
    @if($mailData['userType'] == 'customer')
     <h1>Thank you for your order!!</h1>
    <h2>Your Order Id Is: #{{ $mailData['order']->id}}</h2>
    @else
     <h1>You have received an order: </h1>
    <h2>Order Id: #{{ $mailData['order']->id}}</h2>
    @endif
   

    <h2>Shipping Address</h2>
    <address>
        <strong>{{$mailData['order']->first_name.''.$mailData['order']->last_name}}</strong><br>
        <b>Address:</b> {{$mailData['order']->address}}<br>
        <b>City:</b> {{$mailData['order']->city}}<br>
        <b>Pin Code:</b> {{$mailData['order']->zip}}<br>
        <b>Country:</b> {{getCountryInfo($mailData['order']->country_id)->name}}<br>
        <b>Phone:</b> {{$mailData['order']->mobile}}<br>
        <b>Email:</b> {{$mailData['order']->email}}
    </address>

    <h2>Products</h2>

    <table cellpedding="3" cellspacing="3" border="0" width="700">
        <thead>
            <tr style="background:#CCC;">
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mailData['order']->items as $item)

            <tr>
                <td>{{$item->name}}</td>
                <td>${{number_format($item->price,2)}}</td>
                <td>{{$item->qty}}</td>
                <td>${{number_format($item->total,2)}}</td>
            </tr>
            @endforeach


            <tr>
                <th colspan="3" align="right">Subtotal:</th>
                <td>${{number_format($mailData['order']->subtotal,2)}}</td>
            </tr>

            <tr>
                <th colspan="3" align="right">Discount:{{(!empty($mailData['order']->coupon_code)) ? '('.$mailData['order']->coupon_code.')' : ''}}</th>
                <td>${{number_format($mailData['order']->discount,2)}}</td>
            </tr>
            <tr>
                <th colspan="3" align="right">Shipping:</th>
                <td>${{number_format($mailData['order']->shipping,2)}}</td>
            </tr>
            <tr>
                <th colspan="3" align="right">Grand Total:</th>
                <td>${{number_format($mailData['order']->grand_total,2)}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>