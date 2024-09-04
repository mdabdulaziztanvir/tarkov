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
// end of nav link

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

// middle line witho
// let storedRowOneResult = localStorage.getItem('rowOneResult');
// if (storedRowOneResult) {
//   rowOneResult.textContent = storedRowOneResult;
// }

// let storedRowTwoResult = localStorage.getItem('rowTwoResult');
// if (storedRowTwoResult) {
//   rowTwoResult.textContent = storedRowTwoResult;
// }

// let storedRowThreeResult = localStorage.getItem('rowThreeResult');
// if (storedRowThreeResult) {
//   rowThreeResult.textContent = storedRowThreeResult;
// }

// const priceResultSaveF = () => {
//   const priceResultSaves = document.querySelectorAll(".savedResult");

//   priceResultSaves.forEach((priceResultSave, index) => {
//     // Retrieve the saved value from localStorage and set it to the input
//     const savedValue = localStorage.getItem(`savedResultBrowser${index}`);
//     if (savedValue !== null) {
//       priceResultSave.textContent = savedValue;
//     }

//     // Add an event listener to save the value to localStorage on input change
//     priceResultSave.addEventListener('input', () => {
//       localStorage.setItem(`savedResultBrowser${index}`, priceResultSave.textContent);
//     });
//   });
// };

// priceResultSaveF();

function autoClick() {
  var element = document.getElementById("built_date_three");
  if (element) {
    element.click();
  }
}

// Call autoClick function every second
setInterval(autoClick, 1000);

// bitcoin calculation
document.addEventListener("click", function (event) {
  if (
    event.target.id === "bitcoin_user_input" ||
    event.target.classList.contains("ff_col") ||
    event.target.classList.contains("fs_col") ||
    event.target.classList.contains("tf_col") ||
    event.target.classList.contains("ts_col") ||
    event.target.classList.contains("sf_col") ||
    event.target.classList.contains("ss_col") ||
    event.target.classList.contains("solar_first_col") ||
    event.target.classList.contains("solar_second_col") ||
    event.target.id === "built_date_one" ||
    event.target.id === "built_date_two" ||
    event.target.id === "built_date_three"
  ) {
    //   bitcoin start
    let result;
    let resultTwo;
    let resultThree;

    const bitcoin = document.getElementById("bitcoin_user_input");
    // middle part calculation
    const userInput = parseFloat(bitcoin.value);

    const rowOneFloatNum = parseFloat(
      document.getElementById("rowOneFloatNum").textContent
    );
    const rowOneResult = document.getElementById("rowOneResult");

    const rowTwoFloatNum = parseFloat(
      document.getElementById("rowTwoFloatNum").textContent
    );
    const rowTwoResult = document.getElementById("rowTwoResult");

    const rowThreeFloatNum = parseFloat(
      document.getElementById("rowThreeFloatNum").textContent
    );
    const rowThreeResult = document.getElementById("rowThreeResult");

    if (!isNaN(userInput) && !isNaN(rowOneFloatNum)) {
      result = userInput * rowOneFloatNum;
      rowOneResult.textContent = result.toLocaleString();
      //  console.log(result);

      resultTwo = userInput * rowTwoFloatNum;
      rowTwoResult.textContent = resultTwo.toLocaleString();
      //   console.log(resultTwo);

      resultThree = userInput * rowThreeFloatNum;
      rowThreeResult.textContent = resultThree.toLocaleString();

      // save to localstorage
      localStorage.setItem("userInput", userInput);

      localStorage.setItem("rowOneResult", result);
      localStorage.setItem("rowTwoResult", resultTwo);
      localStorage.setItem("rowThreeResult", resultThree);
    } else {
      rowOneResult.textContent = 0;
    }

    //   bitcoin end

    // first col first calc start
    const ffInputs = document.querySelectorAll(".ff_col");
    const fsInputs = document.querySelectorAll(".fs_col");
    const resultFieldsOne = document.querySelectorAll(".fp_result");
    const totalLevelOne = document.getElementById("totalLevelOne");

    let levelOneTotal = 0;

    ffInputs.forEach((input, index) => {
      const ffValue = parseFloat(input.value);
      const fsValue = parseFloat(fsInputs[index].value);

      if (!isNaN(ffValue) && !isNaN(fsValue)) {
        const resultOne = ffValue * fsValue;
        resultFieldsOne[index].textContent = resultOne.toLocaleString();

        levelOneTotal += resultOne;
      } else {
        resultFieldsOne[index].textContent = 0;
      }
    });

    const totalLevelOneResult = levelOneTotal;

    totalLevelOne.textContent = levelOneTotal.toLocaleString();

    // first col first calc end

    // first col second calc
    const sfInputs = document.querySelectorAll(".sf_col");
    const ssInputs = document.querySelectorAll(".ss_col");
    const resultFieldsTwo = document.querySelectorAll(".sp_result");
    const totalLevelTwo = document.getElementById("totalLevelTwo");

    let levelTwoTotal = 0;

    sfInputs.forEach((input, index) => {
      const sfValue = parseFloat(input.value);
      const ssValue = parseFloat(ssInputs[index].value);

      if (!isNaN(sfValue) && !isNaN(ssValue)) {
        const resultTwo = sfValue * ssValue;
        resultFieldsTwo[index].textContent = resultTwo.toLocaleString();

        levelTwoTotal += resultTwo;
      } else {
        resultFieldsTwo[index].textContent = 0;
      }
    });

    const totalLevelTwoResult = levelTwoTotal;
    totalLevelTwo.textContent = levelTwoTotal.toLocaleString();
    // first col second calc end

    // third col solar start
    const solarFirstInputs = document.querySelectorAll(".solar_first_col");
    const solarSecondInputs = document.querySelectorAll(".solar_second_col");
    const resultFieldsSolar = document.querySelectorAll(".solar_result");
    const totalSolarPower = document.getElementById("totalSolarPower");
    const solarPowerResult = document.getElementById("solar_power_result");

    let solarTotal = 0;

    solarFirstInputs.forEach((input, index) => {
      const solarFirstValue = parseFloat(input.value);
      const solarSecondValue = parseFloat(solarSecondInputs[index].value);

      if (!isNaN(solarFirstValue) && !isNaN(solarSecondValue)) {
        const resultSolar = solarFirstValue * solarSecondValue;
        resultFieldsSolar[index].textContent = resultSolar.toLocaleString();

        solarTotal += resultSolar;
      } else {
        resultFieldsSolar[index].textContent = 0;
      }
    });

    const totalSolarPowerAdd = solarTotal;
    totalSolarPower.textContent = solarTotal.toLocaleString();
    solarPowerResult.textContent = solarTotal.toLocaleString();

    // third col solar end

    // first col third table start
    const tfInputs = document.querySelectorAll(".tf_col");
    const tsInputs = document.querySelectorAll(".ts_col");
    const resultFieldsThree = document.querySelectorAll(".tp_result");
    const totalLevelThree = document.getElementById("totalLevelThree");

    let levelThreeTotal = 0;

    tfInputs.forEach((input, index) => {
      const tfValue = parseFloat(input.value);
      const tsValue = parseFloat(tsInputs[index].value);

      if (!isNaN(tfValue) && !isNaN(tsValue)) {
        const resultThree = tfValue * tsValue;
        resultFieldsThree[index].textContent = resultThree.toLocaleString();

        levelThreeTotal += resultThree;
        // console.log(levelThreeTotal); //thik ache
      } else {
        resultFieldsThree[index].textContent = 0;
      }
    });

    // adding solar total
    const solarTotalP = parseFloat(
      document
        .getElementById("solar_power_result")
        .textContent.replace(/,/g, "")
    );
    // console.log(solarTotal);
    levelThreeTotal = solarTotalP + levelThreeTotal;

    // adding solar total
    const totalLevelThreeResult = levelThreeTotal;
    totalLevelThree.textContent = levelThreeTotal.toLocaleString();

    // console.log(levelThreeTotal);
    // first col third table end

    const lvlOneResult = document.getElementById("lvl_one_result");
    const profitLevelOne = totalLevelOneResult / result;
    const roundedProfitOne =
      profitLevelOne - Math.floor(profitLevelOne) > 0.5
        ? Math.ceil(profitLevelOne)
        : Math.floor(profitLevelOne);
    lvlOneResult.textContent = roundedProfitOne;

    const lvlTwoResult = document.getElementById("lvl_two_result");
    const profitLevelTwo =
      (totalLevelOneResult + totalLevelTwoResult) / resultTwo;
    const roundedProfitTwo =
      profitLevelTwo - Math.floor(profitLevelTwo) > 0.5
        ? Math.ceil(profitLevelTwo)
        : Math.floor(profitLevelTwo);
    lvlTwoResult.textContent = roundedProfitTwo;

    const lvlThreeResult = document.getElementById("lvl_three_result");
    const profitLevelThree =
      (totalLevelOneResult +
        totalLevelTwoResult +
        totalLevelThreeResult +
        totalSolarPowerAdd) /
      resultThree;
    const roundedProfitThree =
      profitLevelThree - Math.floor(profitLevelThree) > 0.5
        ? Math.ceil(profitLevelThree)
        : Math.floor(profitLevelThree);
    lvlThreeResult.textContent = roundedProfitThree;

    // profit first table end

    const levelOneDays = document.getElementById("level_one_days");
    const levelTwoDays = document.getElementById("level_two_days");
    const levelThreeDays = document.getElementById("level_three_days");

    levelOneDays.textContent = roundedProfitOne;
    let dateOne = roundedProfitOne;
    //  console.log("Date one is:", dateOne);

    levelTwoDays.textContent = roundedProfitTwo;
    let dateTwo = roundedProfitTwo;

    levelThreeDays.textContent = roundedProfitThree;
    let dateThree = roundedProfitThree;

    const inputDateOne = document.getElementById("built_date_one");
    const inputDateTwo = document.getElementById("built_date_two");
    const inputDateThree = document.getElementById("built_date_three");

    const profitOneDays = document.getElementById("profit_one_days");
    const profitTwoDays = document.getElementById("profit_two_days");
    const profitThreeDays = document.getElementById("profit_three_days");

    const selectedDateOne = inputDateOne.value;

    if (selectedDateOne) {
      const calculatedDateOne = new Date(selectedDateOne);
      calculatedDateOne.setDate(calculatedDateOne.getDate() + dateOne - 1);

      const formattedDateOne = calculatedDateOne.toLocaleDateString("en-US", {
        month: "long",
        day: "numeric",
        year: "numeric",
      });
      profitOneDays.textContent = formattedDateOne;
    }

    const selectedDateTwo = inputDateTwo.value;

    if (selectedDateTwo) {
      const calculatedDateTwo = new Date(selectedDateTwo);
      calculatedDateTwo.setDate(calculatedDateTwo.getDate() + dateTwo - 1);

      const formattedDateTwo = calculatedDateTwo.toLocaleDateString("en-US", {
        month: "long",
        day: "numeric",
        year: "numeric",
      });
      profitTwoDays.textContent = formattedDateTwo;
    }

    const selectedDateThree = inputDateThree.value;

    if (selectedDateThree) {
      const calculatedDateThree = new Date(selectedDateThree);
      calculatedDateThree.setDate(
        calculatedDateThree.getDate() + dateThree - 1
      );

      const formattedDateThree = calculatedDateThree.toLocaleDateString(
        "en-US",
        { month: "long", day: "numeric", year: "numeric" }
      );
      profitThreeDays.textContent = formattedDateThree;
    }
  }
});

const priceInputSaveF = () => {
  const priceInputSaves = document.querySelectorAll(".price_input_save");

  priceInputSaves.forEach((priceInputSave, index) => {
    // Retrieve the saved value from localStorage and set it to the input
    const savedValue = localStorage.getItem(`savedPriceBrowser${index}`);
    if (savedValue !== null) {
      priceInputSave.value = savedValue;
    }

    // Add an event listener to save the value to localStorage on input change
    priceInputSave.addEventListener("input", () => {
      localStorage.setItem(`savedPriceBrowser${index}`, priceInputSave.value);
    });
  });
};

priceInputSaveF();

// Function to save input values to localStorage
const dateInputs = document.querySelectorAll("input[type='date']"); // Select all date inputs

// Function to save the selected date for a specific input
function saveDate(inputElement) {
  const selectedDate = inputElement.value;
  const inputId = inputElement.id;
  localStorage.setItem(inputId, selectedDate); // Save with unique key based on input ID
}

// Add event listener to all date inputs
dateInputs.forEach((input) => {
  input.addEventListener("change", () => saveDate(input));
});

// Retrieve saved dates on page load and set them as initial values
dateInputs.forEach((input) => {
  const savedDate = localStorage.getItem(input.id);
  if (savedDate) {
    input.value = savedDate;
  }
});
