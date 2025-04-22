import confetti from "https://esm.sh/canvas-confetti";
import { marked } from 'https://esm.sh/marked';

const markdownContainer = document.getElementById('markdown-input');
const navLinks = document.querySelectorAll('nav a');

navLinks.forEach(link => {
  link.addEventListener('click', async (e) => {
    const file = link.getAttribute('href');

    confetti({
      particleCount: 500,
      startVelocity: 50,
      spread: 800,
      origin: {
        x: Math.random(),
      },
    });

    if (!file.endsWith('.md')) return;

    e.preventDefault();

    try {
      const res = await fetch(file);
      if (!res.ok) throw new Error('Failed to load markdown file');
      const markdown = await res.text();
      markdownContainer.innerHTML = marked.parse(markdown);
    } catch (err) {
      markdownContainer.innerHTML = `<p>Error loading file: ${err.message}</p>`;
    }
  });
});
