const searchNews = (elementId, url, targetElementId) => {
  const element = document.getElementById(elementId);
  const targetElement = document.getElementById(targetElementId);

  if (!element || !targetElement) return;

  element.addEventListener('keyup', async () => {
    try {
      const response = await fetch(url + element.value);
      const data = await response.text();
      targetElement.innerHTML = data;
    } catch (error) {
      console.error(error);
    }
  });
};

searchNews('keyword', 'components/news.php?keyword=', 'news');
searchNews('search', '../components/admin.news.php?search=', 'admin-news');
