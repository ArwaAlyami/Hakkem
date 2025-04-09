<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Requests</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/UniversityPages/FM_Researcher/My_Requests.css') }}" />
    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Requests.js') }}"></script>
  </head>
  <body>
    <div class="container">
      @include('include.sidebar')

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
              <th>Request Number</th>
              <th>Price</th>
              <th>Request Type</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>AAA</td>
              <td>AAA SAR</td>
              <td>AAA</td>
              <td>111</td>
              <td>111</td>
              <td>
                <div class="action-buttons">
                  <a href="{{ route('researcher-account.My_Requests.Request_Details')}}">
                  <button class="details">Details</button>
                  </a>
                  <button class="status completed">Completed</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </main>
    </div>
  </body>
</html>
