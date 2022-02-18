	const input = document.querySelector('.mailpoet_submit') ?? null;
	if (input) {
		input.classList.add('btn-primary');
		input.removeAttribute('style');

	} 
	const title = document.querySelector('.project-header__title span').textContent;  
	const mailpoetInput = document.querySelector('input[title="mailpoet_home"]') ?? null; 

	if (mailpoetInput) {
		console.log('as', mailpoetInput);
		mailpoetInput.setAttribute('type', 'hidden');
		mailpoetInput.value = title || "Неизвестный дом";
	}
	