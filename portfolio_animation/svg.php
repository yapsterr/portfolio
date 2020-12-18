<html>
<head>
<title>Svg Activities</title>
<link rel="stylesheet" type="text/css" href="style/content.css">
</head>
<body>
<div>
    <div id="nav">
        <li class="btn active"></li>
        <li class="btn"><a href="#box1"> Svg Text (LETask6.1)</a></li>
        <li class="btn"><a href="#box2"> Svg Animation (LETask6.2)</a></li>
    </div>

    <div class="textbox">
        <div class="head">
            <h1><span>"SVG"</span></h1>
        </div>
        <div class="paragraph">
            <p> <span> Here are my SVG works, feel free to explore.</span></p>
        </div>
    </div>

    <div id="box1">
        <div class="txt">
            <h1>Svg Text</h1>
        </div>
            <div id="svg_text">
                <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="result" data-user="yapssterr" data-slug-hash="vYKgLjY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG Text">
                <span>See the Pen <a href="https://codepen.io/yapssterr/pen/vYKgLjY">
                SVG Text</a> by Angelo Yap (<a href="https://codepen.io/yapssterr">@yapssterr</a>)
                on <a href="https://codepen.io">CodePen</a>.</span>
                </p>
                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
    </div>

    <div id="box2">
        <div class="txt">
            <h1>Svg Animation</h1>
        </div>
            <div id="svg_animation">
                <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="result" data-user="yapssterr" data-slug-hash="dyXOReq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG Animation">
                <span>See the Pen <a href="https://codepen.io/yapssterr/pen/dyXOReq">
                SVG Animation</a> by Angelo Yap (<a href="https://codepen.io/yapssterr">@yapssterr</a>)
                on <a href="https://codepen.io">CodePen</a>.</span>
                </p>
                <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
    </div>
</div>
<script>
var header = document.getElementById("nav");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</body>
</html>