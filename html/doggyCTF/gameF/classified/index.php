<!DOCTYPE html>
<html lang="en">
    	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Classified</title>

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
                font-size: 10px;
                text-align: center;
        }
	.UPtext {
		font-size: 20px;
		text-align:left;
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
	  width: 120px;
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
		<div class="message">
		<pre>
      ___           ___       ___           ___           ___                       ___                       ___           ___     
     /\  \         /\__\     /\  \         /\  \         /\  \          ___        /\  \          ___        /\  \         /\  \    
    /::\  \       /:/  /    /::\  \       /::\  \       /::\  \        /\  \      /::\  \        /\  \      /::\  \       /::\  \   
   /:/\:\  \     /:/  /    /:/\:\  \     /:/\ \  \     /:/\ \  \       \:\  \    /:/\:\  \       \:\  \    /:/\:\  \     /:/\:\  \  
  /:/  \:\  \   /:/  /    /::\~\:\  \   _\:\~\ \  \   _\:\~\ \  \      /::\__\  /::\~\:\  \      /::\__\  /::\~\:\  \   /:/  \:\__\ 
 /:/__/ \:\__\ /:/__/    /:/\:\ \:\__\ /\ \:\ \ \__\ /\ \:\ \ \__\  __/:/\/__/ /:/\:\ \:\__\  __/:/\/__/ /:/\:\ \:\__\ /:/__/ \:|__|
 \:\  \  \/__/ \:\  \    \/__\:\/:/  / \:\ \:\ \/__/ \:\ \:\ \/__/ /\/:/  /    \/__\:\ \/__/ /\/:/  /    \:\~\:\ \/__/ \:\  \ /:/  /
  \:\  \        \:\  \        \::/  /   \:\ \:\__\    \:\ \:\__\   \::/__/          \:\__\   \::/__/      \:\ \:\__\    \:\  /:/  / 
   \:\  \        \:\  \       /:/  /     \:\/:/  /     \:\/:/  /    \:\__\           \/__/    \:\__\       \:\ \/__/     \:\/:/  /  
    \:\__\        \:\__\     /:/  /       \::/  /       \::/  /      \/__/                     \/__/        \:\__\        \::/__/   
     \/__/         \/__/     \/__/         \/__/         \/__/                                               \/__/         ~~       
		</pre>
		</div>
	<div class="up UPtext">
        &nbsp;Link:&nbsp;
        <button class="button" id="doc" style="vertical-align:middle">
        <span>link</span>
        </button>
        <script type="text/javascript">
                var DocUrl = "https://docs.google.com/document/d/1pDSk1QyeHRe7ssypBEhjZ9ie-jeLDaTLWzFQqPbFjDg/edit?usp=sharing"
                var elem = document.getElementById("doc")
                elem.addEventListener("click",e=>{
                        window.open(DocUrl,"_blank")
		})
	</script>
                </div>
	</body>
</html>
