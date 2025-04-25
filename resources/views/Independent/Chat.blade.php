<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Chat Interface</title>
    <link rel="stylesheet" href="{{ asset('hakkem/css/Independent/Chat.css') }}" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="chat-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="tabs">
                <button class="tab-btn active" data-tab="groups">
                    <img src="/Hakkem/public/images/Chat/group-icon.png" alt="Groups" class="icon-group" />
                </button>
                <button class="tab-btn" data-tab="users">
                    <img src="/Hakkem/public/images/Chat/user-icon.png" alt="Users" class="icon-user" />
                </button>
            </div>


            <div class="contact-list" id="groups-list">
                <div class="contact active" data-name="Insight Hub">Insight Hub </div>
                <div class="contact" data-name="Design Squad">Design Squad</div>
                <div class="contact" data-name="Marketing">Marketing</div>
            </div>

            <div class="contact-list hidden" id="users-list">
                <div class="contact" data-name="Waad Hussein">Waad Hussein</div>
                <div class="contact" data-name="Manar Ali">Manar Ali</div>
                <div class="contact" data-name="Jomanh Saeed">Jomanh Saeed</div>
                <div class="contact" data-name="Arwa Abdulaah">Arwa Abdulaah</div>
                <div class="contact" data-name="Arwa Mobark">Arwa Mobark</div>
            </div>
        </div>

        <div class="chat-box">
            <div class="chat-header">
                <span class="chat-name">Insight Hub </span>
                <i class="fas fa-user icon-right"></i>
            </div>

            <div class="chat-messages">
                <div class="message received">Hello team, updates?</div>
                <div class="message sent">Design is done!</div>
            </div>

            <div class="chat-input">
                <div class="input-wrapper">
                    <!-- زر الإرفاق داخل حقل الإدخال -->
                    <label for="fileUpload" class="attach-inside">
                        <img src="/Hakkem/public/images/Chat/attach-icon.png" alt="Attach" class="attach-icon" />
                    </label>
                    <input type="file" id="fileUpload" style="display: none;" multiple />

                    <input type="text" placeholder="Type here..." id="msgInput" />
                </div>

                <!-- زر الإرسال -->
                <button id="sendBtn">
                    <img src="/Hakkem/public/images/Chat/send-icon.png" alt="Send" class="send-icon" />
                </button>
            </div>



        </div>
    </div>

    <script src="{{asset('/public/hakkem/javascript/Chat.js')}}"></script>
</body>

</html>