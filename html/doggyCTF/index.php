<!DOCTYPE html>
<html lang="en">
    	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="icon" href="https://i.imgur.com/PLRLVYP.png">
        <title>DoggyCTF</title>

        <!-- Fonts Defualt Nunito-->
        <link href="https://unpkg.com/nes.css@2.2.1/css/nes.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fontlibrary.org/face/press-start-2p" type="text/css"/>
	

        <!-- Styles -->
        <style>
        html, body {
                background-color: #000000;
                color: #32CD32;
                font-weight: 100;
                height: 100vh;
                margin-top: 10;
        }

        .full-height {
                height: 100vh;
        }
        .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
        }
	.position-ref {
                position: relative;
        }
	.code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
	}
        .message {
                font-size: 12px;
                text-align: center;
        }
	.UPtext {
		font-size: 20px;
		text-align:left;
	}
	.Rtext {
		font-size: 16px;
		text-align:right;
	}
	.find{
		justify-content:center;
	}
	.button {
	  display: inline-block;
	  border-radius: 4px;
	  background-color: #32CD32;
	  border: none;
	  color: #000000;
	  text-align: center;
	  font-size: 14px;
	  padding: 10px;
	  width: 200px;
	  transition: all 0.5s;
	  cursor: pointer;
	  margin: 5px;
	}
	.button span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}
	.button span:after {
	  content: '\00bb';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}
	.button:hover span {
		padding-right: 25px;
	}
	.button:hover span:after {
	  	opacity: 1;
		right: 0;
	}
	.up{
		background-color: #0f0f0f;
	}
        </style>
    	</head>
	<body>
		<div class="up Rtext">
        	Login:
	        <button class="button" id="Login" style="vertical-align:middle">
        	<span>GO</span>
	        </button>
        	<script type="text/javascript">
                	var LogUrl = "https://yiarashi.com/user9/doggyCTF/login/"
                	var elem = document.getElementById("Login")
                	elem.addEventListener("click",e=>{
                        	window.open(LogUrl,"_blank")
                	})
	        </script>
        	</div>
		<div class="message">
		<pre>
      ___           ___           ___           ___           ___           ___           ___           ___     
     /\  \         /\  \         /\  \         /\  \         |\__\         /\  \         /\  \         /\  \    
    /::\  \       /::\  \       /::\  \       /::\  \        |:|  |       /::\  \        \:\  \       /::\  \   
   /:/\:\  \     /:/\:\  \     /:/\:\  \     /:/\:\  \       |:|  |      /:/\:\  \        \:\  \     /:/\:\  \  
  /:/  \:\__\   /:/  \:\  \   /:/  \:\  \   /:/  \:\  \      |:|__|__   /:/  \:\  \       /::\  \   /::\~\:\  \ 
 /:/__/ \:|__| /:/__/ \:\__\ /:/__/_\:\__\ /:/__/_\:\__\     /::::\__\ /:/__/ \:\__\     /:/\:\__\ /:/\:\ \:\__\
 \:\  \ /:/  / \:\  \ /:/  / \:\  /\ \/__/ \:\  /\ \/__/    /:/~~/~    \:\  \  \/__/    /:/  \/__/ \/__\:\ \/__/
  \:\  /:/  /   \:\  /:/  /   \:\ \:\__\    \:\ \:\__\     /:/  /       \:\  \         /:/  /           \:\__\  
   \:\/:/  /     \:\/:/  /     \:\/:/  /     \:\/:/  /     \/__/         \:\  \        \/__/             \/__/  
    \::/__/       \::/  /       \::/  /       \::/  /                     \:\__\                                
     ~~            \/__/         \/__/         \/__/                       \/__/                                
		</pre>
		</div>
	<div class="up UPtext">
        &nbsp;Web:<br>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="button" id="admin" style="vertical-align:middle">
        <span>admin login</span>
        </button>
        <script type="text/javascript">
                var LoginUrl = "https://yiarashi.com/user9/doggyCTF/gameF/login/"
                var elem = document.getElementById("admin")
                elem.addEventListener("click",e=>{
                        window.open(LoginUrl,"_blank")
                })
        </script>
        <button class="button" id="CLASSIFIED" style="vertical-align:middle">
        <span>CLASSIFIED</span>
        </button>
        <script type="text/javascript">
                var ClassifiedUrl = "https://yiarashi.com/user9/doggyCTF/gameF/classified/"
                var elem = document.getElementById("CLASSIFIED")
                elem.addEventListener("click",e=>{
                        window.open(ClassifiedUrl,"_blank")
                })
        </script>
        </div>
	</body>
</html>
