/**
 * This is the js file for working atom Example
 *
 * Be sure to fill the class Component variable with the desired component class value
 *
 *
 */
export default class {
  rootElement;
  constructor(el) {
    this.rootElement = el;
    console.log('This is Example js');
    console.log(el);
  }
}

/**
 * A function that initializes classes for each component. If there is no such component, then the class is not loaded
 * @constructor
 */
// export default async function AtomExampleInit() {
//   let elements = document.querySelectorAll(`.a-example`);
//
//   if (elements.length > 0) {
//     elements.forEach((el) => {
//       new AtomExample(el);
//     });
//   }
// }
