<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->

    <div class="logo">
        <a href="{{route('teacher.dashboard')}}" class="simple-text logo-mini">
            <img src="{{asset("assets/images/logo-icon.png")}}" alt="">
        </a>
        <a href="{{route('teacher.dashboard')}}" class="simple-text logo-normal">
            {{config('app.name')}}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{is_active('teacher.dashboard')}}">
                <a href="{{route('teacher.dashboard')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{is_active('teacher.subjects.index')}}">
                <a href="{{route('teacher.subjects.index')}}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Subjects</p>
                </a>
            </li>
            <li class="{{is_active('teacher.exam-types.index')}}">
                <a href="{{route('teacher.exam-types.index')}}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Exam Types</p>
                </a>
            </li>
            <li class="{{is_active('teacher.exams.index')}}">
                <a href="{{route('teacher.exams.index')}}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Exams</p>
                </a>
            </li>
            <li class="{{is_active('teacher.setting')}}">
                <a href="{{route('teacher.setting')}}">
                    <i class="now-ui-icons loader_gear"></i>
                    <p>Settings</p>
                </a>
            </li>


        </ul>
    </div>
</div>
