document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".delete-college-btn");
    const collegeNameSpan = document.getElementById("collegeName");
    const deleteForm = document.getElementById("deleteForm");

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            const collegeName = this.getAttribute("data-name");
            const deleteUrl = this.getAttribute("data-url");

            collegeNameSpan.textContent = collegeName;
            deleteForm.action = deleteUrl;
        });
    });
});