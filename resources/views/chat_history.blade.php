<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat History</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <link rel="stylesheet" href="{{ asset('hakkem/css/Sidebar.css') }}" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        .container {
        margin-top: 10px;
        margin-left: 20px;
        display: flex;
        }
        .chat-his{
            width: 1300px;
            margin-bottom:40px; 
        }
        .chat-entry {
            margin: 30px;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .chat-entry h4 {
            margin-bottom: 10px;
            color: #333;
        }
        .chat-entry p {
            margin: 5px 0;
        }
        .prompt {
            font-weight: bold;
        }
        .response {
            margin-left: 15px;
        }
    </style>
</head>
<body>
    @include('include.header')

    <div class="container">

        @include('include.res-sidebar')

    <div class="chat-his">
    <h2>Your Chat History</h2>

    @forelse($histories as $history)
        <div class="chat-entry">
            <p class="prompt"><b>🗨️ You : </b> <br> <br> {{ $history->prompt }}</p>
            <br> <br>
            <p class="response"><b> 🤖 HakkemGPT : </b> <br> <br> {{ $history->response }}</p>
            <small>🕒 {{ $history->created_at->diffForHumans() }}</small>
        </div>
    @empty
        <p>No chat history available.</p>
    @endforelse
    </div>

    </div>
    @include('include.footer')
</body>
</html>