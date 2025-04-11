<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Requests - Hakkem</title>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Reviewer/My_Requests.css') }}" />
<link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
<link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />



<!-- ✅ JavaScript -->
<script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Requests.js') }}"></script>


  </head>
  <body>
    @include('include.header')

    <div class="container">

      @include('include.rev-sidebar')




      <main class="content">
        <div class="filter">
          <button class="active">All</button>
          <button>Promotion Requests</button>
          <button>Publish Requests</button>
          <button>Review Requests</button>
        </div>

        <table>
          <thead>
            <tr>
              <th>Request ID</th>
              <th>Price</th>
              <th>Request Type</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1145826730</td>
              <td>200 SAR</td>
              <td>Review</td>
              <td>Jan 23, 2025, 13:00 PM</td>
              <td>Mar 03, 2025, 11:00 AM</td>
              <td>
                <div class="action-buttons">
                  <button class="details">Details</button>
                  <button class="status completed">Completed</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>4253758933</td>
              <td>150 SAR</td>
              <td>Publication</td>
              <td>Feb 11, 2025, 1:00 PM</td>
              <td>-</td>
              <td>
                <div class="action-buttons">
                  <button class="details">Details</button>
                  <button class="status track">Track</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>7324901982</td>
              <td>-</td>
              <td>Promotion</td>
              <td>Jun 03, 2025, 6:00 PM</td>
              <td>Jun 03, 2025, 9:00 PM</td>
              <td>
                <div class="action-buttons">
                  <button class="details">Details</button>
                  <button class="status completed">Completed</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>1062789340</td>
              <td>100 SAR</td>
              <td>Publication</td>
              <td>Mar 30, 2025, 14:00 PM</td>
              <td>Oct 30, 2025, 17:00 PM</td>
              <td>
                <div class="action-buttons">
                  <button class="details">Details</button>
                  <button class="status completed">Completed</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </main>
    </div>

    @include('include.footer')
    </body>
</html>
