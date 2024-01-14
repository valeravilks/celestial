import MicroModal from "micromodal";

export default class {
    constructor()
    {
      if (typeof Micromodal === 'undefined') {
        MicroModal.init();

      }

        console.log('test');

        MicroModal.show('modal-1');
    }
}
