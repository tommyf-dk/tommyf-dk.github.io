<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
	h1{
		font-weight:100;
	}
	h1 span{
		font-weight: 900;
	}
	header h1 {
		color: #5844d2;
		font-weight: 900;
		text-transform: uppercase;
		line-height: 0.75;
	}
	html, body{
	  padding: 0;
	  margin: 0;
	  height:1080px;
	  background: #efefef;
	  font: 100 16px/16px "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	}
	header#head {
	  display:grid;
	  grid-template-columns: repeat(24,minmax(0,1fr));
	  grid-gap:5px;
	  width:100%;
	  height: 100vh;
	  max-height:720px;
	  flex-wrap: wrap;
	}
	#head #head_title {
	  grid-column: 2 / 8;
	  margin: auto;
	}
	#head_introduction{
	  -ms-box-orient: horizontal;
	  display: -webkit-box;
	  display: -moz-box;
	  display: -ms-flexbox;
	  display: -moz-flex;
	  display: -webkit-flex;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  flex-direction:column;
	  background:#5844d2;
	  grid-column: 8 / 25;
	  border-radius: 0px 0px 0px 20px;
	}
	video#videoHead{
	  width:100%; max-height: 480px;
	}
	.btn.neg{
	  margin:2em;
	  padding:1em;
	  background:#2bcac7;
	  border:none;
	  border-radius:100px;
	  min-width:200px;
	  font-weight: 900;
	  font-size:1em;
	  color:#fff;
	}
	</style>
	<title>tommyf-dk</title>
</head>
<body>
	<header id="head">
		<div id="head_title">
		<h1 class="head_h">Dansk<br /> Grafisk arbejde</h1>
		</div>
		<div id="head_introduction">
			<video id="videoHead" poster="https://tommyf.dk/img/index/thumb.png" playsinline="" muted="">
			<source src="https://tommyf.dk/img/index/video.mp4" type="video/mp4">
			missekat
			</video>
			<button class="btn neg">Klik her</button>
		</div>  
		<div>  
	</header>

	<h1>Hello <span>my darling</span> world</h1>
	<p>Are you ready for me?</p>
</body>
</html>