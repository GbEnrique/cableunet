<header>
		<H1>cableUNET</H1>
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		
				<li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
				</li>
				<li><a href="{{ route('telephones.index') }}" class="{{request()->routeIs('telephones.*') ? 'active' : '' }}">Telefono</a>
				</li>
				<li><a href="{{ route('internets.index') }}" class="{{ request()->routeIs('internets.*') ? 'active' : '' }}">Internet</a>
				</li>
				<li><a href="{{ route('cables.index') }}" class="{{ request()->routeIs('cables.*') ? 'active' : '' }}">Cable</a>
				</li>
				<li><a href="{{ route('packservices.index') }}" class="{{ request()->routeIs('packservices.*') ? 'active' : '' }}">Paquete de servicios</a>
				</li>
				<li><a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">Usuarios</a>
				</li>
					<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>	
		</nav>
	</header>