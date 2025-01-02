<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order!</p>
    @foreach ($commande->paniers as $panier)
    @for ($i = 1; $i <= $panier->quantite; $i++)
    <p>Abonnement name: {{ $panier->abonnement->nom }}</p>
    <p>Username: {{ is_string($username[ $panier->id ][$i]) ? $username[ $panier->id ][$i] : json_encode($username[ $panier->id ][$i]) }}</p>
    <p>Password: {{ isset($password[ $panier->id ][$i]) && is_string($password[ $panier->id ][$i]) ? $password[ $panier->id ][$i] : '' }}</p>
    <br>
    @endfor
    @endforeach

</body>
</html>
