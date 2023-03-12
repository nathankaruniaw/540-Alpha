<div class="navigation-wrap bg-transparent start-header start-style">
    <div class="container-fluid-custom">
        <div class="row">
<<<<<<< HEAD

            {{-- Logo --}}
            <div class="col-md-3">

                <a href="/" class="nav-link">
                    <img src="/images/logo.png" alt="Logo Navbar" class="navbar-logo">
                </a>

            </div>

            {{-- Menu Desktop --}}
            <div class="col-md-9 d-flex justify-content-end">

                <p> <a class="nav-link" href="/clients">Clients</a> </p>

                <p> <a class="nav-link" href="/portfolio">Portfolio</a> </p>

            </div>

=======
            <div class="col-12">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#" target="_blank"><img src="assets/img/White-Logo-Full.png" alt="" /></a>

                    <button class="navbar-toggler" type="button" F data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 start-style">
                                <a class="nav-link" href="about.html">about us</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 start-style">
                                <a class="nav-link" href="#">team</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 start-style">
                                <a class="nav-link" href="#">portfolio</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 start-style">
                                <a class="nav-link" href="#">contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
>>>>>>> 790c71017b79f58630e1dae63515fd8ac142e7b5
        </div>
    </div>
<<<<<<< HEAD

    {{-- Mobile --}}
    <div class="navbar-collapse-mobile">

        <div class="row">

            {{-- Logo --}}
            <div class="col-md-12 d-flex justify-content-between">

                <a href="/" class="nav-link">
                    <img src="/images/logo.png" alt="Logo Navbar" class="navbar-logo">
                </a>

                <div class="menu-toggler">
                    <div class="bar half start"></div>
                    <div class="bar"></div>
                    <div class="bar half end"></div>
                </div>

            </div>

        </div>

    </div>

</div>

{{-- Side Nav --}}
<div class="side-nav pdy-100">

    <div class="col-md-12" style="margin: 0;padding: 0;">

        <a class="nav-link" href="/wedding-bouquet">Wedding Bouquet</a>

        <a class="nav-link" href="/decoration">Decoration</a>

        <a class="nav-link" href="/flower-shop">The Flower Shop</a>

        <a class="nav-link" href="/flower-class">Flower Class</a>

    </div>

</div>

<script>
    $(document).ready(function(){
        $('.menu-toggler').click(function(){
            console.log('Side Navbar Toggled');
            $(this).toggleClass('open');
            $('.side-nav').toggleClass('open');
        })
    })
</script>
=======
</div>
>>>>>>> 790c71017b79f58630e1dae63515fd8ac142e7b5
