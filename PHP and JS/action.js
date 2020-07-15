function createNew()
{
  var newEl = document.createElement('li');
  var newContent = document.createTextNode("balsamic vinegar");
  newEl.className = "hot";
  newEl.appendChild(newContent);
  position = document.getElementsByTagName('ul')[0];
  position.appendChild(newEl);
}

function change()
{
  var first = document.getElementsByTagName('li')[0];
  first.className = "complete";
//  first.nextSibling.textContent = "kale";
}
