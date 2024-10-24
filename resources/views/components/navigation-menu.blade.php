<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                            <a class="nav-link" href="{{route('panel')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel
                            </a>
                            <!--div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div-->
                            <div class="sb-sidenav-menu-heading">Modulos</div>
                            <a class="nav-link" href="{{  route('productos.index')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></i></div>
                                Mis Productos 
                            </a>
                            <a class="nav-link" href="{{  route('productos.all')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></i></div>
                                Productos
                            </a>
                            <a class="nav-link" href="{{  route('productos.comunidad')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></i></div>
                                Productos de mi comunidad
                            </a>
                            <a class="nav-link" href="{{  route('detalle_compras.index')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-shopping"></i></i></i></div>
                                Mi Carrito
                            </a>
                            <a class="nav-link" href="{{  route('Pago.index')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-credit-card"></i></i></i></div>
                                Pagos
                            </a>
                            <a class="nav-link" href="{{  route('pedidos.index')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-truck"></i></i></i></div>
                                Mi Pedido
                            </a>
                            <a class="nav-link" href="{{  route('pedidos.all')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></i></i></div>
                                Pedidos
                            </a>
                            <a class="nav-link" href="{{  route('pedidos.comunidad')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></i></i></div>
                                Pedidos de mi comunidad
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tablas
                            </a>
                            <div class="sb-sidenav-menu-heading">Otros</div>
                            <a class="nav-link" href="{{  route('users.index')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></i></div>
                                Usuarios
                            </a>
                            <a class="nav-link" href="{{  route('roles.index')  }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person-circle-plus"></i></div>
                                Roles
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Bienvenido:</div>
                        {{auth()->user()->nombre.' '.auth()->user()->apellido}}
                        <div class="small">Comunidad:</div>
                        {{ auth()->user()->comunidad->nombre }}

                    </div>
                </nav>
            </div>