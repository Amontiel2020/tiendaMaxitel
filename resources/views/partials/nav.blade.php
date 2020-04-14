 

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top navbar-default" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand main-title" href="{{ route('home2') }}">MAXITEL</a>
                
            </div>
            <!-- /.navbar-header -->
            <p class="navbar-text">Segurança Electronica</p>
            <ul class="nav navbar-top-links navbar-right">
 
                <li><a href="{{ route('cart-show') }}">
                    <i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#">Conocenos</a></li>
                <li><a href="#">Contacto</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
            </ul>
            <!-- /.navbar-top-links -->


        </nav>

  

 