
    (function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const alertBox = document.getElementById('formAlert');
    const submitBtn = document.getElementById('contactSubmitBtn');

    function setAlert(type, text) {
    // type: 'success' | 'error'
    alertBox.style.display = 'block';
    alertBox.className = type === 'success' ? 'alert alert-success' : 'alert alert-danger';
    alertBox.textContent = text;
}

    function clearAlert() {
    alertBox.style.display = 'none';
    alertBox.textContent = '';
}

    function clearFieldErrors() {
    document.querySelectorAll('.field-error').forEach(el => el.textContent = '');
}

    function setFieldErrors(errors) {
    // Laravel returns { field: [msg1, msg2], ... }
    Object.keys(errors || {}).forEach((field) => {
    const el = document.querySelector(`[data-error-for="${field}"]`);
    if (el) el.textContent = errors[field][0];
});
}

    form.addEventListener('submit', async function (e) {
    e.preventDefault();
    clearAlert();
    clearFieldErrors();

    submitBtn.disabled = true;

    try {
    const formData = new FormData(form);

    const res = await fetch(form.action, {
    method: 'POST',
    headers: {
    'Accept': 'application/json', // important: makes Laravel return JSON validation errors
    'X-Requested-With': 'XMLHttpRequest'
},
    body: formData
});

    const data = await res.json().catch(() => ({}));

    if (res.ok && data.ok) {
    setAlert('success', data.message || 'Sent!');
    form.reset();
    return;
}

    // Validation error (422)
    if (res.status === 422) {
    setAlert('error', 'Please fix the highlighted fields.');
    setFieldErrors(data.errors);
    return;
}

    // Other server error
    setAlert('error', data.message || 'Something went wrong. Please try again.');
} catch (err) {
    setAlert('error', 'Network error. Please try again.');
} finally {
    submitBtn.disabled = false;
}
});
})();
