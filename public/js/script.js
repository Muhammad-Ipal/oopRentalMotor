

// Dropdown

const dropdownButton = document.getElementById("dropdown-button");
const dropdownContent = document.getElementById("dropdown-content");
const dropdownIcon = document.getElementById("dropdown-icon");

dropdownButton.addEventListener("click", () => {
  if (dropdownContent.style.display === "none") {
    dropdownContent.style.display = "block";
    dropdownIcon.classList.remove("rotate-180");
    dropdownIcon.classList.add("rotate-0");
  } else {
    dropdownContent.style.display = "none";
    dropdownIcon.classList.remove("rotate-0");
    dropdownIcon.classList.add("rotate-180");
  }
});
