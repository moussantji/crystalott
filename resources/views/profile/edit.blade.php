@extends('admin.base')

@section('title', 'Profil')

@section('content')

    @php
        $Imageprofil = $user->getPhoto();
        if ($Imageprofil !== null) {
            $profil = $user->getPhoto()->getImageUrl(150, 150);
        } else {
            $profil = asset('admin/assets/images/users/user.png');
        }
    @endphp
    <!-- ==================================================== -->
    <div class="page-content">


        <!-- Start Container Fluid -->
        <div class="container-xxl">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="bg-primary profile-bg rounded-top position-relative mx-n3 mt-n3">
                                <div class="profile-picture-container">
                                    <img src="{{ $profil }}" alt="" id="profile-image" style="cursor: pointer;"
                                        class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                                    <form id="photoform" method="POST" action="{{ route('profile.picture') }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <input type="file" id="photo-input" name="pictures[]"  style="display: none;">
                                    </form>
                                </div>


                            </div>

                            <div class="mt-5 d-flex flex-wrap align-items-center justify-content-between">
                                <div>
                                    <h4 class="mb-1">{{ $user->name }} <i
                                            class='bx bxs-badge-check text-success align-middle'></i></h4>
                                    <p class="mb-0">{{ $user->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>General
                                Settings</h4>
                        </div>
                        @include('profile.partials.update-profile-information-form')
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:shop-2-bold-duotone" class="text-primary fs-20"></iconify-icon>Store
                                Settings</h4>
                        </div>
                        <div class="card-body">

                            @include('profile.partials.update-password-form')

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:compass-bold-duotone"
                                    class="text-primary fs-20"></iconify-icon>{{ __('Delete Account') }}</h4>
                        </div>
                        <div class="card-body">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Container Fluid -->

        <!-- ========== Footer Start ========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; Crystal panel. Crafted by <iconify-icon
                            icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                            href="https://github.com/moussantji" class="fw-bold footer-text" target="_blank">Pone</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== Footer End ========== -->

    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->
<script>

document.addEventListener('DOMContentLoaded', function () {
    const profileImage = document.getElementById('profile-image');
    const photoInput = document.getElementById('photo-input');

    // Vérifier si les éléments existent
    if (!profileImage || !photoInput) return;

    // Lorsque l'image est cliquée, ouvrir le dialogue de sélection de fichier
    profileImage.addEventListener('click', function () {
        photoInput.click();  // Simule le clic sur l'input file caché
    });

    // Lorsqu'un fichier est sélectionné, envoyer l'image au serveur via AJAX
    photoInput.addEventListener('change', function () {
        // Vérifier si un fichier a été sélectionné
        if (photoInput.files.length === 0) {
            return;
        }
        const form = document.getElementById('photoform');
        form.submit();
    });
});


</script>

@endsection
