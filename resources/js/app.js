document.addEventListener('DOMContentLoaded', () => {
    const filters = document.querySelectorAll('.catalog-filter');
    const serviceCards = document.querySelectorAll('.service-card');

    filters.forEach((filterButton) => {
        filterButton.addEventListener('click', () => {
            const selectedCategory = filterButton.dataset.filter;

            filters.forEach((button) => {
                const isActive = button === filterButton;
                button.classList.toggle('is-active', isActive);
                button.setAttribute('aria-pressed', String(isActive));
            });

            serviceCards.forEach((card) => {
                const isVisible = selectedCategory === 'all' || card.dataset.category === selectedCategory;
                card.hidden = !isVisible;
            });
        });
    });

    const billSlider = document.querySelector('#bill-slider');

    if (billSlider instanceof HTMLInputElement) {
        const billDisplay = document.querySelector('#bill-display');
        const capacityDisplay = document.querySelector('#calc-capacity');
        const savingsDisplay = document.querySelector('#calc-savings');
        const carbonDisplay = document.querySelector('#calc-co2');
        const rupiah = new Intl.NumberFormat('id-ID');
        const decimal = new Intl.NumberFormat('id-ID', { maximumFractionDigits: 1 });

        const updateEstimate = () => {
            const monthlyBill = Number(billSlider.value);
            const capacity = Math.max(1.2, monthlyBill / 1_250_000);
            const monthlySavings = Math.round(monthlyBill * 0.45);
            const annualCarbonReduction = capacity * 1.35;

            if (
                billDisplay instanceof HTMLOutputElement
                && capacityDisplay instanceof HTMLElement
                && savingsDisplay instanceof HTMLElement
                && carbonDisplay instanceof HTMLElement
            ) {
                billDisplay.textContent = `Rp ${rupiah.format(monthlyBill)}`;
                capacityDisplay.textContent = `${decimal.format(capacity)} kWp`;
                savingsDisplay.textContent = `Rp ${rupiah.format(monthlySavings)}`;
                carbonDisplay.textContent = `${decimal.format(annualCarbonReduction)} ton / tahun`;
            }
        };

        billSlider.addEventListener('input', updateEstimate);
        updateEstimate();
    }

    const faqButtons = document.querySelectorAll('.faq-question');

    faqButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const item = button.closest('.faq-item');
            const isOpen = item.classList.contains('open');

            faqButtons.forEach((otherButton) => {
                const otherItem = otherButton.closest('.faq-item');
                otherItem.classList.remove('open');
                otherButton.setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
