<div id="chat-icon">💬 AI Chat</div>

<div id="chat-box">

    <div id="chat-header">
        AI Assistant
    </div>

    <div id="chat-body"></div>

    <div id="chat-footer">

        <input
            type="text"
            id="userMessage"
            placeholder="Ask me anything...">

        <button onclick="sendMessage()">Send</button>

    </div>

</div>

<style>

#chat-icon{

position:fixed;

bottom:20px;

right:20px;

background:#0d6efd;

color:white;

padding:15px 20px;

border-radius:30px;

cursor:pointer;

font-weight:bold;

z-index:9999;

}

#chat-box{

display:none;

position:fixed;

right:20px;

bottom:80px;

width:320px;

height:420px;

background:white;

border-radius:10px;

box-shadow:0 0 15px rgba(0,0,0,.3);

overflow:hidden;

z-index:9999;

}

#chat-header{

background:#0d6efd;

color:white;

padding:15px;

font-size:18px;

font-weight:bold;

}

#chat-body{

height:300px;

overflow-y:auto;

padding:10px;

font-size:14px;

}

#chat-footer{

display:flex;

padding:10px;

}

#userMessage{

flex:1;

padding:8px;

}

#chat-footer button{

margin-left:5px;

}

.user{

text-align:right;

margin:8px;

color:blue;

}

.bot{

text-align:left;

margin:8px;

color:green;

}

</style>

<script>

document.getElementById("chat-icon").onclick = function () {

    var box = document.getElementById("chat-box");

    if (box.style.display == "block") {

        box.style.display = "none";

    } else {

        box.style.display = "block";

        if (document.getElementById("chat-body").innerHTML == "") {

            document.getElementById("chat-body").innerHTML =
                "<div class='bot'><b>AI Assistant:</b><br><br>Hello 👋 Welcome to AI-Solutions.<br><br>I can help you with:<br>• Services<br>• Pricing<br>• Contact Information<br><br>Try typing <b>services</b>.</div>";

        }

    }

}

function sendMessage(){

var input=document.getElementById("userMessage");

var message=input.value.trim();

if(message=="") return;

document.getElementById("chat-body").innerHTML+=
"<div class='user'><b>You:</b> "+message+"</div>";

fetch("chatbot_response.php",{

method:"POST",

headers:{

"Content-Type":"application/x-www-form-urlencoded"

},

body:"message="+encodeURIComponent(message)

})

.then(response=>response.text())

.then(data=>{

document.getElementById("chat-body").innerHTML+=
"<div class='bot'><b>Bot:</b> "+data+"</div>";

document.getElementById("chat-body").scrollTop=
document.getElementById("chat-body").scrollHeight;

});

input.value="";

}

</script>