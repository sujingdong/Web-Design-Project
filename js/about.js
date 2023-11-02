// function to display modal with buttons to switch images
window.onload = function(){
var modal = document.querySelector('.modal');
var modalimg = document.querySelector('#modalimg');
var img1 = document.querySelector('#img1');
var img2 = document.querySelector('#img2');
var img3 = document.querySelector('#img3');
var img4 = document.querySelector('#img4');
var img5 = document.querySelector('#img5');

var gallery = document.querySelectorAll('.gallery');
var next = document.querySelector('.right');
var pre = document.querySelector('.left');
var images = []; // array to store all the images on the page
for(var i=0; i<gallery.length; i++){
    images[i]= gallery[i].src; // iterates all the images and store it src in the array
}
var num = 0;

// when click the next button, switch to the next image
next.onclick = function() {
    num ++;
    // if it's the last image, click next button will go back to the first image
    if(num==images.length){
        num=0;
    }
    modalimg.src = images[num];
}

pre.onclick = function (){
    num--;
    // when it's the first image, click previous button will go to last image
    if(num<0){
        num = images.length-1;
    }
    modalimg.src = images[num];
}

// set onclick function to all the images which displays the modal
img1.onclick = function zoom(){
    modal.style.display = 'block';
    modalimg.src = this.src; 
}
img2.onclick = function zoom(){
    modal.style.display = 'block';
    modalimg.src = this.src; 
}
img3.onclick = function zoom(){
    modal.style.display = 'block';
    modalimg.src = this.src; 
}
img4.onclick = function zoom(){
    modal.style.display = 'block';
    modalimg.src = this.src; 
}
img5.onclick = function zoom(){
    modal.style.display = 'block';
    modalimg.src = this.src; 
}

var closeicon = document.querySelector('.closeicon');
// close icon to close the modal
closeicon.onclick = function (){
    modal.style.display = 'none';
}

}