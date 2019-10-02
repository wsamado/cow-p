<nav class="navbar navbar-expand-md fixed-top top-nav">
    	<div class="container">
    		  <a class="navbar-brand" href="#"><strong><span class="g-r">Bo</span>vinet.</strong></a>
    		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    		  </button>

    		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    		    <ul class="navbar-nav ml-auto">
    		      <li class="nav-item @yield('class')">
    		        <a class="nav-link" href="/inicio">Inicio</a>
    		      </li>
    		      <li class="nav-item @yield('class-qs')">
    		        <a class="nav-link" href="/quienes-somos">Quienes somos</a>
    		      </li>
    		      <li class="nav-item @yield('class-pb')">
    		        <a class="nav-link" href="/publicaciones">Publicaciones</a>
    		      </li>
    		      <li class="nav-item @yield('class-in')">
    		        <a class="nav-link" href="/auth">Iniciar sesión</a>
    		      </li>
    		    </ul>
    		  </div>
    	</div>
</nav>
