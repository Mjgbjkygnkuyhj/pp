function loadFile(event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
}
window.onscroll = function() {navbarScroll()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function navbarScroll() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
var button = document.getElementById('slide');
button.onclick = function () {
    var container = document.getElementById('container2');
    sideScroll(container,'right',25,100,10);
};

var back = document.getElementById('slideBack');
back.onclick = function () {
    var container = document.getElementById('container2');
    sideScroll(container,'left',25,100,10);
};

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
}

const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);


const carousel2 = document.querySelector(".carousel2"),
secondImg = carousel2.querySelectorAll("img")[0],
ArrowIcons = document.querySelectorAll(".wrapper2 i");

let IsDragStart = false, IsDragging = false, PrevPageX, PrevScrollLeft, PositionDiff;

const ShowHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let ScrollWidth = carousel2.ScrollWidth - carousel2.ClientWidth; // getting max scrollable width
    ArrowIcons[0].style.display = carousel2.scrollLeft == 0 ? "none" : "block";
    ArrowIcons[1].style.display = carousel2.scrollLeft == ScrollWidth ? "none" : "block";
}

ArrowIcons.forEach(icon => {
    icon.addEventListener2("click", () => {
        let secondImgWidth = secondImg.ClientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel2.scrollLeft += icon.id == "left" ? -secondImgWidth : secondImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide2 = () => {
    // if there is no image left to scroll then return from here
    if(carousel2.scrollLeft - (carousel2.ScrollWidth - carousel2.ClientWidth) > -1 || carousel2.scrollLeft <= 0) return;

    PositionDiff = math.abs(PositionDiff); // making positionDiff value to positive
    let secondImgWidth = secondImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let ValDifference = secondImgWidth - PositionDiff;

    if(carousel2.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel2.scrollLeft += PositionDiff > secondImgWidth / 3 ? ValDifference : -PositionDiff;
    }
    // if user is scrolling to the left
    carousel2.scrollLeft -= PositionDiff > secondImgWidth / 3 ? ValDifference : -PositionDiff;
}

const DragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel2.scrollLeft;
}

const Dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel2.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel2.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const DragStop = () => {
    isDragStart = false;
    carousel2.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel2.addEventListener("mousedown", dragStart);
carousel2.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel2.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel2.addEventListener("touchend", dragStop);

                    
                
            
                
        