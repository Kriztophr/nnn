<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang=pt> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang=pt> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang=pt> <![endif]-->
<!--[if gt IE 8]><!--> <html class=no-js lang=pt> <!--<![endif]-->
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<title>FFMPEG Tester</title>
<meta name=description content>
<meta name=author content>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu' rel=stylesheet type=text/css>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow' rel=stylesheet type=text/css>
<link href="//fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet" type="text/css">

<style>
body{color:#444;padding:10px}
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}
audio,canvas,video{display:inline;zoom:1}
html{font-size:100%;overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}
body,.ui-widget{font-size:15px;line-height:1.231;margin:0}
body p{font-size:15px}
body,button,input,select,textarea,.ui-widget{font-family:Ubuntu,sans-serif;color:#222}
::-moz-selection{background:#b90000;color:#fff;text-shadow:none}
::selection{text-shadow:none;background:#FF6C60;color:#fff}
a{color:#00e;cursor:pointer;text-decoration:none;outline:0}
a:visited{color:#551a8b}
a:hover{color:#06e}
abbr[title]{border-bottom:1px dotted}
b,strong{font-weight:700}
blockquote{margin:1em 40px}
dfn{font-style:italic}
hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}
ins{background:#ff9;color:#000;text-decoration:none}
mark{background:#ff0;color:#000;font-style:italic;font-weight:700}
pre,code,kbd,samp{font-family:monospace,monospace;_font-family:'courier new',monospace;font-size:1em}
pre{word-wrap:break-word;width:100%;overflow-x:auto;overflow-y:auto;padding-bottom:expression(this.scrollWidth>this.offsetWidth?20:0);max-height:125px;font-family:consolas, courier, monospace;font-size:1em;line-height:1.2em;white-space:pre;text-align:left}
q{quotes:none}
q:before,q:after{content:none}
small{font-size:85%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em}
sub{bottom:-.25em}
#page-container{max-width:800px;min-height:300px;padding-top:1px;text-align:left;margin:0 auto 30px}
#page-container h1{text-align:center;font-size:15px;margin:10px}
#page-container h2{font-size:21px;margin-bottom:30px;color:#000}
#page-container hr{border-top:1px solid #ddd;border-bottom:1px solid #fff;height:0}
#page-container span{color:#777}
.msg-content,.msg-note,.msg-info,.msg-warning,.msg-hint,.msg-win{margin:15px 0;padding:10px}
.msg-content{padding:20px}
.msg-info,.msg-warning,.msg-hint,.msg-win{padding-left:40px}
.msg-note,.msg-info,.msg-warning,.msg-hint,.msg-win{background:#fff;border:1px solid #ddd;border-radius:4px}
.msg-info{background:#ebf5fa url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDEvMjEvMTEUytkGAAADOklEQVRYhe2XO2zTUBSG/9jXN7ETG7tJiUEUqpZKRaACA1KHAmJgRIKpsCDBwI4YeA0VQ3kMsMNQxrYToEyICdqhggUiUBGoiIeE0hcJiRsnfiQMNFJaEucmbkWHfFN878k5n3197OtAuVzGVob73wKNaAv6pS3ol7agX7a8IPHz54mp5LDluKO26+5x3NKaXITnHIHnv1HC3zx7dGCy1RqBVt4kk9PJIdOyE0XbVUOUIBykoIRfE2M5LlaKFgqWg6DAZ0QqnBoeGpjedMHxV+/uGAXrqkhJICpLILz3XeK4JSzn8jAtpxwJ0Xvnjh28vmmCq3LXorIEWaTN1EHOtLCcyyMSonebkWQWnJxODhkF66WuRrj1ywkA29XIl92d6hsA+L6YObKQMXrWx1iOi1TGKEVC9DjrcjM3iWnZCS0s1pQDgF3Rbc+0sPgIAEql8qWFjHF5fQwlPLSwyGXNQgKAxlKX6TEzMZUcJhynei3r++/znwB8BPBx9XdNZJGCcJw6MZUcZqnNdAUtxx3tVCTPmLnUrwc/l7N7SuXyStFxb3RFlbqxUVnCYjY/CqDh44dJkOcC8UbdKlEi/s4XrwFo2ECE58BzgThLbSbBoEAiXvMnD/XdWj/24u3nET85KzAJ1muMCg+fvx4RqTB3/sThvVXDnoKNclZgahKJep/HDk0GF0AvU0XGnBWYokJUgGnZdedFSiDw3k1UKycLTFcwJJBUo5hGTdRKToBRMCIGZ5uqvoE5mQRjipRo9gp5QXgOMUVKsMQyCobHdU32PONePep5XI2uybMxJTy+YYIAUl0xdUwRg0a9gB69I+B1XEERg0ZXTB0DwHQPNrPdUpeyK/c//Ji/aNnuP5Nf5tP/jPXE1+4HqMBjf1d8LKaErwDIbLQgAPT/yuVvfP65dCZrFpneBBUUMWj07Yw96ZCl2/i7qWCilS1/v2nZF74upE+l0rl9jlvyDCY8B12TZ7u3awmRCo+bkWtVEABUAKdXCtZgKp07kDbM3oLt6NUBIYGktIg4p2vy+3CIzgB4CsZl3QjBCjqAQQDdq9LVZAB8BTADxoaohV/BTWfLf7i3Bf3SFvRLW9AvfwCiSRRDTBu1YgAAAABJRU5ErkJggg==) 0 0 no-repeat;color:#94afbd;border-color:#d2dce1}
.msg-warning{background:#fff0eb url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDEvMjEvMTEUytkGAAADPElEQVRYhe2XS0/UUBiG394OvcykLcNIVQIqsIKFiYbVKL9A3aj8Ad0aQ2L8BUiMG1cCwySGxHCZMVFj3JiYGHVj4sJoXJioUXEaFBGQubRT2uOCARSGabHcFvOuvpzv6/c+OT0955ShlGIvi91tAD/VAMOqBhhWNcCwqgGG1Z4H5LeiiZlO9rjFwm3qOBIAsKRujhWlUwfOX3wRtveWALr5/B1OVnhOlwEAiwu/NbeYfwxADts79CvOjt56ykWivKDHwIoSWFECiTeCE2UpO3rr6a4CmunhBHWcBB9V1+V4VQd1nISZHk6E8QgF6FnFh7ymcwy7vg3DsuA1nfNsKxPG478BzfGhfobjNU5SAAAkbnzUuroHtK7uARI3PgJAOWeY40P9OwpoZlItrm31CnpsZUw0mh8JWkO/oDX0i0bzo+VxEtsH17Z6zUyqZccAqVMa4WSFMPzqJpB7/+YdgEkAk+UYAMDwPDhZIdQpjewIoJlO9nglu1tQ9X/G7R/ZzuXYmprs+jsnqDq8kt1tppM92w7oWdYgqY+vG6euuwpFaefaPKmPw7OswW0FzI4PphiBaKworU8yTGvFeNlIlMAIRMuOD6Y248kE/aszM6kWN7/wqc5oYittK878LEDpiTLg87VLAACo58Ge+uZxSvTIgXMXvgTxDXzU0ZJ9n4+qFeGApS3Fmf2ZAQBBb6hYw7As+KjKusXCEwBtQXwDvWJzInmZuotHK50YK40IAQADgFGOK4qPqgClreZE8nIQ70Az6FqFayTWWL1RRM2pxxJ3ASD//u3Zxdx8ZKNaQW9Aaeb7NQA3/bx9ZzA7NnCPE2Wp2qwAgNLeMUZijX0k1tintHeMVTUlJPBlwhfQs63TfIUFv1bzr19OAvgA4EM5rqrly4RfXdWv+GvqhlYXN2ZZyf9aZ337TDk5ch0A3ELuqth0iPF7xisWYE9P6c0Xrsz9FyCAurlXzz47v6YNPzM3v4DSzDQAgMTi4JSo3yMQ6uNT2vGT+6vV+H0ktnTwcNqzipfcQq5qIadEIQWAWqmXI5AOHk771QXZqNsAnAnsvDk9wNK63VCBT5Ld0p7/7awBhlUNMKxqgGH1B6/AEHEvRd5dAAAAAElFTkSuQmCC) 0 -5px no-repeat;color:#c88877;border-color:#ffd7cd}
.msg-hint{background:#fffae6 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDEvMjEvMTEUytkGAAAB1UlEQVRYhe2Wq04DQRSG/5m9tinXZBMEGxJKSGVRCJA8AK4WXVUNTaAJRaPQVPIOCAQVVUUigFCNgF4CLdvZQVAIEC6dOQVW7C838535Zmd25zApJaIc/t8CPyUWpCYWpCYWpCbygia1QLtWyoVBrywfu/MyDBkAMM4ls90rbjlbY8vbR5T6jHKTtKrFunjoZI1ECoabAjOf1yv7fYhuB+KhAyOROhtf2V36c8Hm6eYFhEhbkx64k/x0TNi7R3B3AxjG5cTq3oLOPFpnsFUt1iFE2vb8L+UAgDtJ2J4PCJFuVYv1PxFs10o52Q+ytueD8Z9xxjlsz4fsB9l2rZT7dcEw6JWt6Zmh5F7COIc1PYMw6JVV51MWZNz0ueWoYuCWA8ZNX5lTBQwnaasyFFZZkDsJVYTEqm+xaTWUZyGwOr+ZEw1Gm9UR3AHQ1OCaA1YpyoJuJn8NoKDKASgMWKVo3SRuJn8IoKKAVAaMcrTbLTeT38BwkpXBWK1Q+8FhtlrnOLyG1G4BQPf84NsCbibPKPUj31GT3+Bvh9zyA8DtceHTVU6t7ZO2FxiRYGJ2sQFg7sNj7SvxbUZ1BjfwXqgBYH0UhSN/BiP/FceC1MSC1MSC1ERe8AlBoH2J9gPywwAAAABJRU5ErkJggg==) 0 0 no-repeat;color:#d0a35f;border-color:#fae6be}
.msg-win{background:#faffe6 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAOCAYAAADwikbvAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2BpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDpDNkE2RUZDNEVBNTNEQTExOTdDNkJDREMzMDFDQkY2RiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2MUVBRDcxQkI4NUUxMURGQkI0REM5NkNDQUEwNzY1MyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2MUVBRDcxQUI4NUUxMURGQkI0REM5NkNDQUEwNzY1MyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjY4OUExMEQzMDgyMDY4MTE5NDU3ODU4NDBCQ0ZDRTIxIiBzdFJlZjpkb2N1bWVudElEPSJ1dWlkOkM2QTZFRkM0RUE1M0RBMTE5N0M2QkNEQzMwMUNCRjZGIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+1271rwAAANlJREFUeNpi9J3JQCzgBOJSII4FYjYgzmUhUqMiEG8BYi0ksS5iNKsD8V4glkYTf8REQKMBEB/AovEmECcyEWGjBJr4JiA2AeKnIM2ZQLwRiJ2QFPBD/SiEpnEZEAcB8RcQB6S5C4j9gHgXENtAFc0HYhUsGuOA+C9MAKR5H5TNDMSrgbgIiAPRNK5H1wjTXIkkCPJfL5rG+6DAQdcI03wNajIukALEH7FJwEK7D4fGNUjewqn5OBQjg79QLzEQ0gwCTWhys4D4DrGad0ANeAdNCJWE0i1AgAEASsMpK6kp90cAAAAASUVORK5CYII=) 10px 10px no-repeat;color:#afbf7d;border-color:#dce6be}
.btn_red,.btn_blue,.btn_yellow,.btn_green{outline:0; outline-color:none; display:inline-block;height:51px;font:600 18px/51px 'Open Sans', sans-serif;color:#fff!important;border-radius:2px;-moz-border-radius:2px;-webkit-border-radius:2px;-ms-border-radius:2px;-webkit-transition:background-color .2s ease-out;-moz-transition:background-color .2s ease-out;-ms-transition:background-color .2s ease-out;-o-transition:background-color .2s ease-out;transition:background-color .2s ease-out;padding:0 28px!important}
.btn_red{background:#e55e48}
.btn_blue{background:#5faae3}
.btn_green{background:#8dc03c}
.btn_yellow{background:#ffbf23}
.btn_red:hover,.btn_blue:hover,.btn_green:hover,.btn_yellow:hover,.quickinfo .button:hover{text-decoration:none;background:#454242;text-shadow:0 0 1px #222;-moz-text-shadow:0 0 1px #222;-webkit-text-shadow:0 0 1px #222;-ms-text-shadow:0 0 1px #222}
.btn_red i,.btn_blue i,.btn_yellow i,.btn_green i{margin-right:6px;font-size:1.4em;vertical-align:middle}
.btn_group{display:block;text-align:center;padding:15px}
audio:not([controls]),[hidden]{display:none}
a:focus,input[type=text]:focus,input[type=password]:focus,textarea:focus,a:hover,a:active{outline:0}
.btn_red + .btn_blue,.btn_group a{margin-left:8px}

</style>
</head>
<div id="page-container">
<h1> FFMPEG Tester</h1>
<hr>
<p style="text-align:center;"><img style="border-radius:2%;max-width: 465px;" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5f/FFmpeg_Logo_new.svg/1280px-FFmpeg_Logo_new.svg.png"/></p>
<hr>
<h3>This script has the function of testing if you have FFMPEG!</h3>
<h3>As FFMPEG can be installed in only one version of PHP, or the permissions to consult are only available for one, we decided to include the PHP version indicator so that you can know the current version</h3>
<h3>If you can use it normally in video conversion scripts</h3>
<hr>
<?php
$error = 0;
function getDataFromUrl($url) {
	$ch = curl_init();
	$timeout = 15;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
echo "<h2>Basic Requirements</h2>";
if (phpversion() < 8.1) {
	echo '<div class="msg-warning">Error: Your PHP version is lower than 8.1+ (You are using: ' . phpversion() . ' )</div>';
	echo '<div>To ensure your security, we recommend that you use a version higher than 8.1.</div>';
	$error++;
} else {
	echo '<div class="msg-win">The PHP version is fine. Your version : ' . phpversion() . '!</div>';
}
echo "<h2>FFMPEG requirements</h2>
<h4>The following items are optional. But, they are essential if you want to work with video conversion and extracting time and thumbnails from these (YouTube Style)</h4>
";
if (function_exists('exec')) {
	echo '<div class="msg-win">exec is Enabled!</div>';
} else {
	echo '<div class="msg-warning">exec is Disabled. Or, FFMPEG requires this command to perform two files in the conversation and extraction of the dice.</div>';
	echo '<div>Check if your version of PHP is not restricting or accessing this command.</div>';
	$error++;
}
if (function_exists('shell_exec')) {
	echo '<div class="msg-win">shell_exec is Enabled!</div>';
} else {
	echo '<div class="msg-warning">shell_exec is Disabled. Or, FFMPEG requires this command to perform two files in the conversation and extraction of the dice.</div>';
	echo '<div>Check if your version of PHP is not restricting or accessing this command.</div>';
	$error++;
}
if (function_exists('shell_exec')) {
	$ffmpeg = trim(shell_exec('type -P ffmpeg'));
	if (empty($ffmpeg)) {
		echo '<div class="msg-warning">Could not find FFMPEG using command.</div>';
		echo '<div>Make sure you have correctly installed FFMPEG, if the "exec" and "shell_exec" commands are enabled, and if your version is not less than 1.0, you will come across it.</div>';
		$error++;
	} else {
		echo 'FFMPEG is available in this path: <strong> ' . $ffmpeg . '</strong> (Use this path in your preferred script).';
		echo '<div>FFMPEG Version Information:</div>';
		exec($ffmpeg . " -version", $codecArr1);
		echo "<pre>";
		for ($ii = 0; $ii < count($codecArr1); $ii++) {
			echo $codecArr1[$ii] . '</br>';
		}
		echo "</pre>";
	}
} else {
	echo '<div class="msg-warning">Could not find FFMPEG.</div>';
	echo '<div>Check if FFMPEG was installed correctly, in your SSH Terminal run this command: <strong>ffmpeg -version</strong> to make sure the installation was done correctly.</div>';
	$error++;
}
echo "<h2>Test Completed</h2>";
if ($error > 0) {
	echo '<div class="msg-warning">' . $error . ' If you find errors, head up. You will have to solve the previous problems or get in touch with your server provider, if there is no solution, try to find a new provider..</div>';
} else {
	echo '<div class="msg-win">Congratulations!</div>
<div class="msg-info">
Your site meets all necessary requirements. Now you can use FFMPEG without problems.</div>';
}
?>
</div>​
</body>
</html>
<?php
$ffmpeg = trim(shell_exec('which ffmpeg')); // or better yet:
$ffmpeg = trim(shell_exec('type -P ffmpeg'));
?>