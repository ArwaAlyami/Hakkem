<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Universty/IT Admin/ManageUsers.css')}}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css')}}" />

</head>

<body>
    <!-- HEADER -->
    @include('include.header')


     <!--السايد بار-->

     <div class="container2">
     @include('include.itsidebar')

      <!--السايد بار-->
      

      
        <!-- Table الأعضاء -->
      <div class="container">
          <table class="member-table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Academic Rank</th>
                <th>Role</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($faculty_members as $key=>$faculty_member)
              <tr>
                <td style="color: grey;">{{++$key}}</td>
                <td style="color: grey;">{{$faculty_member->f_name}}</td>
                <td style="color: grey;">{{$faculty_member->l_name}}</td>
                <td style="color: grey;">{{$faculty_member->email}}</td>
                <td style="color: grey;">{{$faculty_member->department}}</td>
                <td style="color: grey;">{{$faculty_member->rank}}</td>
                <td style="color: grey;">{{$faculty_member->roles[0]->name}}</td>

                <td>

                @can('member_delete')
                <form action="{{ route('ITAdminAccount.manage-users.delete', $faculty_member->id)}}" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="action-btn">Delete</button>
                </form>
                @endcan


                @can('member_edit')
                <button class="action-btn">
                <a href="{{ route('ITAdminAccount.manage-users.edit',$faculty_member->id)}}">Edit</a>
                </button>
                @endcan 

                </td>
              </tr>
              @endforeach
        
            </tbody>
          </table>
        </div>
    </div>

      <!-- زر الإضافة -->

      @can('member_create')
            <div class="add-member-container">
              <a href="{{ route('ITAdminAccount.manage-users.create') }}">
                <button class="add-member-btn">+ Add Member</button>
              </a>
            </div>
      @endcan
            
        <!-- FOOTER -->
        @include('include.footer')
        <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>
  </body>
</html>
