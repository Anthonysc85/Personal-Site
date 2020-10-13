
const ball = document.querySelector('.ball');
const boundingBox = ball.getBoundingClientRect();
const centerX = boundingBox.left + boundingBox.width / 2;
const centerY = boundingBox.top + boundingBox.height / 2;

const body = document.querySelector('#banner'),
    is_touch_supported = ('ontouchstart' in window) ? true : false,
    EVENTS = {
      POINTER_DOWN : is_touch_supported ? 'touchstart' : 'mousedown',
      POINTER_UP   : is_touch_supported ? 'touchend'   : 'mouseup',
      POINTER_MOVE : is_touch_supported ? 'touchmove'  : 'mousemove'
    };

window.addEventListener( EVENTS.POINTER_MOVE, (e) => {
  const {pageX, pageY} = e;
  const [diffX, diffY] = [centerX - pageX, centerY - pageY];
   ball.style.transform = `translateZ(-40px) rotateX(${diffY / 20}deg) rotateY(${-diffX / 20}deg)`;
}, false);
                       
 