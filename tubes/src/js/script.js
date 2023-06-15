const element = document.getElementById('keyword');
const targetElement = document.getElementById('news');

element.addEventListener('keyup', async () => {
  try {
    const response = await fetch(
      `components/news.php?keyword=${element.value}`
    );
    const data = await response.text();
    targetElement.innerHTML = data;
  } catch (error) {
    console.error(error);
  }
});
