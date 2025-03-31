document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".delete-student-btn");
    const studentNameSpan = document.getElementById("studentName");
    const deleteForm = document.getElementById("deleteForm");

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            const studentName = this.getAttribute("data-name");
            const deleteUrl = this.getAttribute("data-url");

            studentNameSpan.textContent = studentName;
            deleteForm.action = deleteUrl;
        });
    });
});