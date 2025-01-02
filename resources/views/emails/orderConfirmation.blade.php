<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order, {{ $name }}!</h1>
    <p>Your order has been successfully created.</p>

    <p><strong>Order ID:</strong> {{ $orderId }}</p>
    <p><strong>Payment Method:</strong> {{ $paymentMethod }}</p>
    <p><strong>Amount:</strong> ${{ number_format($total, 2) }}</p>
    <a href="https://wa.me/16725384823?text=Bonjour,%20je%20souhaite%20confirmer%20ma%20commande%20(ID{{ $orderId }})%20au%20nom%20de%20{{ $name }}.">Click here to process the payment</a>

    <p>We will process your order shortly after the payment. If you have any questions, please contact us.</p>

    <p>Thank you for choosing IPTV Service!</p>
</body>
</html>

