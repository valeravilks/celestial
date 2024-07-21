/**
 * Adding a new script component to the page. The script is loaded depending on whether it is on the page
 */

export async function loadJsForComponents()
{
    // Select all elements with a 'data-component' attribute
    const elements = document.querySelectorAll('[data-component]');

    // Convert NodeList to Array
    const elementsArray = Array.from(elements);

    // Create an object to map unique components
    const componentMap = {};

    // Filter out elements with unique 'data-component' attributes
    const uniqueElements = elementsArray.filter(element => {
        const component = element.dataset.component;
        if (!componentMap[component]) {
            componentMap[component] = true;
            return true;
        }
        return false;
    });

    // Iterate over unique elements
    for (const el of uniqueElements) {
      // Get the name of the component
        const elementName = el.getAttribute('data-component');

      // Convert dot notation to path notation
        const pathElement = elementName.replaceAll('.', '/');

        try {
          // Dynamically import the component
            const { default: Component } = await import('./' + pathElement);

          // Instantiate the imported component with the current element
          elementsArray.forEach((element) => {
                if (element.dataset.component === elementName) {
                    new Component(el);
                }
            })
        } catch (e) {
        }
    }
}
