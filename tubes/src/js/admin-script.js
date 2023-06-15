const element1 = document.getElementById('search');
const targetElement1 = document.getElementById('admin-news');

element1.addEventListener('keyup', async () => {
  try {
    const response = await fetch(
      `../components/admin.news.php?search=${element1.value}`
    );
    const data = await response.text();
    targetElement1.innerHTML = data;
  } catch (error) {
    console.error(error);
  }
});
