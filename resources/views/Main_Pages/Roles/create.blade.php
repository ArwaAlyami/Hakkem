<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    {{-- <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/Permission.css')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css') }}" />

    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />



</head>

<body>
    <!-- HEADER -->
    
    @include('include.header')

    <div class="container2">


    <!--السايد بار-->
    @include('include.itsidebar')

    
     <!--السايد بار-->


    <form action="{{ route('roles.store')}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('post') }}

        <div class="container">

            <h2>Roles and Permissions:</h2>

            <div class="form-group-inline2">
                <label>Role Name:</label>
                <input type="text" id="RoleName" name="name">
            </div>


            <div class="permissions">
                @foreach($permissions as $key => $permissionGroups)

                    <h3>{{$key}}</h3>

                    @foreach($permissionGroups as $permission)
                        <div class="permission-item">
                            <label><input type="checkbox" id="permissions_name" name="permissions_name[]"
                                    value="{{$permission->name}}" />{{$permission->name}}</label>
                        </div>

                    @endforeach
                @endforeach
            </div>
        </div>
        
        <div class="add-member-container">
            <button class="add-member-btn" type="submit">Assign Permission</button>
        </div>

    </form>

</div>


    <!-- FOOTER -->

    @include('include.footer')
    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
</body>

</html>
