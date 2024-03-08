console.log('caca');

const formSearch = document.querySelectorAll('[role="search"]');
console.log(formSearch[0][0]);

const searchText = formSearch[0][0];
searchText.className += ' form-control';

const searchText2 = document.getElementById("wp-block-search__input-1");
console.log(searchText2);

const searchButton = formSearch[0][1];
console.log(searchButton);
searchButton.className += ' btn btn-primary';

