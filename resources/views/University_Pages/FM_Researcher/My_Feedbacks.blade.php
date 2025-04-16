<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Requests.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />


    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Requests.js') }}"></script>
  </head>
  <body>
    @include('include.header')
    <div class="container">
      @include('include.res-sidebar')

      <main class="content">
        <table>
          <thead>
            <tr>
              <th>Request Number</th>
              <th>Request Type</th>
              <th>Show Feedback</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>---</td>
              <td>---</td>

              <td>
                <div class="action-buttons">
                  <a href="{{-- route('researcher-account.My_Requests.Request_Details')--}}">
                  <button class="details"><img src="{{ asset('hakkem/images/University/pdf icon.png') }}" alt="PDF"></button>
                  </a>
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
