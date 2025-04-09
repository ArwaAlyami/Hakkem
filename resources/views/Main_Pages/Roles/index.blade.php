<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css') }}" />


</head>

<body>
    <!-- HEADER -->
    <div class="center">
        <header>
            <div class="logo-placeholder">
                <img src="{{ asset('hakkem/images/White-logo.png') }}" alt="logo" />
                <h1 class="brandname">HAKKEM</h1>
            </div>
            <div class="nav">
                <div class="nav-cont">
                    <a href="{{-- route('') --}}" class="navigate">Home</a>
                    <a href="{{-- route('') --}}" class="navigate">Chat</a>
                    <a href="{{-- route('') --}}" class="navigate">Offers</a>
                    <a href="{{-- route('') --}}" class="navigate">Journals</a>
                </div>
            </div>
    
       </header>
    </div>
    
    <!--السايد بار-->
    <aside class="sidebar">
        <ul>
            <li class="sidebar-item active">
                <a href="{{ route('roles.index') }}">
                    <img src="{{ asset('hakkem/images/University/Manage-users icon.png')}}" alt="Profile">
                    Roles
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('ITAdminAccount.manage-users.index') }}">
                    <img src="{{ asset('hakkem/images/University/Manage-users icon.png') }}" alt="Manage">
                    Manage Users
                </a>
            </li>

            <li class="sidebar-item">
                <a href="{{ route('Get_Started') }}">
                    <img src="{{ asset('hakkem/images/University/Sign-out icon.png') }}" alt="Sign Out">
                    Sign Out
                </a>
            </li>
        </ul>
    </aside>

    <div class="container">
        <table class="member-table">
          <thead>
            <tr>
                <th>No.</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
    
            @foreach($roles as $key=>$role)
            <tr>
              <td style="color: grey;">{{++$key}}</td>
              <td style="color: grey;">{{$role->name}}</td>     

              <td>
              <form action="{{-- route('',$role->id)--}}" method="post" >
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button class="action-btn">Delete</button>
              </form>
    
              <button class="action-btn">
              <a href="{{ route('roles.create',$role->id)}}">Show</a>
              </button>
              </td>
            </tr>
            @endforeach
    
          </tbody>
        </table>
        {{ $roles->appends(request()->query())->links() }}
      </div>



    <!-- FOOTER -->
    <div class="center">
        <footer>
            <div class="left">
            <a href="{{-- route('')--}}">
                <p class="Footer-link">Pivacy Policy</p>
            </a>
                <p>|</p>
            <a href="{{ route('About_Hakkem')}}">
                <p class="Footer-link">About Hakkem</p>
            </a>
            </div>
            <div class="Mid">
                <p>© 2025 Hakkem. All Rights Reserved.</p>
            </div>
            <div class="right">
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Phone_light.png') }} " />
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_light.png') }}" />
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-X_light.png') }}" />
            </div>
        </footer>
    </div>
    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
    <script src="{{ asset('hakkem/javascript/sidebar.js') }}"></script>
</body>

</html>
