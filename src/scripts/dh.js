// --------Mode
const themeToggleBtn = document.querySelector(".theme-toggle");
const toggleLightTheme = () => {
    document.documentElement.classList.remove("fillB");
};
const toggleDarkTheme = () => {
    document.documentElement.classList.add("fillB");
};
const switchTheme = () => {
    const currentTheme = document.documentElement.classList.contains("fillB") ? "fillB" : "light";
    if (currentTheme === "fillB") {
        toggleLightTheme();
    } else {
        toggleDarkTheme();
    }
};
themeToggleBtn.addEventListener("click", switchTheme);
// Apply the initial dark theme class
document.documentElement.classList.add("fillB");
// --------Mode