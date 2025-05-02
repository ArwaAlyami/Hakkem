<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Of Reviewers</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/List-Of-Reviewers.css') }}">
</head>

<body>
    @include('include.Header')

    <div class="container">
        <main class="content">
            <h2><span class="highlight">List ID: </span> #1234567890</h2>
            <table>
                <tbody>
                    @foreach($reviewers as $reviewer)
                        <tr>
                            <td>{{ $reviewer->name }}</td>
                            <td>{{ $reviewer->affiliation }}</td>
                            <td class="last">
                                <p>{{ $reviewer->email }}</p>
                                <div class="action-buttons">
                                    <button class="send">Send</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                <thead>
                    <tr>
                        <th>Name of Reviewer</th>
                        <th>Affeliation</th>
                        <th class="lst">Email</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Dr. Abdullah Al-Ghamdi</td>
                        <td>Department of Computer Information Systems ,Najran University. Najran, Saudi Arabia.</td>
                        <td class="last">
                            <p>Abdullah@nu.edu.sa</p>
                            <div class="action-buttons">
                                <button class="send">Send</button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Dr. Abdullah Al-Ghamdi</td>
                        <td>Department of Computer Information Systems ,Najran University. Najran, Saudi Arabia.</td>
                        <td class="last">
                            <p>Abdullah@nu.edu.sa</p>
                            <div class="action-buttons">
                                <button class="invite">Invite</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    @include('include.Footer')
</body>

</html>
