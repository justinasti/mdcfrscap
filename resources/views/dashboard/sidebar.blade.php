<div class="navbar-default sidebar" role="navigation">

    <div>

        <ul class="nav" id="side-menu">

            <li class="sidebar-search">

                <div class="input-group custom-search-form">

                    <input type="text" class="form-control" placeholder="Search...">

                    <span class="input-group-btn">

                    <button class="btn btn-default" type="button">

                        <i class="fa fa-search"></i>

                    </button>

                </span>

                </div>

                <!-- /input-group -->

            </li>

            <li>

                <a href="{{ route('index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>

            </li>

            <li>

                <a href="#"><i class="fa fa-file fa-fw"></i> Requests<span class="fa arrow" :after></span></a>

                <ul class="nav nav-second-level">

                <li>

                    <a href="{{ route('reservations/create') }}">Create</a>

                </li>

                <li>

                    <a href="{{ route('reservations/view') }}">View</a>

                </li>

                </ul>

            </li>

            <li>

                <a href="#"><i class="fa fa-building-o fa-fw"> </i> Facilities<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ route('facilities/create') }}">Create</a>

                    </li>

                    <li>

                        <a href="{{ route('facilities/view') }}">View</a>

                    </li>

                </ul>

                <!-- /.nav-second-level -->

            </li>

            <li>

                <a href="#"><i class="fa fa-gears fa-fw"></i> Equipments<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                <li>

                    <a href="{{ route('equipments/create') }}">Create</a>

                </li>

                <li>

                    <a href="{{ route('equipments/view') }}">View</a>

                </li>

                </ul>

            </li>

            <li>

                <a href=""><i class="fa fa-calendar-o fa-fw"></i> Calendar</a>

            </li>

        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->