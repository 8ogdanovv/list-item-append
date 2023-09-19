function listItemAppend(parameters) {
  // Create a new div element
  const newDiv = document.createElement("div");

  // Set the content for the div with some (e.g. Advertising) text
  newDiv.innerHTML = `
    Huge Cosmetics Sale: Save up to 50% off on all your favorite beauty products!<br>
    <a href="https://vadym4che.github.io//list-item-append" target="_blank"
    style="font-weight: 500; font-style: italic;">View at GH-pages</a>
    `;

  // Add a class to the div for additional styling (if needed)
  newDiv.classList.add("custom-div");

  // Find the target element (4th product)
  const targetElement = document.querySelector(
    ".products.list.items.product-items > li:nth-child(4)"
  );

  // Create a new li element to wrap the div
  const newLi = document.createElement("li");
  newLi.classList.add("custom-li"); // Add a class to the li for styling
  newLi.appendChild(newDiv);

  // Insert the new li after the target element
  targetElement.parentNode.insertBefore(newLi, targetElement.nextSibling);

  // Add styles for the custom li
  const customLiStyle = `
  .custom-li {
    display: flex; /* Use flexbox to center content */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */

    text-align: center;
    font-size: 4rem; /* Huge font for huge sale :) */
    font-weight: 700;
    font-variant: small-caps;

    width: 100%; /* Default width */
    height: auto; /* Adjust height as needed */
    box-sizing: border-box;
    margin: 1.5rem 0.5rem 3.25rem; /* Margin for card */
    padding: 1rem; /* Padding for card */

    border-radius: 10px; /* Rounded corners */
    box-shadow: 1px 1px 5px 5px #f1f1f1; /* Box shadow */
    background: #fff; /* Background color */
  }

  /* Media query for screens with 3 columns */
  @media screen and (min-width: 768px) {
    .custom-li {
      width: 66.66%; /* 2/3 of the width */
    }
  }

  /* Media query for mobile screens */
  @media screen and (max-width: 767px) {
    .custom-li {
      width: 100%; /* Full width on mobile */
    }
  }
  `;

  // Create a style element and append the styles
  const styleElement = document.createElement("style");
  styleElement.textContent = customLiStyle;
  document.head.appendChild(styleElement);
}
