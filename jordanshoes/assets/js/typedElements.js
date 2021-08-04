function typeWriter(element) {
  //Get an text and transform in an array 
  const arrayText = element.innerHTML.split('');
  //Let the text blank
  element.innerHTML = '';
  //iterates the array and displays each letter every 75 mileseconds multiplied by the i
  //showing one letter at a time
  arrayText.forEach(
    (letter, i) => {
      setTimeout(
          () => 
            element.innerHTML += letter, 75 * i
      )
    }
  );
}

const title = document.querySelector('.information-text');
typeWriter(title);