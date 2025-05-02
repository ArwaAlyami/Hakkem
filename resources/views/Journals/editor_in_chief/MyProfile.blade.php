<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editor In Chief Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/MyProfile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
    <script src="{{ asset('hakkem/javascript/University/FM_Researcher/My_Profile.js') }}" defer></script>
</head>

<body>
    @include('include.Header')

    <div class="main-container">
        @include('include.Chief-Ed-Sidebar')

        <div class="fields-container">
            <button class="Edit-button" id="editBtn">Edit</button>

            <form action="{{ route('editor.update.profile') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="input-row">
                    <div>
                        <label>First Name:</label>
                        <input type="text" id="firstName" name="first_name" value="{{ $user->first_name }}"
                            placeholder="Enter your first name" disabled oninput="validateText(this)" />
                    </div>
                    <div>
                        <label>Last Name:</label>
                        <input type="text" id="lastName" name="last_name" value="{{ $user->last_name }}"
                            placeholder="Enter your last name" disabled oninput="validateText(this)" />
                    </div>
                </div>

                <div class="input-row">
                    <div>
                        <label>Journal:</label>
                        <input type="text" id="Journal" name="journal" value="{{ $user->journal }}"
                            placeholder="Enter your Journal's name" disabled oninput="validateText(this)" />
                    </div>
                    <div>
                        <label>Email:</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}"
                            placeholder="example@email.com" disabled oninput="validateEmail(this)" />
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" id="saveBtn" disabled>Save changes</button>
                    <button type="button" id="cancelBtn" disabled>Cancel</button>
                </div>
            </form>
        </div>
    </div>

    @include('include.Footer')
</body>

</html>
