<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Reviewers List</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Journals/Choose-Ed.css') }}">
    <link rel="stylesheet" href="{{ asset('hakkem/css/Header-Footer.css') }}">
</head>

<body>
    @include('include.Header')

    <!-- Form to assign editor -->
    <form id="assign-form" method="POST" action="{{ route('assign.editor') }}">
        @csrf
        <input type="hidden" name="editor_id" id="editor-id">
        <input type="hidden" name="research_id" value="{{ $research->id }}">
    </form>

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
                @foreach ($editors as $editor)
                <tr data-id="{{ $editor->id }}">
                    <td>{{ $editor->name }}</td>
                    <td>{{ $editor->specialization }}</td>
                    <td><button type="button" class="send-btn">Send</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.querySelectorAll('.send-btn').forEach(button => {
            button.addEventListener('click', function () {
                const editorId = this.closest('tr').getAttribute('data-id');
                document.getElementById('editor-id').value = editorId;
                document.getElementById('assign-form').submit();
            });
        });
    </script>

    @include('include.Footer')
</body>

</html>

