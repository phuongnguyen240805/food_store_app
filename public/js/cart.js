document.querySelectorAll('.qty-btn').forEach(button => {
    button.addEventListener('click', function() {
        const input = this.parentElement.querySelector('input');
        let value = parseInt(input.value);
        if (this.classList.contains('plus')) {
            input.value = value + 1;
        } else if (this.classList.contains('minus') && value > 1) {
            input.value = value - 1;
        }
    });
});