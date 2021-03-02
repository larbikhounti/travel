/*
author :  mohamed khounti
on : 8/3/2021
*/

window.addEventListener("DOMContentLoaded", () => {
  // get the title reference
  let title = document.querySelector(".primary-title");
  // get the background reference
  let backgroundImage = document.querySelector(".myfrontContainer");
  // set list of titles
  let titles = [
    "low prices",
    "find flights anywhere",
    "All in one travel",
    "safe and secure",
    "we garantee a seat",
    "real time",
  ];
  //set list  of images
  let images = [
    "uploads/image2.png",
    "uploads/image3.jpg",
    "uploads/travel4.jpg",
    "uploads/travel.jpg",
  ];
  // set default image when page is  louded for the first time
  backgroundImage.style.backgroundImage = "url('"+window.location.origin+"/travel/" + images[0] + "')";
  let Titleindex = 0;
  let Imageindex = 0;
  // calling twi function on the same time
  function callToFunctions() {
    changeTitle(); // chnage the title
    changeBackGroundImage(); // change images
  }

  let changeTitle = () => {
    //set title
    title.textContent = titles[Titleindex].toUpperCase();
    Titleindex++;
    if (Titleindex >= 6) {
      Titleindex = 0;
    }
  };
  let changeBackGroundImage = () => {
    //set image based on the index
    backgroundImage.style.backgroundImage = "url('"+window.location.origin+"/travel/" +  images[Imageindex] + "')";
    Imageindex++;
    // if we passed the total if indexs we back to index 0
    if (Imageindex >= 4) {
      Imageindex = 0;
    }
  };
  // call two function every 8000 milisecond
  window.setInterval(callToFunctions, 8000);
});
