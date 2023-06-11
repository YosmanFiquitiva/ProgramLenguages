import './styles/app.scss';
import './styles/lenguajes.scss';
import './styles/lenguajesespe.scss'
import './styles/login.scss';
import Parallax from 'parallax-js';
import kursor from 'kursor';
import 'bootstrap';

import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';


if(document.getElementById('scene')!= null){
    new Parallax(document.getElementById('scene'));
}

$('.item-red').popover({trigger: 'hover','placement': 'top'});

let cursor = new kursor({
    type: 1,
    removeDefaultCursor: true,
    color: '#FFFFFF'
})

cursor.kursor.style.boxShadow = "0px 0px 5px 1px rgba(0, 0, 0, 1)";
cursor.kursorChild.style.boxShadow = "0px 0px 5px 1px rgba(0, 0, 0, 1), 0px 0px 2px 1px rgba(0, 0, 0, 1)"

