const toggleButton = document.getElementById('theme-toggle');
const wrapper = document.querySelector('.wrapper');

// Function to apply a theme
function applyTheme(theme) {
  if (theme === 'dark') {
    wrapper.classList.add('dark-mode');
  } else {
    wrapper.classList.remove('dark-mode');
  }
}

// check if a theme was selected first
const storedTheme = localStorage.getItem('theme');

if (storedTheme) {
  // if a theme is chosen previously, use that.
  applyTheme(storedTheme);
} else {
  // else, check if there is a system preference
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  applyTheme(prefersDark ? 'dark' : 'light');
}

// when the toggler is clicked
toggleButton.addEventListener('click', () => {
  if (wrapper.classList.contains('dark-mode')) {
    wrapper.classList.remove('dark-mode');
    localStorage.setItem('theme', 'light');
  } else {
    wrapper.classList.add('dark-mode');
    localStorage.setItem('theme', 'dark');
  }
});