 {{-- <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">{{--{{config ('app.name','LSAPP')}}--}}</a>
      {{-- </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/cakes">Cakes</a></li>
          <li><a href="/pastries">Pastries</a></li>
          <li><a href="/training">Training</a></li>
          <li><a href="/store">Store</a></li>
          <li><a href="/blog">Blog</a></li>


        </ul>
      </div>
    </div>
  </nav>    --}} 

  <nav class="navbar  navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{config ('app.name','Lilians Cakes')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cakes">Cakes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pastries">Pastries</a>
          <li class="nav-item">
            <a class="nav-link" href="/training">Training</a>
            <li class="nav-item">
              <a class="nav-link" href="../store">Store</a>
              <li class="nav-item">
                <a class="nav-link" href="../blog">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>