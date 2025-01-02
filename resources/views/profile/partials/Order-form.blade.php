<div class="card-body">
    <div class="row">
        <form id="myform" method="post" action="{{ route('admin.commande.update',$commande) }}" enctype="multipart/form-data">
            @csrf
            @foreach ($commande->paniers as $panier)
            @for ($i = 1; $i <= $panier->quantite; $i++)
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="username{{ $panier->id }}_{{ $i }}" class="form-label">Username</label>
                    <input type="text" id="username{{ $panier->id }}_{{ $i }}" name="username{{ $panier->id }}_{{ $i }}" class="form-control" placeholder="IPTV Username {{ $panier->abonnement->nom }}"
                         required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="password{{ $panier->id }}_{{ $i }}" class="form-label">Password</label>
                    <input type="text" id="password{{ $panier->id }}_{{ $i }}" name="password{{ $panier->id }}_{{ $i }}" class="form-control"
                        placeholder="IPTV Password {{ $panier->abonnement->nom }}"  required autofocus
                        autocomplete="off">
                </div>

            </div>
            @endfor
            @endforeach
        </form>
    </div>
</div>
