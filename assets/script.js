
/*---------Info_block-----------*/
const button = document.getElementById('info_btn');
const block = document.getElementById('info_block');
const close = document.getElementById('close');

document.addEventListener('DOMContentLoaded', function() {


    function addClass() {
        button.classList.add('button-clicked');
    }

    function removeClass() {
        button.classList.remove('button-clicked');
    }

    button.addEventListener('click', function(event) {
        event.stopPropagation();
        addClass();
    });

    document.addEventListener('click', function() {
        removeClass();
    });
});

close.addEventListener('click', function() {
    if (block.style.display === 'none') {
        block.style.display = 'block'; // Если блок скрыт, делаем его видимым

    } else {
        block.style.display = 'none'; // Если блок видимый, скрываем его

    }
});

button.addEventListener('click', function() {
    if (block.style.display === 'none') {
        block.style.display = 'block'; // Если блок скрыт, делаем его видимым

    } else {
        block.style.display = 'none'; // Если блок видимый, скрываем его

    }
});

/*---------Massage-----------*/
setTimeout(function() {
    var massage = document.getElementById('massage');
    massage.style.opacity = '0';
}, 4000);

/*---------Drag_and_drop_____*/


var isDragging = false;
var initialX;
var initialY;
var xOffset = 0;
var yOffset = 0;

block.addEventListener('mousedown', dragStart);
block.addEventListener('mouseup', dragEnd);
block.addEventListener('mousemove', drag);

function dragStart(e) {
    isDragging = true;
    initialX = e.clientX - xOffset;
    initialY = e.clientY - yOffset;
    block.classList.add('dragging');
}

function dragEnd() {
    isDragging = false;
    block.classList.remove('dragging');
}

function drag(e) {
    if (isDragging) {
        xOffset = e.clientX - initialX;
        yOffset = e.clientY - initialY;
        setTranslate(xOffset, yOffset, block);
    }
}

function setTranslate(xPos, yPos, el) {
    el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
}

/*---------Фреимы------------*/
var frame = document.getElementById("myFrame");
var button0 = document.getElementById("myButton0");
var button1 = document.getElementById("myButton1");
var button2 = document.getElementById("myButton2");
var button3 = document.getElementById("myButton3");
var button4 = document.getElementById("myButton4");


var paragraph = document.getElementById("header_text");


button0.addEventListener("click", function() {
    frame.contentWindow.location.href = "pages/about.html";
    paragraph.textContent = "Обо мне";
});

button1.addEventListener("click", function() {
    frame.contentWindow.location.href = "pages/achive.html";
    paragraph.textContent = "Достижения";
});

button2.addEventListener("click", function() {
    frame.contentWindow.location.href = "pages/scils.html";
    paragraph.textContent = "Скилы";
});

button3.addEventListener("click", function() {
    frame.contentWindow.location.href = "pages/works.html";
    paragraph.textContent = "Работы";
});

button4.addEventListener("click", function() {
    frame.contentWindow.location.href = "pages/plans.html";
    paragraph.textContent = "Хобби";
});

/*------Увеличеник кружков--------*/
/*const bable = document.getElementById('bable');*/

