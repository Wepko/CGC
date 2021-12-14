import MicroModal from 'micromodal';


MicroModal.init({
	onShow: (modal, b, e) => {
		const text = e.target.text;
		const title =	modal.querySelector('#modal-1-title');
		title.innerText = text;
	}, // [1]
	onClose: modal => console.info(`${modal.id} is hidden`), // [2]
	openTrigger: 'data-custom-open', // [3]
	closeTrigger: 'data-custom-close', // [4]
	openClass: 'is-open', // [5]
	disableScroll: true, // [6]
	disableFocus: false, // [7]
	awaitOpenAnimation: true, // [8]
	awaitCloseAnimation: true, // [9]
	debugMode: false // [10]
});

// MicroModal.show('modal-1', {
// 	closeTrigger: 'data-custom-close',
// });