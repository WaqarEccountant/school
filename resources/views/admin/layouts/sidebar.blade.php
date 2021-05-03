<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->

    <div class="logo">
        <a href="{{route('admin.dashboard')}}" class="simple-text logo-mini">
            <img src="{{asset("admin-assets/img/favicon.png")}}" alt="">
        </a>
        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
            {{config('app.name')}}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{is_active('admin.dashboard')}}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{is_active('admin.exam-types.index')}}">
                <a href="{{route('admin.exam-types.index')}}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Exam Types</p>
                </a>
            </li>
            <li class="{{is_active('admin.subjects.index')}}">
                <a href="{{route('admin.subjects.index')}}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Subjects</p>
                </a>
            </li>
            <li class="{{is_active('admin.exams.index')}}">
                <a href="{{route('admin.exams.index')}}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Exams</p>
                </a>
            </li>
            <li class="{{is_active('admin.users.index')}}">
                <a href="{{route('admin.users.index')}}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="{{is_active('admin.setting')}}">
                <a href="{{route('admin.setting')}}">
                    <i class="now-ui-icons loader_gear"></i>
                    <p>Settings</p>
                </a>
            </li>


        </ul>
    </div>
</div>
