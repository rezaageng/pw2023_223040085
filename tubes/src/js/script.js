document.addEventListener('DOMContentLoaded', () => {
  console.log('ready!');

  const keyword = document.getElementById('keyword');
  const search = document.getElementById('search');

  const news = document.getElementById('news');
  const adminNews = document.getElementById('admin-news');

  if (keyword) {
    keyword.addEventListener('keyup', async () => {
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
  }

  if (search) {
    search.addEventListener('keyup', async () => {
      console.log('hii');

      try {
        const response = await fetch(
          '../components/admin.news.php?search=' + search.value
        );
        const data = await response.text();
        adminNews.innerHTML = data;
      } catch (error) {
        console.error(error);
      }
    });
  }
});
