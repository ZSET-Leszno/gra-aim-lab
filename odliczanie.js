const randomInt = (max) => Math.floor(Math.random() * Math.floor(max))
const delay = t => new Promise(res => setTimeout(res, t * 1000));
const shuffleArray = (array) => array.map((a) => ({sort: Math.random(), value: a})).sort((a, b) => a.sort - b.sort).map((a) => a.value)
function animateDiv(dicID)
{
var newPosition = makeNewPosition();
var oldPosition = $("#s"+String(divID)).offset();
var speed = calcSpeed([oldPosition.top, oldPosition.left], newPosition);
$("#s"+String(divID)).animate({top:newPosition[0], left:newPosition[1] }, speed, function(){
    animateDiv(divID);
});
};
function calcSpeed(prev, next) {
var x = Math.abs(prev[1] - next[1]);
var y = Math.abs(prev[0] - next[0]);
var greatest = x > y ? x : y;
var speedModifier = speedAmount;
var speed = Math.ceil(greatest/speedModifier);
return speed;
}