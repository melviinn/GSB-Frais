const links = document.querySelectorAll('.nav-item');

$(".nav-item").click(function() {
    $(".nav-item").removeClass("active"); // This will remove active classes from all <li> tags
    $(this).addClass("active"); // This will add active class in clicked <li>
});