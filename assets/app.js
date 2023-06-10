import './styles/app.scss';
import Parallax from 'parallax-js';
import kursor from 'kursor';
import 'bootstrap';

import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';


let scene = document.getElementById('scene');
let parallaxInstance = new Parallax(scene);

let color = "#FFFFFF";

footer.onmouseover = function () {
    color = "#000000"
}

$('.item-red').popover({trigger: 'hover','placement': 'top'});

let cursor = new kursor({
    type: 1,
    removeDefaultCursor: true,
    color: color
})

console.log(cursor);

cursor.kursor.style.boxShadow = "0px 0px 5px 1px rgba(0, 0, 0, 1)";
cursor.kursorChild.style.boxShadow = "0px 0px 5px 1px rgba(0, 0, 0, 1), 0px 0px 2px 1px rgba(0, 0, 0, 1)"

