<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <link rel="stylesheet" href="{{asset('css/stylee.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="chat-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Lexa Turk</h2>
            <a href="{{ route('chat') }}" class="new-chat">+ New Chat</a>
            <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout">
                        <i class='bx bx-log-out'></i> Logout
                    </button>
            </form>
        </div>
        
        <!-- Chat Window -->
        <div class="chat-window">
            <div class="chat-header">
                <span>Chat</span>
                <i class='bx bx-dots-horizontal-rounded'></i>
            </div>
            <div class="chat-body">
            </div>
            <div class="chat-footer">
                <input type="text" placeholder="Ask..." id="chat-input">
                <button id="send-btn"><i class='bx bx-send'></i></button>
            </div>
        </div>
    </div>
    <script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
