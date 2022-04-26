
window.onload = function(){
  
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
   
    prevBtn.addEventListener("click",function(){
      prevSlide();
      prevSlideImg();
   });
    nextBtn.addEventListener("click",function(){
      nextSlide();
      nextSlideImg();
   });
    
  }
  let slideNumber = 0;
  let slideNumber2 = 0;
  const prevSlide = () =>{
    // For texts
    const slides = document.getElementsByClassName('slides');
    const slider = document.getElementById("slider");
    const currentSlide = slider.getElementsByClassName('current');
    currentSlide[0].classList.remove("current");
    if(slideNumber == 0){
      slideNumber = slides.length-1;
    }
    else{
        slideNumber = slideNumber-1;
    }
    slides[slideNumber].classList.add("current");
  }
  const nextSlide = () =>{
    const slides = document.getElementsByClassName('slides');
    const slider = document.getElementById("slider");
    const currentSlide = slider.getElementsByClassName('current');
    currentSlide[0].classList.remove("current");
    if(slideNumber == (slides.length-1)){
      slideNumber = 0;
    }
    else{
        slideNumber = slideNumber+1;
    }
    slides[slideNumber].classList.add("current");
  }

  const prevSlideImg = () =>{
    // For texts
    const slidesImg = document.getElementsByClassName('images');
    const sliderImg = document.getElementById("slider_img");
    const currentSlideImg = sliderImg.getElementsByClassName('current');
    currentSlideImg[0].classList.remove("current");
    if(slideNumber2 == 0){
      slideNumber2 = slidesImg.length-1;
    }
    else{
        slideNumber2 = slideNumber2-1;
    }
    slidesImg[slideNumber2].classList.add("current");
  }
  const nextSlideImg = () =>{
    const slidesImg = document.getElementsByClassName('images');
    const sliderImg = document.getElementById("slider_img");
    const currentSlideImg = sliderImg.getElementsByClassName('current');
    currentSlideImg[0].classList.remove("current");
    if(slideNumber2 == (slidesImg.length-1)){
      slideNumber2 = 0;
    }
    else{
        slideNumber2 = slideNumber2+1;
    }
    slidesImg[slideNumber2].classList.add("current");
  }
  