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
              
                <td>
                <form action="{{ route('ITAdminAccount.manage-users.delete', $faculty_member->id)}}" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="action-btn">Delete</button>
                </form>

                <button class="action-btn">
                <a href="{{ route('ITAdminAccount.manage-users.edit',$faculty_member->id)}}">Edit</a>
                </button>
                </td>
              </tr>
              @endforeach
        
            </tbody>
          </table>
        </div>
    </div>

          <div class="custom-pagination">
            @if ($faculty_members->onFirstPage())
                <span class="arrow disabled">←</span>
            @else
                <a href="{{ $faculty_members->previousPageUrl() }}" class="arrow">←</a>
            @endif

            <span class="page-number">{{ $faculty_members->currentPage() }} / {{ $faculty_members->lastPage() }}</span>

            @if ($faculty_members->hasMorePages())
                <a href="{{ $faculty_members->nextPageUrl() }}" class="arrow">→</a>
            @else
                <span class="arrow disabled">→</span>
            @endif
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
