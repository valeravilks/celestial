/**
 * Adding a new script component to the page. The script is loaded depending on whether it is on the page
 */

export async function checkComponentModule(className, loadModule) {
  let elements = document.querySelectorAll(`.${className}`);

  if (elements.length > 0) {
    const {default: Component} = await loadModule();

    elements.forEach((el) => {
        new Component(el);
    });
  }
}
