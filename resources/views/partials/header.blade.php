<body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
      <span class="site-heading-lower">Business Casual</span>
    </h1>
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item  px-lg-4 {{ $currentRoute === "/" ? "active" : "" }}">
              <a class="nav-link text-uppercase text-expanded" href="/">Home
                
              </a>
            </li>
            <li class="nav-item px-lg-4 {{ $currentRoute === "about" ? "active" : "" }} ">
              <a class="nav-link text-uppercase text-expanded " href="about">About</a>
            </li>
            <li class="nav-item px-lg-4 {{ $currentRoute === "products" ? "active" : "" }}">
              <a class="nav-link text-uppercase text-expanded" href="products">Products</a>
            </li>
            <li class="nav-item px-lg-4 {{ $currentRoute === "store" ? "active" : "" }}">
              <a class="nav-link text-uppercase text-expanded" href="store">Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>