const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('search-container');
keyword.onkeyup = async () => {
  const response = await fetch('ajax/search.php?keyword=' + keyword.value);
  searchContainer.innerHTML = await response.text();
};
