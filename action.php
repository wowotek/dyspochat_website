<!DOCTYPE html>
<html class="has-background-grey-darker" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script defer src="jquery.js"></script>
    <script defer src="fontawesome.js"></script>
    <link rel="stylesheet" href="bulma.css">
</head>

<?php 
session_start();
?>

<body style="margin-left: 10%; margin-right: 10%;">
    <div class="columns" style="transform: translate(0%, 110%)">
        <div class="column">
            <div class="box" style="background-color: black">
                <h2 class="title has-text-centered has-text-warning">
                    Join Chat
                </h2>
                <hr>
                <?php
                ?>
                <form action="/chat_join.php" method="POST">
                    <div class="field">
                        <label class="label has-text-warning is-4">Chat Session-ID</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input has-background-grey has-text-white" type="text" minlength="6" maxlength="16"
                                size="16" pattern="[A-Za-z0-9]{6,16}" name="chat_id">
                            <span class="icon is-small is-left">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                    </div>
                    <br>
        
                    <div class="field has-addons has-addons-right">
                        <p class="control">
                            <button type="submit" class="button is-warning">Wire Me To It Please?</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="column">
            <div class="box" style="background-color: black">
                <h2 class="title has-text-centered has-text-warning">
                    Create Chat
                </h2>
                <hr>
                <form action="/chat_create.php" method="POST">
                    <div class="field is-fullwidth">
                        <p class="control is-fullwidth">
                            <button type="submit" class="button is-warning is-fullwidth">Create My Own Chatroom NOW!</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>