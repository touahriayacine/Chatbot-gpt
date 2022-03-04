<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home/index.css">
    <link rel="shortcut icon" href="../assets/icons/logo.png" type="image/x-icon">
    <title>ChatBOT</title>
</head>

<body>
    <nav>
        <div id="logo">
            <img src="../assets/icons/logo.png" id="logo-img" alt="">
            <div id="logo-name">
                <h4>ChatBOT</h4>
            </div>
        </div>
        <div id="links">
            <ul>
                <li>home</li>
                <li class="selected">chat</li>
                <li>contacts</li>
                <li>settings</li>
                <li>faqs</li>
                <li>terms of use</li>
                <li class="style"><img src="../assets/icons/search-interface-symbol.png" alt=""></li>
                <li>
                    <img src="../assets/icons/bell.png" alt="">
                    <div class="has-notif"></div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="main">
        <div id="search-bar">
            <div id="search-img"><img src="../assets/icons/search-interface-symbol.png" alt=""></div>
            <input type="text" placeholder="search">
        </div>
        <div id="contacts">
            <ul>
                 <?php require_once('../php/getContacts.php');?>
            </ul>
        </div>
        <div id="chat-container">
            <div id="chats">
                <ul>
                    <li class="other">
                        <div class="other-avatar">
                            <img src="../assets/profiles/1.jpg" />
                            <h5>09:00</h5>
                        </div>
                        <div class="list-messages">
                            <div class="other-mssg">
                                <p>
                                    Hi there. How are you?
                                </p>
                            </div>
                            <div class="other-mssg">
                                <p>
                                    Hi there. How are you?Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                                    placeat repellat, alias rerum aut iste vero dicta enim blanditiis facere ab
                                    temporibus dolorum doloremque aspernatur debitis? Consectetur velit in sit!
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="me">
                        <div class="mssg-me">
                            <p>Hi, I am coming there in few minutes. Please wait !! I'm in taxi right now.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="tools">
                <div id="chat-bar">
                    <img src="../assets/icons/smile.png" alt="" id="emoji">
                    <input type="text" placeholder="Type a message">
                    <img src="../assets/icons/file.png" alt="" id="add-file">
                </div>
                <div id="send-btn">
                    <img src="../assets/icons/send.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="../script/index.js"></script>
</body>

</html>