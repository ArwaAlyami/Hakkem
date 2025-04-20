<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Reviewers List</title>
    <link rel="stylesheet" href="hakkem\css\Journals\Choose-Ed.css">
    <link rel="stylesheet" href="hakkem\css\Header-Footer.css">
</head>

<body>
    @include('include.Header')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="reviewerList">
                <tr data-specialization="ai">
                    <td>Dr. Ali Ahmad</td>
                    <td>Artificial Intelligence</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="cyber">
                    <td>Dr. Sarah Al-Mutairi</td>
                    <td>Cybersecurity</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="cis">
                    <td>Manar Ali </td>
                    <td>Computer Info Systems</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="ds">
                    <td>Arwa Mubark</td>
                    <td>Data Science</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="robotics">
                    <td>Dr. Dana Al-Fahad</td>
                    <td>Robotics</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="cloud">
                    <td>Dr. Lujain Al-Rowais</td>
                    <td>Cloud Computing</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="ds">
                    <td>Jomanah Al-Qahtani</td>
                    <td>Data Science</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="cis">
                    <td>Waad Hussien </td>
                    <td>Computer Info Systems</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="se">
                    <td>Arwa Al-Sarar</td>
                    <td>Software Engineering</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="ds">
                    <td>Khaled Adel</td>
                    <td>Data Science</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="cyber">
                    <td>Sami Hussein</td>
                    <td>Cybersecurity</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
                <tr data-specialization="robotics">
                    <td>Dr. Ahmad Al-Shammari</td>
                    <td>Robotics</td>
                    <td><button class="send-btn">Send</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('include.Footer')
</body>

</html>