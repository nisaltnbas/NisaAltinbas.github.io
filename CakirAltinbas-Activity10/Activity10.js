$(document).ready(function() {
    $("#birthday").datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        defaultDate: new Date(2025, 5, 1), 
        changeMonth: false,
        changeYear: false,
       
       
    });
    
    var languages = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "C",
        "C++",
        "C#",
        "Java",
        "Swift",
        "Go",
        "Rust",
        "Kotlin"
    ];
    
    $("#language").autocomplete({
        source: languages
    });
    
    $("#myForm").on("submit", function(event) {
        event.preventDefault();
        
        var isValid = true;
        var languageValue = $("#language").val();
        var emailValue = $("#email").val();
        var websiteValue = $("#website").val();
        
        if (!languageValue) {
            alert("Please enter a programming language");
            isValid = false;
        }
  
        
        if (isValid) {
            alert("Form submitted successfully!");
            // You would typically send the data to a server here
            this.reset();
        }
        
    });
}); 