<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class=""><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
      <ul>
        <li><a href="{{ url('/admin/add-category') }}">Add Category</a></li>
        <li><a href="{{ url('/admin/view-categories') }}">View Category</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Events</span></a>
      <ul>
        <li><a href="{{ url('/admin/add-event') }}">Add Event</a></li>
        <li><a href="{{ url('/admin/view-event') }}">View Event</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Users</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-user') }}">View User</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Reservations</span></a>
      <ul>
        <li><a href="{{ url('/admin/view-reservation') }}">View Reservations</a></li>
      </ul>
    </li>
    <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    
  </ul>
</div>
<!--sidebar-menu-->