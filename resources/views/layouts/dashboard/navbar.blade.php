{{-- Navbar Desktop --}}
<div class="navbar-container">

    {{-- Desktop --}}
    <div class="navbar-collapse-desktop">

        <div class="row">

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

        </div>

    </div>

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
