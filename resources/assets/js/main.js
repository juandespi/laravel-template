var Text = [
  "Juan Despi",
  // "ThE qUicK brOWn fox juMps oVer thE laZy dOg."
];

var curSpeed = 100;
var curIndex = 0;
var curArrLength = Text[0].length;
var curScrollAt = 20;

var curTextPos = 0;
var sContents = "";
var curRow;

function typewriter() {
  sContents = ' ';
  curRow = Math.max(0, curIndex-curScrollAt);
  let destination = document.getElementById('typedtext');

  while(curRow < curIndex) {
      sContents += Text[curRow++] + '<br/>';
  }

  destination.innerHTML = sContents + Text[curIndex].substring(0, curTextPos) + "<span>|</span>";
  if (curTextPos++ == curArrLength) {
    curTextPos = 0;
    curIndex++;
    if (curIndex != Text.length) {
      curArrLength = Text[curIndex].length;
      setTimeout("typewriter()", 500);
    }
  } else {
    setTimeout("typewriter()", curSpeed);
  }
}

typewriter();
