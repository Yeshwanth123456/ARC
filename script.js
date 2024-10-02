document.addEventListener("DOMContentLoaded", function() {
    const forms = document.querySelectorAll("form");
    
    forms.forEach(form => {
        form.addEventListener("submit", function(event) {
            let isValid = true;
            const inputs = form.querySelectorAll("input[required], textarea[required]");
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = "red"; // Highlight empty fields
                } else {
                    input.style.borderColor = ""; // Reset if filled
                }
            });

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
                alert("Please fill out all required fields.");
            }
        });
    });
});