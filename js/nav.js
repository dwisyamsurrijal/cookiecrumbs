window.addEventListener("scroll", function () {
  const header = document.getElementById("mainHeader");
  const toggler = document.getElementById("humbergerToggler");
  if (window.scrollY > 0 || toggler.classList.contains("active-nav")) {
    header.classList.add("nav-scroll");
  } else {
    header.classList.remove("nav-scroll");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("mainHeader");
  const mobileMenu = document.getElementById("mobileMenu");
  const toggler = document.getElementById("humbergerToggler");

  if (!mobileMenu || !toggler) {
    console.error("Element(s) not found. Please check the IDs.");
    return;
  }

  toggler.addEventListener("click", () => {
    toggler.classList.toggle("active-nav");

    if (toggler.classList.contains("active-nav")) {
      mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
      header.classList.add("nav-scroll");
    } else {
      mobileMenu.style.maxHeight = 0;

      // Only remove nav-scroll if the page is at the top and the menu is not active
      if (window.scrollY === 0) {
        header.classList.remove("nav-scroll");
      }
    }
  });
});
