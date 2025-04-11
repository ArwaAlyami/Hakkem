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
          <th>No.</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Department</th>
          <th>Academic Rank</th>
          <th>Action</th>



        </tr>
      </thead>
      <tbody>

        <tr>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
          <td style="color: grey;">A</td>
 
         
         
          <td>
          <form action="{{-- route('ITAdminAccount.manage-users.delete')--}}" method="post" >
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <button class="action-btn">Delete</button>
          </form>

          <button class="action-btn">
          <a href="{{ route('ITAdminAccount.manage-users.edit')}}">Edit</a>
          </button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>
  <!-- زر الإضافة -->
        <div class="add-member-container">
          <a href="{{ route('ITAdminAccount.manage-users.create') }}">
            <button class="add-member-btn">+ Add Member</button>
          </a>
        </div>
        

    <!-- FOOTER -->
    @include('include.footer')

    <script src="{{ asset('hakkem/javascript/MyProfile.js') }}"></script>

</body>

</html>
