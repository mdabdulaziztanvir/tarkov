// ads blocker detector

// let x = document.querySelector(".ad-zone");
// let adsBody = document.querySelector(".ads_body");
// let x_height = x.offsetHeight;
// let msg = document.getElementById("msg");

// if (x_height) {
//   msg.innerText = "No Adblocker detected";
//   adsBody.style.display = "none";
// } else {
//   msg.innerText = "Adblocker detected";
//   adsBody.style.display = "block";
// }

// let x = document.querySelector(".ad-zone");
// let adsBody = document.querySelector(".ads_body");
// let msg = document.getElementById("msg");
// const blurBackground = document.getElementById("blurBackground");
// const crossButton = document.getElementById("cross_button");

// let lastShownTime = localStorage.getItem("lastShownTime");
// let currentTime = new Date().getTime();
// // // let twentyFourHours = 24 * 60 * 60 * 1000;
// let twentyFourHours =  6 *1000 ;


// if (x.offsetHeight) {
//   msg.innerText = "No Adblocker detected";
//   adsBody.style.display = "none";
// } else if (!lastShownTime || currentTime - lastShownTime > twentyFourHours) {
//   msg.innerText = "Adblocker detected";
//   blurBackground.style.display = "block";
//   adsBody.style.display = "block";
//   localStorage.setItem("lastShownTime", currentTime);

// } else {
//   msg.innerText = "No Adblocker detected";
//   adsBody.style.display = "none";
// }

// document.addEventListener("click", function (event) {
 
//   event.target.id === "cross_button";
//   blurBackground.style.display = "none";
//   adsBody.style.display = "none";


// })


let x = document.querySelector(".ad-zone");
let adsBody = document.querySelector(".ads_body");
let msg = document.getElementById("msg");
const blurBackground = document.getElementById("blurBackground");
// close button for ads
const crossButton = document.getElementById("cross_button");
// allow ads button
const allowAds = document.querySelector(".ads_blocker_btn");
const allowSdaMain = document.querySelector(".allow_sda_main_container");
const sdaClossBtn = document.querySelector(".sda_close_btn");

let lastShownTime = localStorage.getItem("lastShownTime");
let currentTime = new Date().getTime();
let twentyFourHours = 24 * 60 * 60 * 1000; // Adjusted for testing purposes

if (x.offsetHeight) {
  msg.innerText = "No Adblocker detected";
  adsBody.style.display = "none";
} else if (!lastShownTime || currentTime - lastShownTime > twentyFourHours) {
  msg.innerText = "Adblocker detected";
  blurBackground.style.display = "block";
  adsBody.style.display = "block";
  localStorage.setItem("lastShownTime", currentTime);
} else {
  msg.innerText = "No Adblocker detected";
  adsBody.style.display = "none";
}

crossButton.addEventListener("click", function() {
  adsBody.style.display = "none";
  blurBackground.style.display = "none";
});


allowAds.addEventListener("click", function(){
  allowSdaMain.style.display = "block";

})
sdaClossBtn.addEventListener("click", function(){
  allowSdaMain.style.display = "none";
})

const sdaOne = document.querySelector(".sda_one");
const sdaTwo = document.querySelector(".sda_two");
const sdaThree = document.querySelector(".sda_three");
const sdaOther = document.querySelector(".sdaOther");

const sdaAll = document.getElementById("sdaAll");
const sdaBP = document.getElementById("sdaBP");
const ublockOrigin = document.getElementById("ublockOrigin");
const otherSda = document.getElementById("otherSda");

const refreshpageBtn = document.getElementById("refreshpageBtn");




function handleClick(activeElement, displayElement) {
  // Reset border and display styles
  [sdaOne, sdaTwo, sdaThree, sdaOther].forEach(el => el.style.borderBottom = "none");
  [sdaAll, sdaBP, ublockOrigin, otherSda].forEach(el => el.style.display = "none");

  // Set active element border and display active section
  activeElement.style.borderBottom = "thick solid rgb(173, 133, 109)";
  displayElement.style.display = "block";
}

sdaOne.addEventListener("click", function() {
  handleClick(sdaOne, sdaAll);
});

sdaTwo.addEventListener("click", function() {
  handleClick(sdaTwo, sdaBP);
});

sdaThree.addEventListener("click", function() {
  handleClick(sdaThree, ublockOrigin);
});

sdaOther.addEventListener("click", function() {
  handleClick(sdaOther, otherSda);
});

refreshpageBtn.addEventListener("click", function(){
  location.reload();
})






// modal click every single month

function modalClickMonthly() {
  const modalClick = document.getElementById("monthlyModal");

  if (modalClick) {
    const clickHandler = function () {
      modalClick.removeEventListener("click", clickHandler);
    };

    const today = new Date();
    const currentMonth = today.getMonth();

    const hasClicked = localStorage.getItem("hasClicked");

    if (!hasClicked) {
      const lastClickedMonth = localStorage.getItem("lastClickedMonth");

      if (!lastClickedMonth || currentMonth !== parseInt(lastClickedMonth)) {
        modalClick.click();

        modalClick.addEventListener("click", clickHandler);

        localStorage.setItem("hasClicked", "true");

        localStorage.setItem("lastClickedMonth", currentMonth);
      }
    }
  }
}

modalClickMonthly();
document.addEventListener("DOMContentLoaded", function () {
  const openOffcanvasButton = document.getElementById("openOffcanvas");
  const lastOpened = localStorage.getItem("offcanvasLastOpened");
  const oneWeekInMillis = 7 * 24 * 60 * 60 * 1000;

  if (!lastOpened || (Date.now() - new Date(lastOpened).getTime()) > oneWeekInMillis) {
      openOffcanvasButton.click();
      localStorage.setItem("offcanvasLastOpened", new Date().toISOString());
  }
});
// open menu end

// nav link active
document.addEventListener("DOMContentLoaded", function () {
  const activeLink = document.querySelector(".nav_links a.active");

  if (activeLink) {
    activeLink.style.fontWeight = "bold";
    activeLink.style.color = "White";
    activeLink.style.cursor = "no-drop";
    activeLink.addEventListener("click", function (event) {
      event.preventDefault();
    });
  }
});
// nav link active end

// *********************************************************************
// *************outer box,inner box functionalities*********************
const outerBoxes = document.getElementsByClassName("outer__box");
const fillers = document.getElementsByClassName("aaa");

for (let i = 0; i < outerBoxes.length; i++) {
  const outerBox = outerBoxes[i];
  const aaa = fillers[i];
  const fillerContent = aaa.textContent;
  const fillerCount = parseInt(fillerContent, 10);
  // console.log(typeof (fillerCount));

  let clickCount = 0;

  // Check if there are saved values in local storage
  const savedClickCount = localStorage.getItem(`clickCount${i}`);
  if (savedClickCount !== null) {
    clickCount = parseInt(savedClickCount, 10);
  }

  const savedBackgroundImage = localStorage.getItem(`backgroundImage${i}`);
  if (savedBackgroundImage !== null) {
    outerBox.style.backgroundImage = savedBackgroundImage;
  }

  const savedBackgroundColor = localStorage.getItem(`backgroundColor${i}`);
  if (savedBackgroundColor !== null) {
    outerBox.style.backgroundColor = savedBackgroundColor;
  }
  const savedOpacity = localStorage.getItem(`opacity${i}`);
  if (savedOpacity !== null) {
    outerBox.style.opacity = savedOpacity;
  }

  const clickCountElement = document.createElement("span");
  clickCountElement.textContent = clickCount;
  clickCountElement.textContent += "/";
  aaa.insertBefore(clickCountElement, aaa.firstChild);

  // Event listener for a long press
  let pressTimer;
  outerBox.addEventListener("mousedown", () => {
    pressTimer = window.setTimeout(() => {
      // Reset the data
      clickCount = -1;
      localStorage.removeItem(`clickCount${i}`);
      localStorage.removeItem(`backgroundImage${i}`);
      localStorage.removeItem(`backgroundColor${i}`);
      localStorage.removeItem(`opacity${i}`);
      clickCountElement.textContent = "0/";
      outerBox.style.backgroundImage = "none";
      outerBox.style.backgroundColor = "#000";
    }, 750);
  });
  outerBox.addEventListener("touchstart", () => {
    pressTimer = window.setTimeout(() => {
      // Reset the data
      clickCount = 0;
      localStorage.removeItem(`clickCount${i}`);
      localStorage.removeItem(`backgroundImage${i}`);
      localStorage.removeItem(`backgroundColor${i}`);
      localStorage.removeItem(`opacity${i}`);
      clickCountElement.textContent = "0/";
      outerBox.style.backgroundImage = "none";
      outerBox.style.backgroundColor = "#000";
    }, 750);
  });

  outerBox.addEventListener("mouseup", () => {
    clearTimeout(pressTimer);
  });

  outerBox.addEventListener("touchend", () => {
    clearTimeout(pressTimer);
  });

  outerBox.addEventListener("click", () => {
    clickCount++;
    clickCountElement.textContent = clickCount; // Update the click count element

    if (clickCount < fillerCount) {
      const xxx = clickCount / fillerCount;
      const xxxP = xxx * 100;
      const backgroundPercentage = 100 - xxxP;

      const gradient = `linear-gradient(transparent ${backgroundPercentage}%, #880015 ${backgroundPercentage}%)`;
      outerBox.style.backgroundImage = gradient;
      // outerBox.style.transition = " all .5s";

      outerBox.style.opacity = "1";
      outerBox.style.transition = ".2s ease";
    } else if (clickCount === fillerCount) {
      outerBox.style.backgroundImage = "none";
      outerBox.style.backgroundColor = "#01bbee";
      outerBox.style.opacity = "1";
    } else {
      outerBox.style.backgroundImage = "none";
      outerBox.style.backgroundColor = "#1d8e3e";
      outerBox.style.opacity = "0.2";
    }

    // Save click count, background image, and background color to local storage
    localStorage.setItem(`clickCount${i}`, clickCount);
    localStorage.setItem(`backgroundImage${i}`, outerBox.style.backgroundImage);
    localStorage.setItem(`backgroundColor${i}`, outerBox.style.backgroundColor);
    localStorage.setItem(`opacity${i}`, outerBox.style.opacity);

    clickCountElement.textContent = clickCount + "/";
  });
}
// working e

// Accordion
// document.addEventListener("DOMContentLoaded", function () {
//   // Check screen size on page load
//   adjustAccordion();

//   // Adjust accordion on window resize
//   window.addEventListener("resize", function () {
//       adjustAccordion();
//   });
// });

// function adjustAccordion() {
//   if (window.innerWidth > 768) {
//       // If screen size is more than 768, add 'show' class to all accordion items
//       document.querySelectorAll('.accordion-collapse').forEach(function (item) {
//           item.classList.add('show');
//       });
//   } else {
//       // If screen size is 768 or lower, remove 'show' class from all accordion items
//       document.querySelectorAll('.accordion-collapse').forEach(function (item) {
//           item.classList.remove('show');
//       });
//       // Add 'show' class only to the first accordion item
//       document.getElementById('collapseOne').classList.add('show');
//   }
// }
