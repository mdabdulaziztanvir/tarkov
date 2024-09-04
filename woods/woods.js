// nav links active
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

// instruction

// ads blocker detector

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

crossButton.addEventListener("click", function () {
  adsBody.style.display = "none";
  blurBackground.style.display = "none";
});

allowAds.addEventListener("click", function () {
  allowSdaMain.style.display = "block";
});
sdaClossBtn.addEventListener("click", function () {
  allowSdaMain.style.display = "none";
});

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
  [sdaOne, sdaTwo, sdaThree, sdaOther].forEach(
    (el) => (el.style.borderBottom = "none")
  );
  [sdaAll, sdaBP, ublockOrigin, otherSda].forEach(
    (el) => (el.style.display = "none")
  );

  // Set active element border and display active section
  activeElement.style.borderBottom = "thick solid rgb(173, 133, 109)";
  displayElement.style.display = "block";
}

sdaOne.addEventListener("click", function () {
  handleClick(sdaOne, sdaAll);
});

sdaTwo.addEventListener("click", function () {
  handleClick(sdaTwo, sdaBP);
});

sdaThree.addEventListener("click", function () {
  handleClick(sdaThree, ublockOrigin);
});

sdaOther.addEventListener("click", function () {
  handleClick(sdaOther, otherSda);
});

refreshpageBtn.addEventListener("click", function () {
  location.reload();
});
