    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
        <p class="app-sidebar__user-name">John Doe</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
        <a class="app-menu__item active" href="#"
            ><i class="app-menu__icon fa fa-dashboard"></i
            ><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
        <a class="app-menu__item"
            href="{{ route('admin.categories.index') }}"><i class="app-menu__icon fa fa-tag"></i>
        <span class="app-menu__label">Category</span>
        </a>
        </li>
    </ul>
    </aside>