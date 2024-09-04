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

// *************outer box,inner box functionalities*********************
const hideOuterBoxes = document.getElementsByClassName("hide__outer__box");
const hideFillers = document.getElementsByClassName("h__aaa");

for (let i = 0; i < hideOuterBoxes.length; i++) {
  const hideOuterBox = hideOuterBoxes[i];
  const h__aaa = hideFillers[i];
  const hideFillerContent = h__aaa.textContent;
  const hideFillerCount = parseInt(hideFillerContent, 10);
  // console.log(typeof (hideFillerCount));

  let hideClickCount = 0;

  // Check if there are saved values in local storage
  const hideSavedClickCount = localStorage.getItem(`hideClickCount${i}`);
  if (hideSavedClickCount !== null) {
    hideClickCount = parseInt(hideSavedClickCount, 10);
  }

  const hideSavedBackgroundImage = localStorage.getItem(
    `hideBackgroundImage${i}`
  );
  if (hideSavedBackgroundImage !== null) {
    hideOuterBox.style.backgroundImage = hideSavedBackgroundImage;
  }

  const hideSavedBackgroundColor = localStorage.getItem(
    `hideBackgroundColor${i}`
  );
  if (hideSavedBackgroundColor !== null) {
    hideOuterBox.style.backgroundColor = hideSavedBackgroundColor;
  }

  const hideClickCountElement = document.createElement("span");
  hideClickCountElement.textContent = hideClickCount;
  hideClickCountElement.textContent += "/";
  h__aaa.insertBefore(hideClickCountElement, h__aaa.firstChild);

  // Event listener for a long press
  let hidePressTimer;
  hideOuterBox.addEventListener("mousedown", () => {
    hidePressTimer = window.setTimeout(() => {
      // Reset the data
      hideClickCount = -1;
      localStorage.removeItem(`hideClickCount${i}`);
      localStorage.removeItem(`hideBackgroundImage${i}`);
      localStorage.removeItem(`hideBackgroundColor${i}`);
      hideClickCountElement.textContent = "0/";
      hideOuterBox.style.backgroundImage = "none";
      hideOuterBox.style.backgroundColor = "#000";
    }, 750);
  });
  hideOuterBox.addEventListener("touchstart", () => {
    hidePressTimer = window.setTimeout(() => {
      // Reset the data
      hideClickCount = 0;
      localStorage.removeItem(`hideClickCount${i}`);
      localStorage.removeItem(`hideBackgroundImage${i}`);
      localStorage.removeItem(`hideBackgroundColor${i}`);
      hideClickCountElement.textContent = "0/";
      hideOuterBox.style.backgroundImage = "none";
      hideOuterBox.style.backgroundColor = "#000";
    }, 750);
  });

  hideOuterBox.addEventListener("mouseup", () => {
    clearTimeout(hidePressTimer);
  });

  hideOuterBox.addEventListener("touchend", () => {
    clearTimeout(hidePressTimer);
  });

  hideOuterBox.addEventListener("click", () => {
    hideClickCount++;
    hideClickCountElement.textContent = hideClickCount; // Update the click count element

    if (hideClickCount < hideFillerCount) {
      const hideX = hideClickCount / hideFillerCount;
      const hideXp = hideX * 100;
      const hideBackgroundPercentage = 100 - hideXp;

      const hideGradient = `linear-gradient(transparent ${hideBackgroundPercentage}%, #880015 ${hideBackgroundPercentage}%)`;
      hideOuterBox.style.backgroundImage = hideGradient;
      // hideOuterBox.style.transition = " all .5s";
    } else if (hideClickCount === hideFillerCount) {
      hideOuterBox.style.backgroundImage = "none";
      hideOuterBox.style.backgroundColor = "#01bbee";
    } else {
      hideOuterBox.style.backgroundImage = "none";
      hideOuterBox.style.backgroundColor = "#1d8e3e";
    }

    // Save click count, background image, and background color to local storage
    localStorage.setItem(`hideClickCount${i}`, hideClickCount);
    localStorage.setItem(
      `hideBackgroundImage${i}`,
      hideOuterBox.style.backgroundImage
    );
    localStorage.setItem(
      `hideBackgroundColor${i}`,
      hideOuterBox.style.backgroundColor
    );

    hideClickCountElement.textContent = hideClickCount + "/";
  });
}
// working e
