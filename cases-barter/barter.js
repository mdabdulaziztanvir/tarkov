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

//weapon barter case calculation
document.addEventListener("input", function (cases) {
  cases.target.id === "pistols" ||
    cases.target.id === "fuel" ||
    cases.target.id === "barterBitcoin" ||
    cases.target.id === "moonshine" ||
    cases.target.id === "vodka" ||
    cases.target.id === "slickers" ||
    cases.target.id === "eMotor" ||
    cases.target.id === "wires" ||
    cases.target.id === "brokenLcd" ||
    cases.target.id === "asea";

  // weapon case one calc start
  const pistols = document.getElementById("pistols");
  const pistolValue = parseFloat(pistols.value);

  let pistolValueTFive = pistolValue * 5;

  const fuel = document.getElementById("fuel");
  const fuelValue = parseFloat(fuel.value);
  let fuelValueTFive = fuelValue * 5;

  let pistolFuel = pistolValueTFive + fuelValueTFive;

  const pistolFuelOutput = document.getElementById("pistolFuelOp");

  pistolFuelOutput.textContent = pistolFuel;

  // weapon case one calc end

  // weapon case two calc start
  const barterBitcoin = document.getElementById("barterBitcoin");
  const barterBitcoinValue = parseFloat(barterBitcoin.value);

  let barterBitcoinValueTen = barterBitcoinValue * 10;

  const barterBitcoinOutput = document.getElementById("barterBitcoinOp");

  barterBitcoinOutput.textContent = barterBitcoinValueTen;
  // weapon case two calc end

  // weapon case three calc start
  const moonshine = document.getElementById("moonshine");
  const vodka = document.getElementById("vodka");
  const slickers = document.getElementById("slickers");

  const moonshinelValue = parseFloat(moonshine.value);
  let moonshinelValueTen = moonshinelValue * 10;

  const vodkaValue = parseFloat(vodka.value);
  let vodkaValueTen = vodkaValue * 10;

  const slickersValue = parseFloat(slickers.value);
  let slickersValueFive = slickersValue * 5;

  let moonshineVodkaSlickers =
    moonshinelValueTen + vodkaValueTen + slickersValueFive;

  const moonSlickerOp = document.getElementById("moonSlickerOp");
  moonSlickerOp.textContent = moonshineVodkaSlickers;
  // weapon case three calc end

  // weapon case four calc start
  const eMotor = document.getElementById("eMotor");
  const wires = document.getElementById("wires");
  const brokenLcd = document.getElementById("brokenLcd");
  const asea = document.getElementById("asea");
  const motorWiresLcdOp = document.getElementById("motorWiresLcdOp");

  const eMotorValue = parseFloat(eMotor.value);
  let eMotorValueEight = eMotorValue * 8;

  const wiresValue = parseFloat(wires.value);
  let wiresValueFifteen = wiresValue * 15;

  const brokenLcdValue = parseFloat(brokenLcd.value);
  let brokenLcdValuefour = brokenLcdValue * 4;

  const aseaValue = parseFloat(asea.value);
  let aseaValueOne = aseaValue * 1;

  let mechanicLL3 =
    eMotorValueEight + wiresValueFifteen + brokenLcdValuefour + aseaValueOne;

  motorWiresLcdOp.textContent = mechanicLL3;
  // weapon case four calc end

  // ***find smallest ***

  // Function to filter out NaN values
  const filterNaN = (number) => !isNaN(number);

  // Filter out NaN values and get actual numbers
  const numbers = [
    mechanicLL3,
    moonshineVodkaSlickers,
    barterBitcoinValueTen,
    pistolFuel,
  ];
  const actualNumbers = numbers.filter(filterNaN);

  if (actualNumbers.length > 0) {
    const smallest = Math.min(...actualNumbers);

    // Reset the background color for all elements
    pistolFuelOutput.style.outline = "";
    barterBitcoinOutput.style.outline = "";
    moonSlickerOp.style.outline = "";
    motorWiresLcdOp.style.outline = "";

    // Find the element corresponding to the smallest number and change its background color
    if (smallest === mechanicLL3) {
      motorWiresLcdOp.style.outline = "6px solid green";
    } else if (smallest === moonshineVodkaSlickers) {
      moonSlickerOp.style.outline = "6px solid green";
    } else if (smallest === barterBitcoinValueTen) {
      barterBitcoinOutput.style.outline = "6px solid green";
    } else if (smallest === pistolFuel) {
      pistolFuelOutput.style.outline = "6px solid green";
    }
  } else {
    // Reset the background color for all elements when there are no actual numbers
    pistolFuelOutput.style.outline = "";
    barterBitcoinOutput.style.outline = "";
    moonSlickerOp.style.outline = "";
    motorWiresLcdOp.style.outline = "";
  }
});

// thicc barter case calculation
document.addEventListener("input", function (thiccWeapons) {
  thiccWeapons.target.id === "thiccBitcoin" ||
    thiccWeapons.target.id === "thiccGp" ||
    thiccWeapons.target.id === "thermite" ||
    thiccWeapons.target.id === "eagle" ||
    thiccWeapons.target.id === "weapons" ||
    thiccWeapons.target.id === "ammo" ||
    thiccWeapons.target.id === "mParts";

  // thicc case one start
  const thiccBitcoin = document.getElementById("thiccBitcoin");
  const thiccBitcoinValue = parseFloat(thiccBitcoin.value);
  let thiccBitcoinValueTw = thiccBitcoinValue * 20;

  const thiccGp = document.getElementById("thiccGp");
  const thiccGpValue = parseFloat(thiccGp.value);
  let thiccGpValueTw = thiccGpValue * 20;

  let thiccBitGp = thiccBitcoinValueTw + thiccGpValueTw;

  const thiccBitcoinGpOp = document.getElementById("thiccBitcoinGpOp");

  thiccBitcoinGpOp.textContent = thiccBitGp;

  // thicc case one end

  // thicc case two start
  const thermite = document.getElementById("thermite");
  const thermiteValue = parseFloat(thermite.value);

  let thermiteValueTw0 = thermiteValue * 2;

  const eagle = document.getElementById("eagle");
  const eagleValue = parseFloat(eagle.value);
  let eagleValueTwo = eagleValue * 2;

  let thermiteEagle = thermiteValueTw0 + eagleValueTwo;

  const thermiteEagleOp = document.getElementById("thermiteEagleOp");

  thermiteEagleOp.textContent = thermiteEagle;
  // thicc case two end

  // thicc case three start
  const weapons = document.getElementById("weapons");
  const weaponsValue = parseFloat(weapons.value);
  let weaponsValueTw0 = weaponsValue * 2;

  const ammo = document.getElementById("ammo");
  const ammoValue = parseFloat(ammo.value);
  let ammoValueFour = ammoValue * 4;

  const mParts = document.getElementById("mParts");
  const mPartsValue = parseFloat(mParts.value);
  let mPartsValueTen = mPartsValue * 10;

  let weaAmmParts = weaponsValueTw0 + ammoValueFour + mPartsValueTen;

  const weaponAmmoMOp = document.getElementById("weaponAmmoMOp");

  weaponAmmoMOp.textContent = weaAmmParts;
  // thicc case three end

  // ***find smallest ***

  const thiccFilterNaN = (number) => !isNaN(number);

  const thiccNumbers = [thiccBitGp, thermiteEagle, weaAmmParts];
  const thiccActualNumbers = thiccNumbers.filter(thiccFilterNaN);

  if (thiccActualNumbers.length > 0) {
    const thiccSmallest = Math.min(...thiccActualNumbers);
    thiccBitcoinGpOp.style.outline = "";
    thermiteEagleOp.style.outline = "";
    weaponAmmoMOp.style.outline = "";

    if (thiccSmallest === thiccBitGp) {
      thiccBitcoinGpOp.style.outline = "6px solid green";
    } else if (thiccSmallest === thermiteEagle) {
      thermiteEagleOp.style.outline = "6px solid green";
    } else if (thiccSmallest === weaAmmParts) {
      weaponAmmoMOp.style.outline = "6px solid green";
    }
  } else {
    thiccBitcoinGpOp.style.outline = "";
    thermiteEagleOp.style.outline = "";
    weaponAmmoMOp.style.outline = "";
  }
});

// thicc item case one calc
document.addEventListener("input", function (thiccItems) {
  thiccItems.target.id === "smt" ||
    thiccItems.target.id === "flashDrive" ||
    thiccItems.target.id === "blueFolder" ||
    // thicc item case calc two

    thiccItems.target.id === "defibrillator" ||
    thiccItems.target.id === "ledex" ||
    thiccItems.target.id === "ibuprofen" ||
    thiccItems.target.id === "toothpaste" ||
    thiccItems.target.id === "bottleMoonshine" ||
    thiccItems.target.id === "bottleVodka" ||
    thiccItems.target.id === "bottleWhiskey";

  const smt = document.getElementById("smt");
  const smtValue = parseFloat(smt.value);
  let smtValueTh = smtValue * 30;

  const flashDrive = document.getElementById("flashDrive");
  const flashDriveValue = parseFloat(flashDrive.value);
  let flashDriveValueTh = flashDriveValue * 30;

  const blueFolder = document.getElementById("blueFolder");
  const blueFolderValue = parseFloat(blueFolder.value);
  let blueFolderValueTw = blueFolderValue * 20;

  const smtFlashBlueOp = document.getElementById("smtFlashBlueOp");

  let firstOption = smtValueTh + flashDriveValueTh + blueFolderValueTw;

  smtFlashBlueOp.textContent = firstOption;

  // second options
  const defibrillator = document.getElementById("defibrillator");
  const defibrillatorValue = parseFloat(defibrillator.value);
  let defibrillatorValueF = defibrillatorValue * 15;

  const ledex = document.getElementById("ledex");
  const ledexValue = parseFloat(ledex.value);
  let ledexValueF = ledexValue * 15;

  const ibuprofen = document.getElementById("ibuprofen");
  const ibuprofenValue = parseFloat(ibuprofen.value);
  let ibuprofenValueF = ibuprofenValue * 15;

  const toothpaste = document.getElementById("toothpaste");
  const toothpasteValue = parseFloat(toothpaste.value);
  let toothpasteValueF = toothpasteValue * 15;

  const defiLedProfenToothOp = document.getElementById("defiLedProfenToothOp");

  let secondOption =
    defibrillatorValueF + ledexValueF + ibuprofenValueF + toothpasteValueF;

  defiLedProfenToothOp.textContent = secondOption;

  // third options
  const bottleMoonshine = document.getElementById("bottleMoonshine");
  const bottleMoonshineValue = parseFloat(bottleMoonshine.value);
  let bottleMoonshineValueF = bottleMoonshineValue * 50;

  const bottleVodka = document.getElementById("bottleVodka");
  const bottleVodkaValue = parseFloat(bottleVodka.value);
  let bottleVodkaValueF = bottleVodkaValue * 50;

  const bottleWhiskey = document.getElementById("bottleWhiskey");
  const bottleWhiskeyValue = parseFloat(bottleWhiskey.value);
  let bottleWhiskeyValueF = bottleWhiskeyValue * 30;

  const bottleMoonVodWhisOp = document.getElementById("bottleMoonVodWhisOp");

  let thirdOption =
    bottleMoonshineValueF + bottleVodkaValueF + bottleWhiskeyValueF;

  bottleMoonVodWhisOp.textContent = thirdOption;

  // ***find smallest ***

  const thiccItemFilterNaN = (number) => !isNaN(number);

  const thiccItemNumbers = [firstOption, secondOption, thirdOption];
  const thiccItemActualNumbers = thiccItemNumbers.filter(thiccItemFilterNaN);

  if (thiccItemActualNumbers.length > 0) {
    const thiccItemSmallest = Math.min(...thiccItemActualNumbers);
    smtFlashBlueOp.style.outline = "";
    defiLedProfenToothOp.style.outline = "";
    bottleMoonVodWhisOp.style.outline = "";

    if (thiccItemSmallest === firstOption) {
      smtFlashBlueOp.style.outline = "6px solid green";
    } else if (thiccItemSmallest === secondOption) {
      defiLedProfenToothOp.style.outline = "6px solid green";
    } else if (thiccItemSmallest === thirdOption) {
      bottleMoonVodWhisOp.style.outline = "6px solid green";
    }
  } else {
    smtFlashBlueOp.style.outline = "";
    defiLedProfenToothOp.style.outline = "";
    bottleMoonVodWhisOp.style.outline = "";
  }
});
