<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>System Dashboard - Role Management & Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th, td {
            text-align: center;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #035c2b;
            color: white;
        }
        button {
            padding: 6px 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .role-select, .register-form select {
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }
        .register-form input, .register-form select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .register-form button {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>User Role Management</h2>
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Current Role</th>
                    <th>Edit Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Waad Hussien</td>
                    <td>waad@gmail.com</td>
                    <td>IT Admin</td>
                    <td>
                        <select class="role-select">
                            <option value="it_admin" selected>IT Admin</option>
                            <option value="researcher">Researcher</option>
                            <option value="reviewer">Reviewer</option>
                            <option value="researcher_reviewer">Researcher-Reviewer</option>
                            <option value="independent_researcher">Independent Researcher</option>
                            <option value="independent_reviewer">Independent Reviewer</option>
                        </select>
                    </td>
                    <td><button onclick="alert('Role updated')">Save</button></td>
                </tr>


                <td>Jomanh seed</td>
                    <td>waad@gmail.com</td>
                    <td>IT Admin</td>
                    <td>
                        <select class="role-select">
                            <option value="it_admin" selected>IT Admin</option>
                            <option value="researcher">Researcher</option>
                            <option value="reviewer">Reviewer</option>
                            <option value="researcher_reviewer">Researcher-Reviewer</option>
                            <option value="independent_researcher">Independent Researcher</option>
                            <option value="independent_reviewer">Independent Reviewer</option>
                        </select>
                    </td>
                    <td><button onclick="alert('Role updated')">Save</button></td>
                </tr>
                <td>Waad Hussien</td>
                    <td>waad@gmail.com</td>
                    <td>IT Admin</td>
                    <td>
                        <select class="role-select">
                            <option value="it_admin" selected>IT Admin</option>
                            <option value="researcher">Researcher</option>
                            <option value="reviewer">Reviewer</option>
                            <option value="researcher_reviewer">Researcher-Reviewer</option>
                            <option value="independent_researcher">Independent Researcher</option>
                            <option value="independent_reviewer">Independent Reviewer</option>
                        </select>
                    </td>
                    <td><button onclick="alert('Role updated')">Save</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Create New User Account</h2>
        <form class="register-form" method="POST" action="{{ route('register.submit') }}">
            @csrf
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            
            <select name="role" required>
                <option value="">-- Select Role --</option>
                <option value="it_admin">IT Admin</option>
                <option value="researcher">Researcher</option>
                <option value="reviewer">Reviewer</option>
                <option value="researcher_reviewer">Researcher-Reviewer</option>
                <option value="independent_researcher">Independent Researcher</option>
                <option value="independent_reviewer">Independent Reviewer</option>
            </select>

            <button type="submit">Create Account</button>
        </form>
    </div>

</body>
<script>
    function updateRole(button) {
        const row = button.closest('tr');
        const email = row.cells[1].innerText;
        const role = row.querySelector('.role-select').value;

        fetch('/update-role', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ email, role })
        })
        .then(res => res.json())
        .then(data => alert(data.message))
        .catch(error => alert('Error updating role'));
    }
</script>
</html>
