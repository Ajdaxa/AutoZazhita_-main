document.addEventListener('DOMContentLoaded', () => {
	document.addEventListener('click', event => {
		const button = event.target.closest('.dropdown__toggle')
		if (button) {
			const dropdown = button.closest('.dropdown')
			const dropList = dropdown.querySelector('.dropdown__list')
			// document.querySelectorAll('.dropdown__list.open').forEach(list => {
			// 	if (list !== dropList) {
			// 		list.classList.remove('open')
			// 		const otherButton = list
			// 			.closest('.dropdown')
			// 			.querySelector('.dropdown__toggle')
			// 		otherButton.classList.remove('rotated')
			// 	}
			// })
			dropList.classList.toggle('open')
			button.classList.toggle('rotated')
		}
	})
})


document.addEventListener('DOMContentLoaded', () => {
	const inputPlate = document.querySelector('.calculate__input-user_plate')

	// Разрешенные буквы для госномера
	const allowedLetters = /^[АВЕКМНОРСТУХ]$/i

	inputPlate.addEventListener('input', event => {
		const value = inputPlate.value.toUpperCase() // Приводим к верхнему регистру
		let validatedValue = ''

		for (let i = 0; i < value.length; i++) {
			const char = value[i]

			if ((i === 0 || i === 4 || i === 5) && allowedLetters.test(char)) {
				// Первый, пятый и шестой символы должны быть буквами
				validatedValue += char
			} else if (
				(i === 1 || i === 2 || i === 3 || i === 6 || i === 7 || i === 8) &&
				!isNaN(char) &&
				char !== ' '
			) {
				// Остальные символы (2, 3, 4, 7, 8, 9) должны быть цифрами
				validatedValue += char
			}
		}

		// Обновляем значение инпута
		inputPlate.value = validatedValue
	})
})