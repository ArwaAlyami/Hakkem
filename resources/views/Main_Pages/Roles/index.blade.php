<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Roles</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />

</head>

<body>
    <!-- HEADER -->
    
    @include('include.header')
    


    <div class="container2">
    
    <!--السايد بار-->
    @include('include.itsidebar')

     <!--السايد بار-->


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
              
              @can('role_delete')
              <form action="{{ route('roles.delete',$role->id)}}" method="post" >
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button class="action-btn">Delete</button>
              </form>
              @endcan
    
              @can('role_show')
              <button class="action-btn">
              <a href="{{ route('roles.show',$role->id)}}">Show</a>
              </button>
              @endcan

              </td>
            </tr>
            @endforeach
    
          </tbody>
        </table>
        {{ $roles->appends(request()->query())->links() }}

      </div>
    </div>

    @can('role_create')
    <div class="add-member-container">
      <a href="{{ route('roles.create',$role->id)}}">
      <button class="add-member-btn" type="submit">Add New Role</button>
    </a>
    </div>
    @endcan 

    <!-- FOOTER -->
    @include('include.footer')

    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
</body>

</html>
