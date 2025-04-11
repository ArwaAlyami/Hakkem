<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
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
              <form action="{{-- route('',$role->id)--}}" method="post" >
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button class="action-btn">Delete</button>
              </form>
    
              <button class="action-btn">
              <a href="{{-- route('',$role->id)--}}">Edit</a>
              </button>
              </td>
            </tr>
            @endforeach
    
          </tbody>
        </table>
        {{ $roles->appends(request()->query())->links() }}
      </div>

    </div>

    <!-- FOOTER -->

    @include('include.footer')

    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
</body>

</html>
