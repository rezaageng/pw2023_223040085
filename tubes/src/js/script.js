document.addEventListener('DOMContentLoaded', function () {
  const keyword = document.getElementById('keyword');
  const news = document.getElementById('news');

  keyword.addEventListener('keyup', async function () {
    try {
      const response = await fetch(
        'components/news.php?keyword=' + keyword.value
      );
      const data = await response.text();
      news.innerHTML = data;
    } catch (error) {
      console.error(error);
    }
  });
});
