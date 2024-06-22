    // Call the loadContent function with 'home.html' as the default page
loadContent('home.php');

function loadContent(page) {

    fetch(page)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-placeholder').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching content:', error);
        });
  }


    // Function to scroll to the top of the page
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Attach click event to footer links
    document.addEventListener('DOMContentLoaded', function () {
        var footerLinks = document.querySelectorAll('#site-footer a');
        footerLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                scrollToTop(); // Scroll to the top when a link in the footer is clicked
            });
        });
    });



















    function submitForm() {
        var form = document.getElementById("feedbackForm");
        var formData = new FormData(form);
    
        $.ajax({
            url: form.getAttribute("action"),
            type: form.getAttribute("method"),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    swal({
                        title: "Good job!",
                        text: "Your feedback has been submitted successfully!",
                        icon: "success"
                    });
                } else {
                    swal({
                        title: "Poor job!",
                        text: "Oops... Something went wrong! Please try again later.",
                        icon: "error"
                    });
                }
            },
            error: function() {
                swal({
                    title: "Error!",
                    text: "Oops... Something went wrong! Please try again later.",
                    icon: "error"
                });
            }
        });
    }
    