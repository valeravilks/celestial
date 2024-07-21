import Cookies from 'js-cookie';

export default class {
  rootElement;

  constructor(el) {
    this.rootElement = el;
    console.log('This is Cookie11 js');
    console.log(el);




    let element = el.querySelector('[data-component-js="close-cookie"]');

    if (Cookies.get('cookie-consent') === 'true') {
      el.classList.add('hidden');
    } else {
      // el.classList.remove('hidden');
    }

    element.addEventListener('click', () => {
      Cookies.set('cookie-consent', 'true', { expires: 365 });
      el.classList.add('hidden');
      console.log('Not visible element')
    })
  }
}
