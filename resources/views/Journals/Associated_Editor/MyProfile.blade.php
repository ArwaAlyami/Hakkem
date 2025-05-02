<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Associated Editor Profile</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/MyProfile.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />
</head>
<body>
    @include('include.Header')

    <div class="main-container">
        @include('include.Associated-Ed-Sidebar')

        <div class="fields-container">
            <button class="Edit-button" id="editBtn">Edit</button>

            <!-- ✅ نموذج التعديل -->
            <form action="{{ route('my.profile.update') }}" method="POST" id="profileForm">
                @csrf
                @method('PUT')

                <!-- الاسمين -->
                <div class="input-row">
                    <div>
                        <label>First Name:</label>
                        <input type="text" name="first_name" id="firstName" value="{{ $user->first_name }}" disabled
                            oninput="validateText(this)" />
                    </div>
                    <div>
                        <label>Last Name:</label>
                        <input type="text" name="last_name" id="lastName" value="{{ $user->last_name }}" disabled
                            oninput="validateText(this)" />
                    </div>
                </div>

                <!-- البريد والتخصص -->
                <div class="input-row">
                    <div>
                        <label>Email:</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" disabled
                            oninput="validateEmail(this)" />
                    </div>
                    <div>
                        <label>Specialization:</label>
                        <input type="text" name="specialization" id="Journal" value="{{ $user->specialization }}" disabled
                            oninput="validateText(this)" />
                    </div>
                </div>

                <!-- الأزرار -->
                <div class="buttons">
                    <button type="submit" id="saveBtn" disabled>Save changes</button>
                    <button type="button" id="cancelBtn" disabled>Cancel</button>
                </div>
            </form>
        </div>
    </div>

    @include('include.Footer')
    <script>
        const editBtn = document.getElementById('editBtn');
        const saveBtn = document.getElementById('saveBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const formInputs = document.querySelectorAll('#profileForm input');

        editBtn.addEventListener('click', () => {
            formInputs.forEach(input => input.disabled = false);
            saveBtn.disabled = false;
            cancelBtn.disabled = false;
        });

        cancelBtn.addEventListener('click', () => {
            window.location.reload();
        });
    </script>
</body>
</html>
