console.log("asdddddddddddddddddddddddddddddddddddddddddddddddddd");
// document
//   .getElementById("language-change")
//   .addEventListener("change", function () {
//     var selectedLanguage = this.value;
//     var element = document.querySelector(".axax");

//     if (selectedLanguage === "English") {
//       element.textContent = element.getAttribute("data-en");
//     } else if (selectedLanguage === "French") {
//       element.textContent = element.getAttribute("data-fr");
//     }
//   });

// document.getElementById("language-change").addEventListener("change", function () {
//   var selectedLanguage = this.value;
//   var elements = document.querySelectorAll(".lang-change-js");

//   elements.forEach(function (element) {
//       if (selectedLanguage === "English") {
//           element.textContent = element.getAttribute("data-en");
//       } else if (selectedLanguage === "French") {
//           element.textContent = element.getAttribute("data-fr");
//       }
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  var languageChangeElement = document.getElementById("language-change");

  // Load the saved language preference from localStorage
  var savedLanguage = localStorage.getItem("selectedLanguage");
  if (savedLanguage) {
    languageChangeElement.value = savedLanguage;
    updateTextContent(savedLanguage);
  }

  languageChangeElement.addEventListener("change", function () {
    var selectedLanguage = this.value;
    // Save the selected language in localStorage
    localStorage.setItem("selectedLanguage", selectedLanguage);
    updateTextContent(selectedLanguage);
  });

  function updateTextContent(language) {
    var elements = document.querySelectorAll(".lang-change-js");
    elements.forEach(function (element) {
      if (language === "English") {
        element.textContent = element.getAttribute("data-en");
      } else if (language === "French") {
        element.textContent = element.getAttribute("data-fr");
      }
    });
  }
});
