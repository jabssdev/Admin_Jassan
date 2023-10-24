<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{asset('admin/images/user.jpg')}}" class="rounded-circle user-photo"
                 alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                   data-toggle="dropdown"><strong>{{Auth::guard('admins')->user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">

                    <li><a href="{{ route('admin.logout') }}"><i class="icon-power"></i>Salir</a></li>
                </ul>
            </div>
            <hr>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#info"><i class="icon-question"></i></a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                @yield('menu')
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="info">
                <ul class="right_chat list-unstyled">
                    <li class="menu-heading" style="font-weight: 600; padding-bottom: 10px;">Soporte Técnico</li>

                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('admin/images/ICON01.png') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Pyrus Studio</span>
                                    <span class="message"><a href="https://www.pyrusstudio.com/" target="_blank">www.pyrusstudio.com</a></span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="online" style="padding-bottom: 20px;">
                        <div class="body" style="padding-left: 50px;">
                            Escribenos: <br>
                            info@pyrusstudio.com <br>
                            pyrusstudio@hotmail.com <br>
                            pyrusstudio@outlook.com <br>
                        </div>
                    </li>

                    <li class="online" style="padding-bottom: 20px;">
                        <div class="body" style="padding-left: 50px;">
                            Llamanos: <br>
                            968637864 <br>
                        </div>
                    </li>

                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{ asset('admin/images/ICON02.png') }}" alt="">
                                <div class="media-body">
                                    <span class="name">Pyrus HD</span>
                                    <span class="message"><a href="https://pyrushd.com/"
                                                             target="_blank">www.pyrushd.com</a></span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="online" style="padding-bottom: 20px;">
                        <div class="body" style="padding-left: 50px;">
                            Escribenos: <br>
                            soporte@pyrushd.com <br>
                            pyrushd@hotmail.com <br>
                        </div>
                    </li>

                    <li class="online" style="padding-bottom: 20px;">
                        <div class="body" style="padding-left: 50px;">
                            Llamanos: 995374822
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
